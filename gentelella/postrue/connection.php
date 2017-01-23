<?php    session_start(); 
require __DIR__. '/classes/session.php'; // Model
    require __DIR__. '../includes/log-user-in.php'; //kind of controller for the login

?>



<!DOCTYPE html>

<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="../../js/jquery.min.js"></script>
		<script src="../../js/skel.min.js"></script>
		<script src="../../js/skel-layers.min.js"></script>
		<script src="../../js/init.js"></script>
		
		
		
		<!-- Chargement d'Angular JS et du fichier JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="../../testPost.js"></script>
		

		<link rel="stylesheet" href="../../css/skel.css" />
		<link rel="stylesheet" href="../../css/style.css" />
		<link rel="stylesheet" href="../../css/style-xlarge.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body >

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"><img src="images/LogoUIA.png"></a></h1>
				<nav id="nav">
					<ul>
						 <li><a href="index.html">Home</a></li>
						<!--<li><a href="Tutorial/Overview.php">Tutorial</a></li>-->
						<li><a href="sign-up.php">Subscription</a></li>
						<li><a href="connexion.php">Login</a></li>
						<li><a href="#">Project team</a></li>
					</ul>
				</nav>
			</header>
 
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Connexion page</h2>
						<p>Login so you can access to your account and all the functionalities of TutoCalculator.</p>
					</header>

					
					


					<form class="col s12" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">
                <span class="red lighten-5"><?= isset($_SESSION['login_issue']) && !empty($_SESSION['login_issue']) ? $_SESSION['login_issue']: ''?></span>
                <?php Session::destroy('login_issue') ?>

                <div class="input-field col s10 offset-s1">
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">Your email</label>
                    <span class="red lighten-5"><?= isset($_SESSION['error_email']) && !empty($_SESSION['error_email']) ? $_SESSION['error_email']: ''?></span>
                   <?php session::destroy('error_email') ?>
                </div>
                <div class="input-field col s10 offset-s1">
                    <input type="password" name="password" id="password" class="validate">
                    <label for="password">Your password</label>
                    <span class="red lighten-5"><?= isset($_SESSION['error_password']) && !empty($_SESSION['error_password']) ? $_SESSION['error_password']: ''?></span>
                  <?php session::destroy('error_password') ?>
                </div>

                <div class="row">
                    <div class="col s5 offset-s1 right-align">
                        <input type="checkbox" class="with-gap" name="persist" id="persist"  />
                        <label for="persist">Remember me</label>
                        </div>
                    <div class="col s5 offset-s1 left-align">
                        <a href="trysignup3.php">New? Sign up here</a>
                    </div>
                </div>


                <div class="center-align">
                    <button class="waves-effect waves-light btn">Sign in</button>
                </div>
            </div>
        </form>
					
                    
					
					
					
					
					
					
					
					
					
					
					
					
	        
<?php       
require __DIR__. '../includes2/footer.php'; 
?>			
					
									
					
					
					
