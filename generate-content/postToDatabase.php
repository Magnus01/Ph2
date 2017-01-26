<?php
// DATABASE CONFIG

session_start();
require __DIR__. '/../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/../gentelella/postrue/classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);

// STRUCTURE SESSION INPUT
$User_id = 1; //$_SESSION['user_session'];
$id = 1;

// STRUCTURE AJAX INPUT
$postTitle = $dbhandler->db->quote(json_decode($_POST['title']));

$postContent = json_decode($_POST['content']);
$postTaskTitle = $dbhandler->db->quote(json_decode($_POST['tasktitle']));
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
$Model->addExercise($postTitle, $postContent, $postTaskTitle, $postTaskDescription, 10, 1, 1);
