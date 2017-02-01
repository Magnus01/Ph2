<?php

// DATABASE CONFIG
session_start();
require __DIR__. '/config/dbconnect.php'; // database connection
require __DIR__. '/classes/model.class.php'; // Model
$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// mysql queries
$User_id = $_SESSION['user_session'];
$result = $Model->getCourses($User_id);
//var_dump($result);

// Add courses to model loop through the set of rows
$arr = array();
$length = sizeof($result);
for ($i = 0; $i < $length; $i++) {
    array_push($arr, array(
        'id' => $result[$i]->id,
        'title' => $result[$i]->title,
        'description' => $result[$i]->title,
        'creationTimestamp' => $result[$i]->creation_timestamp,
    ));
}

//echo "<br><br><br>";
echo json_encode($arr);