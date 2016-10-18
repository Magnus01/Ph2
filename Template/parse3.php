<?php
function something() {

$output1 = shell_exec('jasmine-node Python27/Punit/jasmine/spec/C3Q1_spec.js --junitreport');

$test = 

if (strpos($output1, "0 failures") !== FALSE) {
            echo '<script><i>Hint:</i><br/>Congratulations! Your answer is correct.</script>';
            return TRUE;
        }

        // check if it's a syntax error. If so, tell them to have a look at the ACE editor
        if (strpos($output1, "SyntaxError") == TRUE) {
            echo '<script><i>Hint:</i><br/>You have a syntax error please check the editor for mistakes.</script>';
            return TRUE;
        }
        
        if (strpos($output1, "ReferenceError") == TRUE) {
            echo '<script><i>Hint:</i><br/>You have  an undefined variable or function please use the var or function tag. Is your function named the correct name?</script>';
            return TRUE;
        }
        
        if (strpos($output1, "TypeError") == TRUE) {
            echo '<script><i>Hint:</i><br/>You have not answered the question please write an answer with the correct function or variable name.</script>';
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
?>