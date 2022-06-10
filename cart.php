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
    <img src="img/products/cart.jpg" alt="">
    <div id="maincontent">

        <div id="customer">

            <h1> Shipping Details</h1>

            <form action="newuser.php" method="post" id="add_customer">
                <label for="fullname">Full Name: </label><br>
                <input type="text" name="name" id="name" style="width:100%;" placeholder="John Doe"><br><br>
                <label for="email">Email Address: </label><br>
                <input type="email" name="email" id="email" style="width:100%;" placeholder="info@somewhere.com"><br><br>
                <label for="phone">Phone Number: </label><br>
                <input type="text" name="phone" id="phone" style="width:100%;" placeholder="(416)123-4567"><br><br>
                <label for="address">Shipping Address: </label><br>
                <input type="text" name="address" id="address" style="width:100%;" placeholder="123 Wine Lovers Way"><br><br>
                <label for="city">City: </label><br>
                <input type="text" name="city" id="city" style="width:100%;" placeholder="GrapesVille"><br><br>
                <label for="province">Province: </label><br>
                <select name="province" id="province">
                    <option value="BC">British Columbia</option>
                    <option value="AB">Alberta</option>
                    <option value="SK">Saskatchewan</option>
                    <option value="MB">Manitoba</option>
                    <option value="ON">Ontario</option>
                    <option value="QC">Quebec</option>
                    <option value="NB">New Brunswick</option>
                    <option value="NS">Nova Scotia</option>
                    <option value="PE">Prince Edward Island</option>
                    <option value="NF">Newfoundland</option>
                    <option value="YK">Yukon</option>
                    <option value="NWT">North West Territories</option>
                    <option value="NU">Nunavut</option>
                </select><br><br>

                <button type="submit" class="button" onclick="location.href='#direct'">Create Guest Order</button>
            </form>

        </div>

        <div id="cart">
            <h1>Cart</h1>
            <div id="contents"><?php
                                $total = [];
                                if (isset($_SESSION['noir'])) {
                                    echo "<div class='cart_contents'>";
                                    echo "<img src='img/products/bottle1.jpg' class='thumbnail'>";
                                    $noirtotal = $_SESSION['noir'] * 13.95;
                                    $total[] = $noirtotal;
                                    echo "&nbsp; Pinot Noit x " . $_SESSION['noir'] . " Bottle(s) = " . "$" . number_format($noirtotal, 2);
                                    echo "</div>";
                                    echo "<hr class='hr_width'>";
                                }


                                if (isset($_SESSION['riesling'])) {
                                    echo "<div class='cart_contents'>";
                                    echo "<img src='img/products/bottle1.jpg' class='thumbnail'>";
                                    $rieslingtotal = $_SESSION['riesling'] * 13.95;
                                    $total[] = $rieslingtotal;
                                    echo "&nbsp; Riesling x " . $_SESSION['riesling'] . " Bottle(s) = " . "$" . number_format($rieslingtotal, 2);
                                    echo "</div>";
                                    echo "<hr class='hr_width'>";
                                }

                                if (isset($_SESSION['zinfendel'])) {
                                    echo "<div class='cart_contents'>";
                                    echo "<img src='img/products/bottle1.jpg' class='thumbnail'>";
                                    $zinfendeltotal = $_SESSION['zinfendel'] * 13.95;
                                    $total[] = $zinfendeltotal;
                                    echo "&nbsp; Zinfendel x " . $_SESSION['zinfendel'] . " Bottle(s) = " . "$" . number_format($zinfendeltotal, 2);
                                    echo "</div>";
                                    echo "<hr class='hr_width'>";
                                }
                                if (isset($_SESSION['cabernet'])) {
                                    echo "<div class='cart_contents'>";
                                    echo "<img src='img/products/bottle1.jpg' class='thumbnail'>";
                                    $cabernettotal = $_SESSION['cabernet'] * 13.95;
                                    $total[] = $cabernettotal;
                                    echo "&nbsp; Cabernet Sauvignon x " . $_SESSION['cabernet'] . " Bottle(s) = " . "$" . number_format($cabernettotal, 2);
                                    echo "</div>";
                                    echo "<hr class='hr_width'>";
                                }
                                if (isset($_SESSION['grigio'])) {
                                    echo "<div class='cart_contents'>";
                                    echo "<img src='img/products/bottle1.jpg' class='thumbnail'>";
                                    $grigiototal = $_SESSION['grigio'] * 13.95;
                                    $total[] = $grigiototal;
                                    echo "&nbsp; Pinot Grigio x " . $_SESSION['grigio'] . " Bottle(s) = " . "$" . number_format($grigiototal, 2);
                                    echo "</div>";
                                    echo "<hr class='hr_width'>";
                                }
                                if (isset($_SESSION['rose'])) {
                                    echo "<div class='cart_contents'>";
                                    echo "<img src='img/products/bottle1.jpg' class='thumbnail'>";
                                    $rosetotal = $_SESSION['rose'] * 13.95;
                                    $total[] = $rosetotal;
                                    echo "&nbsp; Rosé x " . $_SESSION['rose'] . " Bottle(s) = " . "$" . number_format($rosetotal, 2);
                                    echo "</div>";
                                    echo "<hr class='hr_width'>";
                                }
                                $_SESSION['total'] = number_format(array_sum($total), 2);
                                echo "Your Total Order: $" . number_format(array_sum($total), 2);
                                ?>

            </div>


            <div id="cart_buttons">
                <a href="wines3.php"><button class="button" style="padding:10px 20px 10px 20px;">Keep Shopping</button></a>
                &nbsp <a href="processing.php"><button class="button" style="padding:10px 20px 10px 20px">Make Purchase</button></a>
            </div>
        </div>

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