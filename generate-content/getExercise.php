<?php

// DATABASE CONFIG
session_start();
require __DIR__. '/../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/../gentelella/postrue/classes/model.class.php'; // Model
$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// mysql queries
$Exercise_id = $_SESSION['Exercise_id'];
$result = $Model->getExercise($Exercise_id);
//var_dump($result);

//echo "<br><br><br>";
echo json_encode($result);