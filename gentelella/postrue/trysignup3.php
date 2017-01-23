<?php       
session_start(); 
require __DIR__. '../includes2/header.php'; 
require __DIR__. '../includes/sign-user-up.php'; //kind of controller for the login
 isset($_SESSION['user_session']) ? header("location:dashboard2.php"):null;

?>
	<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Subscription page</h2>
						<p>Subscribe with only one click! It'll help us to make some statistics about the project so we can adapt its content and improve the teaching methods and the correction system.</p>
					</header>

					<!-- Form -->
						<section>
							<h3>Subscribe to TutoCalculator</h3>
							
                             <form class="col s12" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="row">

                <span class="red lighten-5"><?= isset($_SESSION['error_general']) && !empty($_SESSION['error_general']) ? $_SESSION['error_general']: ''?></span>
                    <?php session::destroy('error_general') ?>

                    <span class="green lighten-2"><?= isset($_SESSION['confirmation']) && !empty($_SESSION['confirmation']) ? $_SESSION['confirmation']: ''?></span>
                    <?php session::destroy('confirmation') ?>

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

                <div class="input-field col s10 offset-s1">
                    <input type="password" name="repassword" id="repassword" class="validate">
                    <label for="repassword">Re-enter password</label>

                    <span class="red lighten-5"><?= isset($_SESSION['error_repassword']) && !empty($_SESSION['error_repassword']) ? $_SESSION['error_repassword']: ''?></span>
                    <?php session::destroy('error_repassword') ?>
                </div>

                <div class="row">
                    <div class="col s11 offset-s1 center-align">
                        <a href="connection.php">Already member? Sign in here</a>
                    </div>
                </div>


                <div class="center-align">
                    <button class="waves-effect waves-light btn">Create account</button>
                </div>
            </div>
        </form>
						</section>

        </div>

        
<?php       
require __DIR__. '../includes2/footer.php'; 
?>			
					
					
					
					
					
			