<?php
// DATABASE CONFIG

session_start();
require __DIR__. '/../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/../gentelella/postrue/classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);


//$Exercise_id = $_SESSION['Exercise_id'];
    
// STRUCTURE AJAX INPUT

$code = $unitTesting;
//$hint= json_decode($_POST['hints[0]'], true);
$order = 1;
$Exercise_id = 3;
//$code = $_SESSION[$code_session];


    
$hint = json_encode($_POST["hints"]);
$pyUnit = json_encode($_POST["pyUnit"]);


if (isset($hint) && isset($pyUnit)) {
$Model->addUnit($pyUnit, $hint, $order, $Exercise_id);}
