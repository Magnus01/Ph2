<?php
require __DIR__. '/../config2/dbconnect.php'; // database connection
require __DIR__. '/../classes/model.class.php'; // Model


$Dbhandler  = new Config() ;
$Model      = new Model($Dbhandler);

session::init();

if ( isset($_POST) && !empty($_POST) ) 
{
    
    if ( !$return = $Model->validateForm($_POST)  ) 
    {
        $email      =  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password   =  $_POST['password'];
        
        console_log("EMAIL" . $email . "EMAIL");
        console_log($password);
            

        
//        console_log($password . " " . "password");
       $id = $Model->getId($email);
//            console_log($id . "id??");
        console_log($id . "Id");
            
    

        if ($Model->signIn($email, $password, $id)) 
        {   
               
            
          
            session::set('user_session', $id);
            
              isset($_SESSION['user_session']) ? header("location:dashboard2.php"):null;
        }else{
            session::set('login_issue', "Can't log you in. check your details.");
        }

    }else{
        foreach ($return as $field => $error) {
            session::set($field, $error);
        }
    }


}




