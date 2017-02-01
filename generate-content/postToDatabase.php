<?php
// DATABASE CONFIG

session_start();
require '../config/dbconnect.php'; // database connection
require '../classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// STRUCTURE SESSION INPUT
$User_id = $_SESSION['user_session']; //$_SESSION['user_session'];
$Course_id = $_SESSION['Course_id'];

// STRUCTURE AJAX INPUT
$postTitle = json_decode($_POST['title']);
$postContent = json_decode($_POST['content']);
$postTaskTitle = json_decode($_POST['tasktitle']);
$postTaskDescription = json_decode($_POST['taskdescription']);

// print the structured data
echo "START------------>";
echo $postTitle;
echo "-----------------------";
echo $postContent;
echo "-----------------------";
echo $postTaskTitle;
echo "-----------------------";
echo $postTaskDescription;


// DATABASE CONNECTION
$Model->addExercise($postTitle, $postContent, $postTaskTitle, $postTaskDescription, 10, $User_id, $Course_id);

// retrieve new exercise id
$Exercise_id = $Model->Exercise_id($postTitle);


// UNIT TEST SYSTEM
$UnitTesting = json_decode($_POST['unitTesting']);
$UnitTestingStatements = $UnitTesting->utulist;

$length = sizeof($UnitTestingStatements);
for ($i = 0; $i < $length; $i++) {
    $Model->addUnitTestStatement($UnitTestingStatements[$i]->code, $UnitTestingStatements[$i]->order, $UnitTestingStatements[$i]->hint, $Exercise_id);
}