<?php
session_start();
require __DIR__. '/../config2/dbconnect.php'; // database connection
require __DIR__. '/../classes/model.class.php'; // Model



$dbhandler = new Config() ;
$Model = new Model($dbhandler);



//console_log($_SESSION['user_session']);
//$User_id = $_SESSION['user_session'];
$id = 2;
$User_id = 2;
$title = "python";
$description = "te";

//$Model->addCourse($User_id, $title);
$Model->addCourse($id, $title, $description, $User_id);
?>
   