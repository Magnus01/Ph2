<?php
/**
 * Created by PhpStorm.
 * User: y50-70
 * Date: 10/18/2016
 * Time: 12:14 PM
 */

$PostAnswer = $_POST['pyUnit'];




$file = fopen('test.txt', 'w+');

fseek($file, 0);

fputs($file, nl2br("from something import string #\n") . $PostAnswer);
fclose($file);

















// assuming we have a file now... and we do
$shell_output = shell_exec('c:/Python27/python.exe test.txt 2>&1');
$file2 = fopen('answer.txt', 'w+');
fseek($file2, 0);
fputs($file2, $shell_output);
$len = strlen($shell_output);
$pass = TRUE;
 

for($i = 0; $i < $len; $i++){
    if($shell_output[$i] == "."){
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
    echo -1;
}