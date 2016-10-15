<?php

$sequence = shell_exec('python Python27/Projects/Chapter3/src/C3Q1py.txt 2>&1');

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
