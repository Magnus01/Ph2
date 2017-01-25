<?php
require __DIR__. '/../config2/dbconnect.php'; // database connection
require __DIR__. '/../classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);

$_SESSION['user_id'] = $_GET['user_id'];
//console_log($_SESSION['user_id']);
$User_id = $_SESSION['user_id'];
$title = "python";
$Model->addCourse($User_id, $title);
?>
   