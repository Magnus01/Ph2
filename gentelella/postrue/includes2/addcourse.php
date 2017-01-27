<?php
session_start();
require __DIR__. '/../config2/dbconnect.php'; // database connection
require __DIR__. '/../classes/model.class.php'; // Model



$dbhandler = new Config() ;
$Model = new Model($dbhandler);



//console_log($_SESSION['user_session']);
//$User_id = $_SESSION['user_session'];
$id = 1;
$User_id = 2;
$title = "python";
$description = "te";

//$Model->addCourse($User_id, $title);
$id = $Model->CourseId($id);
console_log($id);
?>
   