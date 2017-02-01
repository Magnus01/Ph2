<?php
session_start();
//require __DIR__. '/includes2/header.php';
require __DIR__. '/includes2/new-teacher.php'; //kind of controller for the login
isset($_SESSION['user_session']) ? header("location:dashboards.php"):null;

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
            // bind 'signup' and provide a simple callback function
            $('#teacher-signup').ajaxForm(function() {
                alert("Thank you for your comment!");
            });
            $('#teacher-signup').ajaxForm(function() {
                alert("Thank you for your comment!");
            });
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

                <form name="teacher-login" action="includes2/new-teacher.php" method="post">

                    <h1>Professor Login</h1>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" autofocus/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Log in</a>
                    </div>

                    <div class="clearfix"></div>

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
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <img src="..\..\Template\LogoUIA.png">

                <form id="teacher-signup" name="teacher-signup" action="includes2/new-teacher.php" method="post">
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" name="name" id="name" class="form-control" placeholder="First Name" required="" />
                    </div>
                    <div>
                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Last Name" required="" />
                    </div>
                    <div>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="#login" >Submit</a>
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
                </form>
            </section>
        </div>
    </div>
</div>

<script>
    window.onload=function() {
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
    }
</script>
</body>
</html>