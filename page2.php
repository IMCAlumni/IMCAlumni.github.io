<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["ID"])) {
  header( 'location: index.php');
}




 ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Slack - IMC Online Community</title>
        <meta name="description" content="Community App" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>

        <!--header-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary sticky-navigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><strong>IMC Community App</strong></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link page-scroll" href="#features">Features <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item mr-3">
                        <a class="nav-link page-scroll" href="#download">Download</a>
                    </li>

                </ul>
            </div>
        </nav>

        <!--main section-->
        <section class="bg-texture hero pt-5">
            <div class="container">
                <div class="row d-sm-flex">
                    <div class="col-sm-6 text-white wow fadeIn">
                        <div class="mt-5 pt-5 hidden-sm-down"></div>
                        <h1>IMC Community Online</h1>
                        <h2>A helpful <span class="text-orange">Online Community</span> app that wil make
                        networking easy</h2>
                        <p class="mt-4 lead">
                            Download Slack and join the IMC Community
                        </p>
                        <p class="mt-5">
                            <a href="https://play.google.com/store/apps/details?id=com.Slack" class="mr-2"><img src="img/google-play.png" class="store-img"/></a>
                           <a href="https://www.microsoft.com/nl-nl/store/p/slack-beta/9nblggh1jj9h" class="mr-3"><img src="img/logo-windows-store.png" class="store-img"/></a>
                            <a href="https://itunes.apple.com/app/slack-app/id618783545?ls=1&mt=8" class="mr-3"><img src="img/apple_store.png" class="store-img"/> </a>
                        </p>

                    </div>
                    <!-- div class="col-sm-6 pt-51 hidden-sm-down wow fadeInRight">
                        <img class="img-fluid mx-auto d-block" src="img/home_illo.png"/>
                    </div>
                    -->
                </div>
            </div>
        </section>


        <!--extra features-->
        <section class="bg-dark text-white" id="extra-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h2 class="text-orange">Features & Details</h2>
                        <p class="lead">
                            Built for creative people. Made for high performance.
                        </p>
                    </div>
                </div>
                <div class="row d-md-flex mt-5">
                    <div class="col-sm-4 wow fadeIn">
                        <h5 class="text-orange">Great Support</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <h5 class="text-orange pt-5">Clean Code</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <h5 class="text-orange pt-5">Unique Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </div>
                    <div class="col-sm-4 wow fadeIn">
                        <img class="img-fluid mx-auto d-block pb-3" src="img/shot-3.png" alt="Gallery">
                    </div>
                    <div class="col-sm-4 wow fadeIn">
                        <h5 class="text-orange">Unlimited Features</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <h5 class="text-orange pt-5">High Resolution</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <h5 class="text-orange pt-5">Modern Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </div>
                </div>
            </div>
        </section>



        <!--download-->
        <section class="bg-orange" id="download">
            <div class="container">
                <div class="row d-md-flex text-center wow fadeIn">
                    <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1 col-xs-12">
                        <h2 class="text-primary">Download & get started today!</h2>
                        <p class="mt-4 lead">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit amet.
                        </p>
                        <p class="mt-5">
                            <a href="#" class="mr-2"><img src="img/google-play.png" class="store-img"/></a>
                            <a href="https://itunes.apple.com/app/slack-app/id618783545?ls=1&mt=8" class="mr-"><img src="img/apple_store.png" class="store-img"/> </a>
                            <a href="https://www.microsoft.com/nl-nl/store/p/slack-beta/9nblggh1jj9h" class="mr-3"><img src="img/logo-windows-store.png" class="store-img"/></a>


                        </p>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
