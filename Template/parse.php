<?php

$sequence = shell_exec('c:/Python27/python.exe Python27/Punit/Test.py 2>&1');

// iterate through the string
$len = strlen($sequence);
$pass = TRUE;
for($i = 0; $i < $len; $i++){
    if($sequence[$i] == "."){
        continue;
    } else if ($sequence[$i] == "F") {
        echo $i;
        $pass = FALSE;
        break;
    }
}
if($pass){
    echo -1;
}


?>
