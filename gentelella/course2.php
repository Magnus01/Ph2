<?php

// DATABASE CONFIG
session_start();
require __DIR__. '/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/postrue/classes/model.class.php'; // Model
$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// mysql queries
$User_id = 2;
$result = $Model->getCourses($User_id);
var_dump($result);

// Add exercises to model (set of rows)
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