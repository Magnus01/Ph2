<?php
session_start();
//require __DIR__. '/includes2/header.php';

require __DIR__. '/includes2/login-teacher.php';
require __DIR__. '/includes2/new-teacher.php';
isset($_SESSION['user_session']) ? header("location:../student/index.php"):null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Professor Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">




    <!-- Expreimental -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <script>
        // wait for the DOM to be loaded
        $(document).ready(function() {
            /*
            // bind 'signup' and provide a simple callback function
            $('#teacher-signup').ajaxForm(function() {
                alert("Thank you for your comment!");
            });
            $('#teacher-signup').ajaxForm(function() {
                alert("Thank you for your comment!");
            });
            */
        })
    </script>
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <img src="..\..\Template\LogoUIA.png">


                <form class="col s12" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <h1>Professor Login</h1>

                    <div class="row">
                        <span class="red lighten-5"><?= isset($_SESSION['login_issue']) && !empty($_SESSION['login_issue']) ? $_SESSION['login_issue']: ''?></span>
                        <?php Session::destroy('login_issue') ?>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="email">Your email</label>-->
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <span class="red lighten-5"><?= isset($_SESSION['error_email']) && !empty($_SESSION['error_email']) ? $_SESSION['error_email']: ''?></span>
                            <?php session::destroy('error_email') ?>
                        </div>
                        <div class="input-field col s10 offset-s1">
                            <!--<label for="password">Your password</label>-->
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <span class="red lighten-5"><?= isset($_SESSION['error_password']) && !empty($_SESSION['error_password']) ? $_SESSION['error_password']: ''?></span>
                            <?php session::destroy('error_password') ?>
                        </div>


                        <div class="row">
                            <div class="col s5 offset-s1 right-align">
                                <input type="checkbox" class="with-gap" name="persist" id="persist"  />
                                <label for="persist">Remember me</label>
                            </div>
                            <br>
                        </div>

                        <div class="center-align">
                            <button class="waves-effect waves-light btn">Sign in</button>
                        </div>

                        <div class="separator">
                            <p class="change_link">or
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <p>© 2017 Sci-Code<br>
                                    <em>sponsored by the Centre for Research, Innovation and Coordination of Mathematics Teaching
                                        <a href="http://www.matric.no/">(MatRIC - matric.no)</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>

            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <img src="..\..\Template\LogoUIA.png">



                <form class="col s12" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <h1>Create Account</h1>
                    <div class="row">

                        <span class="red lighten-5"><?= isset($_SESSION['error_general']) && !empty($_SESSION['error_general']) ? $_SESSION['error_general']: ''?></span>
                        <?php session::destroy('error_general') ?>

                        <span class="green lighten-2"><?= isset($_SESSION['confirmation']) && !empty($_SESSION['confirmation']) ? $_SESSION['confirmation']: ''?></span>
                        <?php session::destroy('confirmation') ?>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="email">Your email</label>-->
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">

                            <span class="red lighten-5"><?= isset($_SESSION['error_email']) && !empty($_SESSION['error_email']) ? $_SESSION['error_email']: ''?></span>
                            <?php session::destroy('error_email') ?>
                        </div>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="password">Your password</label>-->
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">

                            <span class="red lighten-5"><?= isset($_SESSION['error_password']) && !empty($_SESSION['error_password']) ? $_SESSION['error_password']: ''?></span>
                            <?php session::destroy('error_password') ?>
                        </div>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="repassword">Re-enter password</label>-->
                            <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-enter Password">

                            <span class="red lighten-5"><?= isset($_SESSION['error_repassword']) && !empty($_SESSION['error_repassword']) ? $_SESSION['error_repassword']: ''?></span>
                            <?php session::destroy('error_repassword') ?>
                        </div>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="type">Your type</label>-->
                            <input type="text" name="type" id="type" class="form-control" placeholder="Type">

                            <span class="red lighten-5"><?= isset($_SESSION['error_type']) && !empty($_SESSION['error_type']) ? $_SESSION['error_type']: ''?></span>
                            <?php session::destroy('error_type') ?>
                        </div>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="name">Your name</label>-->
                            <input type="text" name="name" id="name" class="form-control" placeholder="First Name">

                            <span class="red lighten-5"><?= isset($_SESSION['error_name']) && !empty($_SESSION['error_name']) ? $_SESSION['error_name']: ''?></span>
                            <?php session::destroy('error_name') ?>
                        </div>

                        <div class="input-field col s10 offset-s1">
                            <!--<label for="surname">Your surname</label>-->
                            <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname">

                            <span class="red lighten-5"><?= isset($_SESSION['error_surname']) && !empty($_SESSION['error_surname']) ? $_SESSION['error_surname']: ''?></span>
                            <?php session::destroy('error_surname') ?>
                        </div>

                        <div class="center-align">
                            <button href="#signup" class="waves-effect waves-light btn">Create account</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <p>© 2017 Sci-Code<br>
                                    <em>sponsored by the Centre for Research, Innovation and Coordination of Mathematics Teaching
                                        <a href="http://www.matric.no/">(MatRIC - matric.no)</a></p>
                            </div>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</div>

<script>
    /*window.onload=function() {
        $( "#other" ).click(function() {
            $( "#target" ).submit();
        });

        document.getElementById("teacher-signup").onsubmit = function() {
            alert("success");
            window.location.replace("teacher.php#login");
            // clear form
            $('#teacher-signup')[0].reset();
            return false;
        };
        document.getElementById("teacher-login").onsubmit = function() {
            window.location.replace("xyz.html");
            return false;
        };
    }*/
</script>
</body>
</html>