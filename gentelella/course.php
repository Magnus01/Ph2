<?php

// DATABASE CONFIG
session_start();
require __DIR__. '/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/postrue/classes/model.class.php'; // Model
$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// mysql queries
$Course_id = 1;
$result = $Model->getExercises(1);
$result2 = $Model->getCourse(1);
//var_dump($result[0]);

// make data model
$arr = array(
    'id' => 1,
    'title' => $result2->title,
    'description' => 2,
    'programmingLanguage' => 3,
    'creationTimestamp' => 4,
    'creator' => 5,
    'exercises' => array()
);

// Add exercises to model (set of rows)
$length = sizeof($result);
for ($i = 0; $i < $length; $i++) {
    array_push($arr['exercises'], array(
        'id' => $result[$i]->id,
        'order' => $result[$i]->order,
        'title' => $result[$i]->title,
        'content' => $result[$i]->content,
        'taskTitle' => $result[$i]->{'task title'},
        'taskDescription' => $result[$i]->{'task description'},
        'level' => $result[$i]->level,
        'creationTimestamp' => $result[$i]->creation_timestamp,
        'courseId' => $result[$i]->Course_id
    ));
}

//echo "<br><br><br>";
echo json_encode($arr);