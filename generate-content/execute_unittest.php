<?php
/**
 * Created by PhpStorm.
 * User: y50-70
 * Date: 10/18/2016
 * Time: 12:14 PM
 */
session_start();
require __DIR__. '/../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/../gentelella/postrue/classes/model.class.php'; // Model

$dbhandler = new Config() ;
$Model = new Model($dbhandler);
$result = 0;

$Exercise_id = $_SESSION[Exercise_id];
$Exercise_id = $_SESSION[User_id];




$PostAnswer = $_POST['pyUnit'];


$file2 = 'text.txt';
$content2 = nl2br("from something import string #\n") . $PostAnswer;
private function writeFileContent($file2, $content2){
   $fp = fopen($file, 'w');
   fwrite($fp, $content);
   fclose($fp);
   chmod($file, 0777);  //changed to add the zero
   return true;
}

writeFileContent($file2, $content2);

$pythonfile = 'c:/Python27/python.exe'
$shell_output = shell_exec('c:/Python27/python.exe test.txt 2>&1');
$file3 = 'answer.txt';
$content3 = $shell_output;

writeFileContent($file3, $content3);




$len = strlen($shell_output);
$pass = TRUE;
 
$points = 0;

for($i = 0; $i < $len; $i++){
    if($shell_output[$i] == "."){
        $_SESSION['points'] = $points++;
        continue;
    }
    else if ($shell_output[$i] == "E") {
        echo $i;
        $pass = FALSE;
        break;
    }
    else if ($shell_output[$i] == "F") {
        echo $i;
        $pass = FALSE;
        break;
    }
    
}


if($pass){
    $result = 1;
    echo -1;
}

$_SESSION[result] = $result;

$Model->Points_Insert($User_id, $points, $result, $Exercise_id);