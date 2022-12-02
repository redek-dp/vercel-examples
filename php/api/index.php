<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GdooLink - Url Short</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Você pode reduzir os URLs para facilitar o compartilhamento usando o nosso encurtador de URL">
    <link rel="shortcut icon" href="images/icon.png">
    <meta content='summary_large_image' name='twitter:card' />
    <meta name="theme-color" content="#2d2138" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='application-name' content='GdooLink-UrlShort'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='apple-mobile-web-app-title' content='GdooLink-UrlShort'>
    <link rel='icon' sizes='192x192' href='images/icons/icon-192x192.png'>
    <link rel='apple-touch-icon' href='images/icons/icon-192x192.png'>
    <meta name='msapplication-TileImage' content='images/icons/icon-144x144.png'>
    <meta name='msapplication-TileColor' content='#2d2138'>
    <link rel="stylesheet" href="d-framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="d-framework/font-icon/css/all.css">
    <link rel="stylesheet" href="d-framework/dxconfont/font.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="ng-app bg-info">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color:/*#155592*/rgba(16, 39, 62, 0.58);">
        <img src="images/icon.png" class="rounded" height="40">
        <a class="navbar-brand nvty" href="index.php">GdooLink<small> Url Short</small></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav navbar-nav" id="myTabAxe" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> Home</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="https://davidsonbpe.github.io/devtermos/termos.html?=GdooLink" target="_blank" aria-controls="PrivacyTerms" aria-selected="false"><i class="fas fa-fingerprint"></i> Privacy Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-code"></i> Developer</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="tab-content" id="myTabAxeContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="space" style="padding-top: 200px;"></div>
            <?php
    
    echo '<div class="card card-body container bg-light shadow p-3">';
    echo '<form>';
    
    echo '<div class="form-group"><label for="formGroupEnterURL">Enter URL:</label><input type="text" class="form-control" ng-model="magtxt" placeholder="https://"></div>';
    
    echo '<div class="row">';
    echo '<div class="col-sm">';
    
    echo '<button class="btn float-right card card-body" type="button" data-clipboard-action="copy" data-clipboard-target=".mdkl">Copy</button>';
    
    echo '<label class="card card-body mdkl" for="FormControlist">';
    echo '{{magtxt}}';
    echo '</label>';
    echo '</div>';
    
    echo '<div class="col-sm"><div class="card card-body float-right"><div class="a2a_kit a2a_kit_size_32 a2a_default_style"><a class="a2a_button_facebook"></a><a class="a2a_button_twitter"></a><a class="a2a_button_email"></a><a class="a2a_button_pinterest"></a><a class="a2a_dd" href="https://www.addtoany.com/share"></a></div></div></div>';
    
    echo '</div>';
    
    echo '<div class="card-body"><a class="btn btn-primary" href="submit.php?url={{magtxt}}" role="button">Create Short</a></div>';
    
    echo '</form>';
    echo '</div>';
    
    ?>
        </div>


        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="space" style="padding-top: 90px;"></div>
            <div class="container">
                <div class="card text-center bg-secondary">

                    <div class="card-body text-center">
                        <img src="images/avatar.png" height="140" class="rounded mx-auto d-block">
                        <label class="font-weight-bolder text-white-50" for="nomme">Davidsonbpe</label>
                    </div>

                    <div class="card-body text-center bg-light">
                        <p>
                            Web Site e Aplicativo Desenvolvido por Davidson B Pereira. Tutoriais Notícias Entretenimento e Serviços Web Apps Developer.
                        </p>
                    </div>

                    <div class="card-body text-center">
                        <a style="height: 48px;width: 48px;margin-right: 6px;" class="btn btn-primary rounded-circle btn-lg" href="https://www.facebook.com/decomrradio/" target="_blank" role="button">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a style="height: 48px;width: 48px;margin-right: 6px;padding-left: 14px;" class="btn btn-info rounded-circle btn-lg" href="https://twitter.com/davidsonbpe" target="_blank" role="button">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a style="height: 48px;width: 48px;margin-right: 6px;padding-left: 15px;" class="btn btn-success rounded-circle btn-lg" href="https://www.instagram.com/davidsonbpe/" target="_blank" role="button">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a style="height: 48px;width: 48px;margin-right: 6px;padding-left: 13px;" class="btn btn-danger rounded-circle btn-lg" href="https://www.youtube.com/channel/UCHqvw9v2Fp6o006lUskoigg" target="_blank" role="button">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a style="height: 48px;width: 48px;margin-right: 6px;padding-left: 13px;" class="btn btn-light rounded-circle btn-lg" href="mailto:davidsonbpe@live.com" target="_parent" role="button">
                            <i class="fas fa-envelope"></i>
                        </a>

                        <button style="bottom: 15px;right: 15px;position: fixed;height: 48px;width: 48px;margin-right: 6px;padding-left: 13px;" class="btn btn btn-light rounded-circle btn-lg ui" type="button" id="btnAddToHomeScreen" tabindex="0" data-trigger="click"><i class="fab fa-chrome"></i></button>

                    </div>

                    <div class="card text-center">
                        <iframe frameborder="0" height="230" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31760556.412286285!2d-69.72680977851542!3d-13.656483636907424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1573659145441!5m2!1spt-BR!2sbr" style="border: 0;" width="100%"></iframe>
                    </div>

                    <div class="card-body text-center">
                        <label class="font-weight-bolder text-white-50" for="nomme">Copyright © 2009-2020</label>
                    </div>

                </div>
            </div>
        </div>


    </div>

    <div class="ads" style="padding: 30px 15px 30px;text-align: center;">

        <!--<img src="images/bannerads.png" class="img-fluid" alt="Responsive image">-->

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- DGT-G -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2174301849413198"
             data-ad-slot="8569025821"
             data-ad-format="auto"
             data-full-width-responsive="true">
        </ins>
        
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

    </div>
    
    
    <div class="container text-center">
        
        <div class="row pt-3">
            <div class="col-sm">
                <a href="https://dav7ok.web.app/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title text-muted text-light font-italic">Dav7<small class="pl-1">QR Code</small></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://decomrradio.blogspot.com/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title font-MAGNETOB text-muted pt-1">DecomRradio</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://davidsonbpe.github.io/dxconfont/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title text-muted">DxconFont<small class="pl-1">Icons</small></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://dtimetube.blogspot.com/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title font-snapitc text-muted pt-1">DtimeTube</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="row pt-4">
            <div class="col-sm">
                <a href="https://davidsonbpe.blogspot.com/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title font-ElectroShackle text-muted pt-1">dAVIDSONbPe</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://battlecontinental.blogspot.com/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h5 style="font-size: 18px;padding-top: 6px;" class="card-title text-muted font-algemaria ">BATTLE.CONTINENTAL</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://djdbpe.blogspot.com/" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title text-muted font-weight-bold ml-3">DJ Dbpe<small class="pl-1 font-weight-light">Play</small></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://www.youtube.com/channel/UCHqvw9v2Fp6o006lUskoigg/sub_confirmation=1" target="_blank" class="card txtm97 shadow text-decoration-none">
                    <div class="card-block m-4">
                        <div class="text-center">
                            <h4 class="card-title font-BladeRunnerMovie2 text-muted">DECOM TV</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
    
    <div class="space" style="padding-top: 70px;"></div>

    <footer class="bg-dark container-fluid">

        <div class="row">
            <div class="col-sm text-left">
                <p style="margin: 15px 10px 0px;" class="text-muted">Developer | Powered by <a href="https://davidsonbpe.blogspot.com/" target="_blank">Davidsonbpe</a></p>
            </div>

            <div class="col-sm text-right">
                <div class="navbar-brand nvty text-light"> GdooLink<small> Url Short</small></div>
            </div>
        </div>

    </footer>


    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js', {
                    scope: '/'
                })
                .then(function(registration) {
                    console.log('Service Worker Registered');
                });
            navigator.serviceWorker.ready.then(function(registration) {
                console.log('Service Worker Ready');
            });
        }

        var deferredPrompt;

        window.addEventListener('beforeinstallprompt', function(e) {
            console.log('beforeinstallprompt Event fired');
            deferredPrompt = e;
            return false;
        });
        btnAddToHomeScreen.addEventListener('click', function() {
            if (deferredPrompt !== undefined) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then(function(choiceResult) {

                    console.log(choiceResult.outcome);

                    if (choiceResult.outcome == 'dismissed') {
                        console.log('User cancelled home screen install');
                    } else {
                        console.log('User added to home screen');
                    }

                    deferredPrompt = null;
                });
            }
        });

    </script>


    <script src="d-framework/js/jquery-3.3.1.slim.min.js"></script>
    <script src="d-framework/js/popper.min.js"></script>
    <script src="d-framework/js/bootstrap.min.js"></script>
    <script src='d-framework/js/angular.min.js'></script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <script src="js/index.js"></script>
    <script src="https://davidsonbpe.github.io/web-server/controle/cookietermos/GdooLink.js"></script>

    <script>
        var clipboard = new ClipboardJS('.btn');

        clipboard.on('success', function(e) {
            console.log(e);
        });

        clipboard.on('error', function(e) {
            console.log(e);
        });

    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117522330-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-117522330-2');

    </script>


</body>

</html>
