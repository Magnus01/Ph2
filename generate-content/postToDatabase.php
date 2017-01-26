<?php
/*
// console log
function console_log( $data ) {
    echo '<script>';
    echo 'console.log(' . json_encode( $data) . ')';
    echo '</script>';
}*/

// structure received input
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

// database connect
