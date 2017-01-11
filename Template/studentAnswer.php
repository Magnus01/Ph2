<?php   
 Correction();
function Correction($Chapath, $Qname) {
echo "HELLO WORLD";
$PostAnswer= $_POST['text1'];
        echo $PostAnswer;
        $pathname2 = '' . $Chapath . '/src/' . $Qname . '.txt';

       // echo $pathname2;
        $monfichier2 = fopen('Python27/Punit/MA147C1Q1.py', 'w+');

		fseek($monfichier2, 0);		

        fputs($monfichier2, $PostAnswer);
        fclose($monfichier2);
    
        $monfichier3 = fopen('Python27/Punit/MA147C1Q1.txt', 'w+');
    

		fseek($monfichier3, 0);		

        fputs($monfichier3, $PostAnswer);
        fclose($monfichier3);
    }

 

?>