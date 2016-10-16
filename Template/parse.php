<?php

$sequence = shell_exec('c:/Python27/python.exe Python27/Punit/Test.py 2>&1');
echo '<script>alert("sequence: ' . $sequence . '");</script>';
// iterate through the string
$len = strlen($sequence);
echo '<script>alert("len: ' . $len . '");</script>';
$pass = TRUE;
for($i = 0; $i < $len; $i++){
    if($sequence[$i] == "."){
        continue;
    }
    /*else if ($sequence[$i] == "E") {
        echo $i;
        $pass = FALSE;
        break;*/
    }
     else if ($sequence[$i] == "F") {
        echo $i;
        $pass = FALSE;
        break;
    } 
    
}
if($pass){
    echo -1;
}


?>
