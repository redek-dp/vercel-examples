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
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='canonical' href='https://gdoo.herokuapp.com/'>
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
    //$uri = $_SERVER['REQUEST_URI'];
    //$partes = explode("?",$uri);

    $url = $_GET["url"];

    if(isset($url)) {
        $deposerfile = ($url);
    } else {
 
        $deposerfile = ('https://davidsonbpe.blogspot.com/');
    }

    function tinyurl($urls) {
    return file_get_contents('https://tinyurl.com/api-create.php?url='.$urls);
    }
    $urls = tinyurl($deposerfile);
    
    
    echo '<div class="card card-body container bg-light shadow p-3">';
    echo '<form>';
    
    echo '<div class="form-group"><label for="formGroupEnterURL">Enter URL:</label><input type="text" class="form-control" ng-model="magtxt" placeholder="https://"></div>';
    
    echo '<div class="row">';
    echo '<div class="col-sm">';
    
    echo '<button class="btn float-right card card-body" type="button" data-clipboard-action="copy" data-clipboard-target=".mdkl">Copy</button>';
    
    echo '<label class="card card-body mdkl" for="FormControlist">';
    echo 'https://gdoolk.web.app/?'; echo substr("$urls",20);
    echo '</label>';
    echo '</div>';
    
    echo '<div class="col-sm"><div class="card card-body float-right"><div class="a2a_kit a2a_kit_size_32 a2a_default_style"><a class="a2a_button_facebook"></a><a class="a2a_button_twitter"></a><a class="a2a_button_email"></a><a class="a2a_button_pinterest"></a><a class="a2a_dd" href="https://www.addtoany.com/share"></a></div></div></div>';
    
    echo '</div>';
    
    echo '<div class="card-body"><a class="btn btn-primary" href="submit.php?url={{magtxt}}" role="button">Create Short</a></div>';
    
    echo '</form>';
    echo '</div>';
    
    ?>
        </div>

        <!--<div class="tab-pane fade" id="PrivacyTerms" role="tabpanel" aria-labelledby="PrivacyTerms-tab">
            <div class="space" style="padding-top: 90px;"></div>
            <div class="container">

                <div class="card card-body">
                    <h1>Privacy Policy</h1>


                    <p>Effective date: February 16, 2019</p>


                    <p>GdooLink ("us", "we", or "our") operates the GdooLink.com website (the "Service").</p>

                    <p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. Our Privacy Policy for GdooLink is created with the help of the <a href="https://www.freeprivacypolicy.com/privacy/view/3264f439270e6e1840602ecbc9194c3c" target="_blank">Privacy Policy website</a>.</p>

                    <p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from https://davidsonbpe.blogspot.com/</p>


                    <h2>Information Collection And Use</h2>

                    <p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>

                    <h3>Types of Data Collected</h3>

                    <h4>Personal Data</h4>

                    <p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you ("Personal Data"). Personally identifiable information may include, but is not limited to:</p>

                    <ul>
                        <li>Cookies and Usage Data</li>
                    </ul>

                    <h4>Usage Data</h4>

                    <p>We may also collect information how the Service is accessed and used ("Usage Data"). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>

                    <h4>Tracking & Cookies Data</h4>
                    <p>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.</p>
                    <p>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.</p>
                    <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
                    <p>Examples of Cookies we use:</p>
                    <ul>
                        <li><strong>Session Cookies.</strong> We use Session Cookies to operate our Service.</li>
                        <li><strong>Preference Cookies.</strong> We use Preference Cookies to remember your preferences and various settings.</li>
                        <li><strong>Security Cookies.</strong> We use Security Cookies for security purposes.</li>
                    </ul>

                    <h2>Use of Data</h2>

                    <p>GdooLink uses the collected data for various purposes:</p>
                    <ul>
                        <li>To provide and maintain the Service</li>
                        <li>To notify you about changes to our Service</li>
                        <li>To allow you to participate in interactive features of our Service when you choose to do so</li>
                        <li>To provide customer care and support</li>
                        <li>To provide analysis or valuable information so that we can improve the Service</li>
                        <li>To monitor the usage of the Service</li>
                        <li>To detect, prevent and address technical issues</li>
                    </ul>

                    <h2>Transfer Of Data</h2>
                    <p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>
                    <p>If you are located outside Brazil and choose to provide information to us, please note that we transfer the data, including Personal Data, to Brazil and process it there.</p>
                    <p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
                    <p>GdooLink will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

                    <h2>Disclosure Of Data</h2>

                    <h3>Legal Requirements</h3>
                    <p>GdooLink may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
                    <ul>
                        <li>To comply with a legal obligation</li>
                        <li>To protect and defend the rights or property of davidsonbpe</li>
                        <li>To prevent or investigate possible wrongdoing in connection with the Service</li>
                        <li>To protect the personal safety of users of the Service or the public</li>
                        <li>To protect against legal liability</li>
                    </ul>

                    <h2>Security Of Data</h2>
                    <p>The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

                    <h2>Service Providers</h2>
                    <p>We may employ third party companies and individuals to facilitate our Service ("Service Providers"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.</p>
                    <p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>

                    <h3>Analytics</h3>
                    <p>We may use third-party Service Providers to monitor and analyze the use of our Service.</p>
                    <ul>
                    </ul>


                    <h2>Links To Other Sites</h2>
                    <p>Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
                    <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>


                    <h2>Children's Privacy</h2>
                    <p>Our Service does not address anyone under the age of 18 ("Children").</p>
                    <p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>


                    <h2>Changes To This Privacy Policy</h2>
                    <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                    <p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the "effective date" at the top of this Privacy Policy.</p>
                    <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>


                    <h2>Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy, please contact us:</p>
                    <ul>
                        <li>By visiting this page on our website: https://davidsonbpe.blogspot.com/</li>

                    </ul>
                </div>

            </div>
        </div>-->

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
