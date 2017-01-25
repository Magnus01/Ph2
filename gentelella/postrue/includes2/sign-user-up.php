<?php
    require __DIR__. '/../config/dbconnect.php'; // database connection
    require __DIR__. '/../classes/model.class2.php'; // Model
require __DIR__. '/../classes/session.php'; // Model

    $dbhandler = new Config() ;
    $Model = new Model($dbhandler);

    if ( isset($_POST) && !empty($_POST) ) 
    {

        if ( !$return = $Model->validateForm($_POST)  ) 
        {
            if ($_POST['password'] === $_POST['repassword']) {

                $email      =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $password   =  $_POST['password'];


                if (!$Model->emailAlreadyUsed($email)) 
                {
                    if ($Model->addUser($email, $password)) 
                    {
                        session::set('confirmation', 'You have successfully signed up!');
                        

                    }else{
                        session::set('error_general', 'Something went wrong.');
                    }
                }else{
                    session::set('error_email', 'This email is already used.');
                }

            }else{
                session::set('error_repassword', 'The two passwords are not the same.');
            }

        }else{
            foreach ($return as $field => $error) {
                session::set($field, $error);
            }
        }

    }