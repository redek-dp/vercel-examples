const version = "0.0.11";
const cacheName = `GdooLink-UrlShort-${version}`;
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
        `/`,
        `/images/favicon.png`,
        `/images/icons/icon-72x72.png`,
        `/images/icons/icon-96x96.png`,
        `/images/icons/icon-128x128.png`,
        `/images/icons/icon-144x144.png`,
        `/images/icons/icon-152x152.png`,
        `/images/icons/icon-192x192.png`,
        `/images/icons/icon-384x384.png`,
        `/images/icons/icon-512x512.png`,
        `/images/icon.png`,
        `/images/avatar.png`,
        `/images/WorldBanner.jpg`,
        `/images/favicon.ico`,
        `/index.php`,
        `/d-framework/css/bootstrap.min.css`,
        `/d-framework/dxconfont/font.css`,
        `/d-framework/font-icon/css/all.css`,
        `/d-framework/js/angular.min.js`,
        `/d-framework/js/jquery-3.3.1.slim.min.js`,
        `/d-framework/js/popper.min.js`,
        `/d-framework/js/bootstrap.min.js`,
        `/d-framework/js/addtoan.js`,
        `/js/index.js`,
        `/css/style.css`,
      ])
          .then(() => self.skipWaiting());
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName)
      .then(cache => cache.match(event.request, {ignoreSearch: true}))
      .then(response => {
      return response || fetch(event.request);
    })
  );
});