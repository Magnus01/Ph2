<?php   


function Correction($Chapath, $Qname) {
echo "HELLO WORLD";
$PostAnswer= $_POST['text1'];
        echo $PostAnswer;
        $pathname2 = '' . $Chapath . '/src/' . $Qname . '.txt';

       // echo $pathname2;
        $monfichier2 = fopen('Python27/Projects/Chapter3/src/C3Q1py.txt', 'w+');

		fseek($monfichier2, 0);		

        fputs($monfichier2, $PostAnswer);
        fclose($monfichier2);
    }

function Command() {

$python = escapeshellcmd('generate_json_trace.py --create_jsvar=listSumTrace Python27/Projects/Chapter3/src/C3Q1py.txt');
$cmd0 = $python;

$output = shell_exec("$cmd0");

   $pathname3 = '../js/embed.js';
       //echo $pathname3;
        $monfichier3 = fopen($pathname3, 'w+');
       //  echo $monfichier3;
   
		fseek($monfichier3, 0);		

        fputs($monfichier3, $output);

		 fclose($monfichier3);

  }

Command();
     

?>
 
        
   