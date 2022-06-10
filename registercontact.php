<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Winding Willows</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-1.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Cardo:400,400italic" rel="stylesheet" type="text/css">
        <link href="css/font-cardo.css" rel="stylesheet" type="text/css">
    </head>

    <body>
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
								<a></a><li><a href="index.html" target="_self">Home</a></li>
								<li><a href="wines3.php" target="_self">Our Wines </a></li>
								<li><a href="contact.html" target="_self">Contact</a></li>
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

		<div class="main-container">
		
			
			<section class="contact-center">
				<div class="container">
					<div class="row">
						
				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-7 col-sm-8">
							<a href="contact.php" class="btn btn-primary btn-filled inner-link" target="_self">Back to Previous Page</a>
						</div>
					</div>
							<br>
							<br>
							<br>
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
				

<?php
require("database.php");
$errors =[];

if(!empty($_POST['username'])){
    $username = $_POST['username'];  // $_POST one of the super global 

}else{
    $username = NULL;
    $errors[] = "<p> Name is required!!</p>";
}

if(!empty($_POST['email'])){
    $email = $_POST['email'];  // $_POST one of the super global 

}else{
    $email = NULL;
    $errors[] = "<p>  Email is required!!";
}

if(!empty($_POST['comments'])){
    $comments = $_POST['comments'];  // $_POST one of the super global 

}else{
    $comments = NULL;
    $comments[] = "<p>  message is required!!";
}

  if (count ($errors) == 0){

    $username_clean = prepare_string($dbc, $username);
	$email_clean = prepare_string($dbc, $email);
	$comments_clean = prepare_string($dbc, $comments);

    $query = "INSERT INTO contact(username, email, comments ) VALUES(?,?,?);";

    $stmt = mysqli_prepare($dbc, $query);
    
    mysqli_stmt_bind_param(
        $stmt,
        "sss",
        $username_clean,
        $email_clean,
        $comments_clean
        
    );
    
    $result = mysqli_stmt_execute($stmt);
//     print($query);
  
//   $result= @mysqli_query($dbc, $query);
   if ($result){
//    header("Location: details.php");
function function_alert($message) {   
    // Display the alert box    
       echo "<script type ='text/JavaScript'>";  
       echo "alert('$message')";  
       echo "</script>";   }
       function_alert("Thanks, we will get back to you soon");   
       exit;  
   }else{
       echo "some error in saving the data";
   }
    }else{
      foreach($errors as $errors){
          echo $errors;
     }
  }
 
?>

				