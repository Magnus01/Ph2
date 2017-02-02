<?php

// DATABASE CONFIG
session_start();
require __DIR__. '../../gentelella/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '../../gentelella/postrue/classes/model.class.php'; // Model
$dbhandler = new Config();
$Model = new Model($dbhandler);

// mysql queries
//$Course_id = $_SESSION['Course_id'];
$Course_id = 11;
$Exercise_id =293; 
$_SESSION[Exercise_id] = $Exercise_id; 
$result = $Model->getExercises($Course_id);
$result2 = $Model->getUnitTestStatements($Exercise_id);
//var_dump($result[0]);
 
// make data model
$arr = array(
    'id' => $Exercise_id,
    'title' => $result->title,
    'description' => 2,
    'programmingLanguage' => 3,
    'creationTimestamp' => 4,
    'creator' => 5,
    'unittest' => array()
//    ,
//    'unittest2' => array()
);


// Add exercises to model (set of rows)
$length = sizeof($result2);

for ($i = 0; $i < $length; $i++) {
    array_push($arr['unittest'], array(
        'id' => $result2[$i]->id,
        'code' => $result2[$i]->code,
        'order' => $result2[$i]->order,
        'hint' => $result2[$i]->hint,
        'Exercise_id' => $result2[$i]->Exercise_id
    )
              );
}


$var = '';
for ($i = 0; $i < $length; $i++) {
    $str1 .= $result2[$i]->code;
//    $str1 = $result2[$i]->code;
    $var = preg_replace('#[\xD\xA]+#',  "$1\n\t", $str1);
    $var5 .= $var;

    
//    $var. = indent($str);
//    console_log($var);
}

 


$var0 = "from something import string" . "\n";
$var1= "import unittest" . "\n";
    
$var2 = "class TestStringMethods(unittest.TestCase):" . "\n";

$var6 = "\n" . "if __name__ == '__main__':";

$var7 = "\n" ."\t" . "unittest.main()";
    
        $monfichier2 = fopen('text.py', 'w+');
$var5 = print_r($var,true);

		fseek($monfichier2, 0);		
        $var = preg_replace('#[\xD\xA]+#', '\n\t$1', $str1);
    
        fputs($monfichier2, $var0 . $var1 . $var2 . $var5 . $var6 . $var7);
        fclose($monfichier2);

// if __name__ == '__main__':
//    unittest.main()
























