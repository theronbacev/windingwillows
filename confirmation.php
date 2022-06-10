<?php
require("database.php");

session_start();

?>

<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Winding Willows</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-1.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom1.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Cardo:400,400italic" rel="stylesheet" type="text/css">
    <link href="css/font-cardo.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>

<body>
    <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script> -->
    <div class="elfsight-app-3fc2e3b9-9632-452a-a9f2-b32ed5aa697a"></div>
    <div class="nav-container">
        <nav class="centered-logo top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="index.html">
                            <img class="logo logo-dark" alt="Logo" src="img/logo.png">
                    </div>
                </div>

                <div class="row nav-menu">

                    <div class="col-sm-12 columns text-center">
                        <ul class="menu">
                            <a></a>
                            <li><a href="index.html" target="_self">Home</a></li>
                            <li><a href="wines3.php" target="_self">Our Wines </a></li>
                            <li><a href="contact.php" target="_self">Contact</a></li>
                        </ul>
                        
                    </div>
                </div>

                <div class="mobile-toggle">
                    <i class="icon icon_menu"></i>
                </div>
            </div>
            <div class="bottom-border"></div>
        </nav>
    </div>

    <img src="img/products/products.jpg" alt="" id="productsimg">


    <div id="received">
        <h1 id="order_received">Order Received!</h1>

        <p id="ordermsg">
            You should expect 2-3 days for shipping.<br>
            Thank you for your order!<br><br>
            <a href="index.html" class="cartlink"><button class="home_button" onclick="<?php session_destroy(); ?>">Return to Home Page</button></a>

        </p>
    </div>





    <div class="footer-container">
        <footer class="short bg-secondary-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <ul class="social-icons">
                            <li>
                                <a href="#">
                                    <i class="icon social_twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon social_facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/skrollr.min.js"></script>
    <script src="js/spectragram.min.js"></script>
    <script src="js/scrollReveal.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/twitterFetcher_v10_min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>