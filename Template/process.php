<?php
$PostAnswer= $_POST['text1'];

        echo $PostAnswer;
        //$pathname2 = '' . $Chapath . '/src/' . $Qname . '.txt';

       // echo $pathname2;
        $monfichier2 = fopen('../Template/Python27/Projects/Chapter3/src/C3Q1py.txt', 'w+');

		fseek($monfichier2, 0);		

        fputs($monfichier2, $PostAnswer);
        fclose($monfichier2);
    
echo '<script>alert("answer: ' . $PostAnswer . '");</script>';
 
?>