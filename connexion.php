<?php    session_start(); 


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
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		
		
		<!-- Chargement d'Angular JS et du fichier JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="testPost.js"></script>
		

		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />
		
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

					
					
					
					<!-- Form -->
						<section>
							<h3>Login to TutoCalculator</h3>
							<form method="post" action="connexion.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="email" id="email" value="" placeholder="Email" />
									</div>
									
									
									<div class="6u$ 12u$(xsmall)">
										<input type="password" name="password" id="password" value="" placeholder="Password" />
									</div>
									
									<!--<div class="4u 12u$(small)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u$(small)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">High Priority</label>
									</div>
									<div class="6u 12u$(small)">
										<input type="checkbox" id="copy" name="copy">
										<label for="copy">Email me a copy of this message</label>
									</div>-->
									
									<!--
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>-->
									<div class="12u$">
										<ul class="actions">
											<!--<li><input type="submit" value="Valider" class="special" /></li>-->
											<li><input href="TutorialOverview.php" type="submit" class="button" name="submit" value="Login"></li>
											<li><a href="sign-up.php" class="button">Sign up</a></li>
											<!--<li><input type="reset" value="Déja inscris?" /></li>-->
										</ul>
									</div>
								</div>
							</form>
						</section>

					
					<?php  
		
				if(isset($_POST['submit']))
				{ 
			Validation();
				}
		
		function Validation()  {
		
		 if (empty($_POST['password']) OR empty($_POST['email']))  
		 { echo '<script> alert("Veuillez renseigner votre adresse mail et votre mot de passe.");</script>';}
		
		else
			
			{      
					
					
				  try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=TutoCalculator;charset=utf8', 'root', 'mysql');
					}
					catch (Exception $e)
					{
							die('Erreur : ' . $e->getMessage());
					}
					
			 		
					
					$reponse1 = $bdd->query('SELECT email FROM user');
					$reponse2 = $bdd->query('SELECT password FROM user');
					$reponse3 = $bdd->query('SELECT surname FROM user');
					$reponse4 = $bdd->query('SELECT name FROM user');
					$reponse5 = $bdd->query('SELECT score FROM user');
					$reponse6 = $bdd->query('SELECT answer FROM user');
					$reponse7 = $bdd->query('SELECT pourcentage FROM user');
					$reponse8 = $bdd->query('SELECT questionComplete FROM user');
					$reponse9 = $bdd->query('SELECT id FROM user');
					
					
					while ($donnees1 = $reponse1->fetch() AND $donnees2 = $reponse2->fetch() AND $donnees9 = $reponse9->fetch() AND $donnees3 = $reponse3->fetch() AND $donnees4 = $reponse4->fetch() AND $donnees5 = $reponse5->fetch() AND $donnees6 = $reponse6->fetch() AND $donnees7 = $reponse7->fetch() AND $donnees8 = $reponse8->fetch())
{
	echo $donnees1['email'] . '<br />';echo $donnees2['password'] . '<br />';
	
	
	
	if ($_POST['email'] == $donnees1['email'] AND $_POST['password'] == $donnees2['password']) 
    {
        $_SESSION['name']=$donnees4['name'];
		$_SESSION['surname']=$donnees3['surname'];
		$_SESSION['score']=$donnees5['score'];
		$_SESSION['answer']=$donnees6['answer'];
		
		if ($donnees7['pourcentage']>100){$_SESSION['pourcentage']=100;}
		else {$_SESSION['pourcentage']=$donnees7['pourcentage'];}
		$_SESSION['email']=$donnees1['email'];
		 
		//$sql = "SELECT questionComplete FROM user";
		// $result = $databaseObject->fetch($sql);
		$example = json_decode($donnees8['questionComplete'], true);
		
		
		echo '<script>
		alert("Wefdf, ' . $example . ' ' . $donnees8['questionComplete'] . '.");
		</script>';
		
		$_SESSION['questionComplete']=     $example;                     // $donnees8['questionComplete'];
		$_SESSION['id']=$donnees9['id'];
		
        //echo '<script>location.href="Code1.html"</script>';
			echo '<script>
		alert("Welcome to Sci-Code, ' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . '.");location.href="Template/Overview.php";
		</script>';
	}
	
	
	
}

$reponse1->closeCursor();
$reponse2->closeCursor();
$reponse3->closeCursor();
$reponse4->closeCursor();
$reponse5->closeCursor();
$reponse6->closeCursor();
$reponse7->closeCursor();
$reponse8->closeCursor();
$reponse9->closeCursor();

					
					
/*		
			
$reponse_email = $bdd->query('SELECT email FROM user'); 
$reponse_password = $bdd->query('SELECT password FROM user '); 
$reponse_surname = $bdd->query('SELECT surname FROM user '); 
$reponse_name = $bdd->query('SELECT name FROM user '); 
 
 
 

while ($donnees = $reponse_email->fetch() AND $donnees2 = $reponse_password->fetch() AND $donnees3 = $reponse_surname->fetch() AND $donnees4 = $reponse_name->fetch()) 



{
	
	
	
    if ($_POST['email'] == $donnees['email'] AND $_POST['password'] == $donnees2['password']) 
    {
        $_SESSION['name']=$donnees4['name'];
		$_SESSION['surname']=$donnees3['surname'];
		
        echo '<script>location.href="Tutorial/Overview.php"</script>';
			
	}
	
	
   echo '<script> alert("Identifiants erronés. Veuillez réessayer.") ;location.href="connexion.php"</script>';
	
	
	
}

$reponse_email->closeCursor(); 
$reponse_password->closeCursor();
$reponse_surname->closeCursor();
$reponse_name->closeCursor();

	
 echo '<script> alert("Identifiants erronés. Veuillez réessayer.") ;location.href="connexion.php"</script>';
	
	



 	
	

		 
		}
		
		
		*/
		
		
		
		
		}
		 }
		
		
						
					//$bdd->exec('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prénom) VALUES($_POST[\'email\'], $_POST[\'password1\'],$_POST[\'nom\'] ,$_POST[\'prenom\'])');
						//$bdd->exec('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prénom) VALUES(\'email\', \'password1\',\'nom\' ,\'prenom\')');
						
						// $req = $bdd->prepare('INSERT INTO utilisateur(adresse_mail, mot_de_passe, nom, prenom ) VALUES(:email, :password, :nom, :prenom)');
						// $req->execute(array(
							// 'email' => $email,
							 // 'password' => $newPwd,
							 // 'nom' => $nom,
							 // 'prenom' => $prénom
							
							// ));

						
						
						
						// $reponse = $bdd->query('SELECT * FROM utilisateur');
						// while ($donnees = $reponse->fetch()) {
						// $donnees = $reponse->fetch();
						// echo $donnees['email'];  }
						// $reponse->closeCursor();
						
							// echo 'Le user a bien été ajouté !';
		                    // echo '<script> alert("Compte créé"); location.href = "compte.html";</script>'; 
		
		
		
		
		
			
		           // }  
				   
				   // } 
				   
				   
				  
				   
				   
				   
				   ?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Practical informations</h3>
							<p>Do you need an information?</p>
							<ul class="alt">
								<li><a href="#">How the website works?</a></li>
								<li><a href="#">Frequently Asked Questions</a></li>
								
								<li><a href="#">About the team project</a></li>
							</ul>
						</section>
						<!--
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>
						-->
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									Gimlemoen 25, 4630 Kristiansand S, Norvège<br>
									
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">magnusl15@uia.no</a>
								</li>
								<li>
									
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; UiA. All rights reserved.</li>
						<li>Design: <a href="">Calculator Tutorial</a></li>
						<li>Images: <a href="">Calculator Tutorial</a></li>
					</ul>
				</div></footer>

	</body>
</html>