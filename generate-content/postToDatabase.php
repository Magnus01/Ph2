<?php
// DATABASE CONFIG
session_start();
require __DIR__. '/../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/../gentelella/postrue/classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// STRUCTURE SESSION INPUT
$User_id = $_SESSION['user_session'];
$id = 1;

// STRUCTURE AJAX INPUT
$postTitle = json_decode($_POST['title']);
$postContent = json_decode($_POST['content']);
$postTaskTitle = json_decode($_POST['tasktitle']);
$postTaskDescription = json_decode($_POST['taskdescription']);

// print the structured data
echo $postTitle;
echo "-----------------------";
echo $postContent;
echo "-----------------------";
echo $postTaskTitle;
echo "-----------------------";
echo $postTaskDescription;

// DATABASE CONNECTION
$Model->addCourse($id, $postTitle, $description, $User_id);