<?php

// DATABASE CONFIG
session_start();
require __DIR__. '/postrue/config2/dbconnect.php'; // database connection
require __DIR__. '/postrue/classes/model.class.php'; // Model
$dbhandler = new Config();
$Model = new Model($dbhandler);

// mysql queries
//$Course_id = $_SESSION['Course_id'];
$Course_id = 11;
$Exercise_id =293;
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


//
//for ($i = 0; $i < $length; $i++) {
//    array_push($arr['unittest2'], array(
//        'id' => $result2[$i]->id,
//        'code' => $result2[$i]->code,
//        'order' => $result2[$i]->order,
//        'hint' => $result2[$i]->hint,
//        'Exercise_id' => $result2[$i]->Exercise_id
//    )
//              );
//}
//echo json_encode($arr[1]->code);
//for ($i = 0; $i < $length; $i++) {
////$arr[0]
////    
//    ($arr[$i]->code, $arr[$i]->order, $arr[$i]->hint, $arr[$i]->$Exercise_id);
//}
//echo "<br><br><br>";
echo json_encode($arr);