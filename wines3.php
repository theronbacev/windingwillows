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
    <h1>Our Wines</h1>

    <div id="direct"></div>
    <div id="opening-para">
        <h4>Enjoy free shipping for a limited time only!</h4><br>
        We deliver nation-wide on purchases over $50.
    </div>

    <form action="" method="post" id="cart_form">
        <!-- Add this above if experiment fails...  action="processing.php" -->
        <div class="product_row">
            <div class="product_card">
                <img src="img/products/bottle1.jpg" alt="" id="bottle">
                <h3>Pinot Noir</h3>
                Savory earth and forest-wood aromas with dried red cherries, as well as bergamot, and dried flowers. <br>
                $13.95<br>
                <input type="number" name="pinot_noir" class="quantity" value=0 min=0 max=<?php $noir_query = "SELECT Quantity FROM inventory_t WHERE Wine='Pinot_Noir';";
                                                                                            $noir_results = @mysqli_query($dbc, $noir_query);
                                                                                            while ($row = mysqli_fetch_array($noir_results, MYSQLI_ASSOC)) {
                                                                                                $noir_max = "{$row['Quantity']}";

                                                                                                echo $noir_max;
                                                                                            } ?>>

                <button class="button" onclick="<?php
                                                if (!empty($_POST['pinot_noir'])) {
                                                    $noir = $_POST['pinot_noir'];
                                                    $_SESSION['noir'] = $noir;
                                                }

                                                ?> alert('Item Added to Cart!'); location.href='#direct'">Add to Cart</button>
            </div>
            <div class=" product_card">
                <img src="img/products/bottle1.jpg" alt="" id="bottle">
                <h3>Riesling</h3>
                Featuring flowers, prune, smoke, nuts and citrus flavours, refreshing acidity and a hint of spice. <br>
                $13.95<br>
                <input type="number" name="riesling" class="quantity" value=0 min=0 max=<?php $riesling_query = "SELECT Quantity FROM inventory_t WHERE Wine='Riesling';";
                                                                                        $riesling_results = @mysqli_query($dbc, $riesling_query);
                                                                                        while ($row = mysqli_fetch_array($riesling_results, MYSQLI_ASSOC)) {
                                                                                            $riesling_max = "{$row['Quantity']}";

                                                                                            echo $riesling_max;
                                                                                        } ?>>
                <button class="button" onclick="<?php
                                                if (!empty($_POST['riesling'])) {
                                                    $riesling = $_POST['riesling'];
                                                    $_SESSION['riesling'] = $riesling;
                                                }

                                                ?> alert('Item Added to Cart!'); location.href='#direct'">Add to Cart</button>
            </div>
            <div class=" product_card">
                <img src="img/products/bottle1.jpg" alt="" id="bottle">
                <h3>White Zinfendel</h3>
                Look for aromas and flavours of strawberry, fruit candy, spice and melon on a soft, medium-sweet palate. <br>
                $13.95<br>
                <input type="number" name="zinfendel" class="quantity" value=0 min=0 max=<?php $zinfendel_query = "SELECT Quantity FROM inventory_t WHERE Wine='Zinfendel';";
                                                                                            $zinfendel_results = @mysqli_query($dbc, $zinfendel_query);
                                                                                            while ($row = mysqli_fetch_array($zinfendel_results, MYSQLI_ASSOC)) {
                                                                                                $zinfendel_max = "{$row['Quantity']}";

                                                                                                echo $zinfendel_max;
                                                                                            } ?>>
                <button class="button" onclick="<?php
                                                if (!empty($_POST['zinfendel'])) {
                                                    $zinfendel = $_POST['zinfendel'];
                                                    $_SESSION['zinfendel'] = $zinfendel;
                                                }

                                                ?> alert('Item Added to Cart!'); location.href='#direct'">Add to Cart</button>
            </div>
        </div>
        <div class="product_row">
            <div class="product_card">
                <img src="img/products/bottle1.jpg" alt="" id="bottle">
                <h4>Cabernet Sauvignon</h4>
                Medium ruby; dark fruit and berries, smoky and spicy notes; medium-bodied with plush fruit and cedar. <br>
                $13.95<br>
                <input type="number" name="cabernet_sauvignon" class="quantity" value=0 min=0 max=<?php $cabernet_query = "SELECT Quantity FROM inventory_t WHERE Wine='Cabernet_Sauvignon';";
                                                                                                    $cabernet_results = @mysqli_query($dbc, $cabernet_query);
                                                                                                    while ($row = mysqli_fetch_array($cabernet_results, MYSQLI_ASSOC)) {
                                                                                                        $cabernet_max = "{$row['Quantity']}";

                                                                                                        echo $cabernet_max;
                                                                                                    } ?>>
                <button class="button" onclick="<?php
                                                if (!empty($_POST['cabernet_sauvignon'])) {
                                                    $cabernet = $_POST['cabernet_sauvignon'];
                                                    $_SESSION['cabernet'] = $cabernet;
                                                }

                                                ?> alert('Item Added to Cart!'); location.href='#direct'">Add to Cart</button>

            </div>
            <div class="product_card">
                <img src="img/products/bottle1.jpg" alt="" id="bottle">
                <h3>Pinot Grigio</h3>
                Aromas and flavours of fresh cantaloupe, ginger and spice. It is extra-dry on that palate with a clean finish. <br>
                $13.95<br>
                <input type="number" name="pinot_grigio" class="quantity" value=0 min=0 max=<?php $grigio_query = "SELECT Quantity FROM inventory_t WHERE Wine='Pinot_Grigio';";
                                                                                            $grigio_results = @mysqli_query($dbc, $grigio_query);
                                                                                            while ($row = mysqli_fetch_array($grigio_results, MYSQLI_ASSOC)) {
                                                                                                $grigio_max = "{$row['Quantity']}";

                                                                                                echo $grigio_max;
                                                                                            } ?>>
                <button class="button" onclick="<?php
                                                if (!empty($_POST['pinot_grigio'])) {
                                                    $grigio = $_POST['pinot_grigio'];
                                                    $_SESSION['grigio'] = $grigio;
                                                }

                                                ?> alert('Item Added to Cart!'); location.href='#direct'">Add to Cart</button>
            </div>
            <div class="product_card">
                <img src="img/products/bottle1.jpg" alt="" id="bottle">
                <h3>Rosé</h3>
                Pale pink colour; delicate strawberry, cherry and watermelon aromas; dry and fruity with berry notes. <br>
                $13.95<br>
                <input type="number" name="rose" class="quantity" value=0 min=0 max=<?php $rose_query = "SELECT Quantity FROM inventory_t WHERE Wine='Rose';";
                                                                                    $rose_results = @mysqli_query($dbc, $rose_query);
                                                                                    while ($row = mysqli_fetch_array($rose_results, MYSQLI_ASSOC)) {
                                                                                        $rose_max = "{$row['Quantity']}";

                                                                                        echo $rose_max;
                                                                                    } ?>>
                <button class="button" onclick="<?php
                                                if (!empty($_POST['rose'])) {
                                                    $rose = $_POST['rose'];
                                                    $_SESSION['rose'] = $rose;
                                                }

                                                ?> alert('Item Added to Cart!'); location.href='#direct'">Add to Cart</button>
            </div>

        </div>
    </form>

    <a href="cart.php"> <button class="button" value="View Cart" style=" width:15%; display:block; margin-left:auto; margin-right:auto; margin-bottom:25px; padding:10px 20px 10px 20px;">View Cart</button></a>

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