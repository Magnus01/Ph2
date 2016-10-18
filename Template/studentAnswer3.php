<?php   
function Correction($Chapath, $Qname) {

    echo '<script>alert("correction has been called")</script>';
$PostAnswer = $_POST['text1'];
$TestAnswer = 'MathUtils = function () {}; 
    MathUtils.prototype.' . $PostAnswer . '
    var ' . $PostAnswer . '
    ' . 'exports.MathUtils = function () { 
    return MathUtils;  
    }; 
    exports.isNumeric = isNumeric;';
        $pathname2 = '' . $Chapath . '/src/' . $Qname . '.txt';

       // echo $pathname2;
        $monfichier2 = fopen('Python27/Punit/jasmine/src/C3Q1.js', 'w+');

		fseek($monfichier2, 0);		

        fputs($monfichier2, $TestAnswer);
        fclose($monfichier2);
    
        #$monfichier3 = fopen('Python27/Punit/MA147C1Q1.txt', 'w+');
    

		#fseek($monfichier3, 0);		

        #fputs($monfichier3, $PostAnswer);
        #fclose($monfichier3);
    }

function something() {
    
    Correction(3, 4);
    
    chdir('Python27/Punit/jasmine/');

$output1 = shell_exec('jasmine-node spec/C3Q1_spec.js --junitreport');

if (strpos($output1, "0 failures") !== FALSE) {
            echo '<i>Hint:</i><br/>Congratulations! Your answer is correct.';
            return TRUE;
        }

        // check if it's a syntax error. If so, tell them to have a look at the ACE editor
        if (strpos($output1, "SyntaxError") == TRUE) {
            echo '<blockquote id="hint"><i>Hint:</i></br>You have a syntax error please check the editor for mistakes.</blockquote>';
            return TRUE;
        }
        
        if (strpos($output1, "ReferenceError") == TRUE) {
            echo '<blockquote id="hint"><i>Hint:</i><br/>You have  an undefined variable or function please use the var or function tag. Is your function named the correct name?</blockquote>';
            return TRUE;
        }
        
        if (strpos($output1, "TypeError") == TRUE) {
            echo '<blockquote id="hint"><i>Hint:</i><br/>You have not answered the question please write an answer with the correct function or variable name.</blockquote>';
            return TRUE;
        }

        if (strlen($output1) > 0){
            
            echo '<script src="../js/hint.js"></script>
            <script>returnHint("Python27/Punit/jasmine/reports/TEST-MathUtils.xml");</script>';
        }
         else {
        // general wrong hint
		 echo '<script>alert("else general hint");</script>';
		  returnHint("Your answer is wrong. Try again.", TRUE);
		  
		  }
};
//Correction(3, 4);
something();



?>