<?php    session_start(); 
require __DIR__. '/classes/session.php'; // Model
    require __DIR__. '../includes2/log-user-in.php'; //kind of controller for the login
    require __DIR__. '../includes2/header.php'; //kind of controller for the login

?>

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
					
									
					
					
					
