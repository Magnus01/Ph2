<?php
// DATABASE CONFIG

session_start();
require __DIR__. '/../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/../gentelella/postrue/classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// STRUCTURE SESSION INPUT
$User_id = $_SESSION['user_session'];
$Course_id = $_SESSION['Course_id'];
$Exercise_id = $_SESSION['Exercise_id'];

// QUERY FOR UNIT TESTS
$result = $Model->getUnitTestStatements(34);
//var_dump($result);
echo json_encode($result);