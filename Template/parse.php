<?php

session_start();

$test = 2;
$file_path=$test;
		   
//retrieve the file name
	//	 $file_path = remplaceMoi(basename(__FILE__));





$sequence = shell_exec('c:/Python27/python.exe Python27/Punit/Test.py 2>&1');

// iterate through the string
$len = strlen($sequence);
 //number of mistakes

//echo '<script>alert("len: ' . $len . '");</script>';
$pass = TRUE;

 //echo '<script>alert("Parse");</script>';

 echo ' length: ' . $len ;
 numberOfTryCalcul($len, $sequence, $file_path);

//ANALYZE THE ANSWER'S STATUS
for($i = 0; $i < $len; $i++){
    if($sequence[$i] == "."){
        continue;
    }
    /*else if ($sequence[$i] == "E") {
        echo $i;
        $pass = FALSE;
        break;
    }*/
     else if ($sequence[$i] == "F") {
		 
		
		  //echo ' pass1: ' . $pass ;
		 ScoreAndPourcentage(0, $file_path);
        echo $i;
         $pass = FALSE;
        break;
    } 
     
}


if($pass){
	
	
	//echo '<script>alert("Correct");</script>';
	//echo ' pass1: ' . $pass ;
	ScoreAndPourcentage(1, $file_path);
	
    echo -1;
}


//ScoreAndPourcentage  System   include doesn't seem to work


function numberOfTryCalcul($len, $sequence, $file_path) {
	
	$numberOfTry = $_SESSION['questionComplete'][2]['numberOfTry']; 
	echo ' numberOfTrySESSION: ' . $_SESSION['questionComplete'][2]['numberOfTry'] ;
	//$syntaxError = 0; $numberF=0;
	
	for($i = 0; $i < $len; $i++){  //echo $i . '<br/>';
   /* if($sequence[$i] == "."){
        
		$syntaxError++;
		 //echo $syntaxError . '<br/>' . $i . '<br/>';
		
    }*/

      if ($sequence[$i] == "F") {
		 
		$numberOfTry++;
		
    } }
	
	$_SESSION['questionComplete'][$file_path]['numberOfTry']=$numberOfTry;
	
	//$numberOfTry += $syntaxError + $numberF;
     
	  echo ' numberOfTry 1: ' . $numberOfTry ;
	 // echo ' syntaxError: ' . $syntaxError ;
//echo ' numberF: ' . $numberF ;
	
    
	
}



function ScoreAndPourcentage($success, $file_path){

 echo ' success: ' . $success ;
		  
		//  echo '<script>alert("Score");</script>';
		  

		   
		   
			$ArrayQuestion= $_SESSION['questionComplete'];
			$numberOfTry=$ArrayQuestion[$file_path]['numberOfTry'];
			$leScore = $_SESSION['score'];
			$lePourcentage = $_SESSION['pourcentage'];
			$id=$_SESSION['id'];
			//echo 'array: ' . $array . '<br/><br/>';//echo __FILE__ . '<br/>';echo $file_path . '<br/>';
			//$serialized=   serialize($array);
			//$file_path='C4Q2';
			 
			//echo  'strval: ' . strval($file_path) . '<br/><br/>';
			
			//$ArrayQuestion = unserialize($serialized);
			 
			 
			 
			 
			 
			 if($ArrayQuestion[$file_path]['status'] == 0 ) {   
				 
				 
				if($success == 1){
					
				
				 $ArrayQuestion[$file_path]['status'] =1;
				 
				 $lePourcentage +=  1/count($ArrayQuestion)*100;
				 if($lePourcentage>100) 
				 {
					 $lePourcentage=100;
					 
				 }
				}
				 
				  echo ' numberOfTry 2: ' . $numberOfTry ;
				 
		// Formula :		 (((-log(5*x-15)*x+150)*y)/x)+5     where x is the pourcentage, y levelOfDifficulty
				 
				 $leScore += intval(  ((((150-log(5*($lePourcentage+5)-15)*$lePourcentage) *  $ArrayQuestion[$file_path]['levelOfDifficulty'])/($lePourcentage+1))+5)  / ($numberOfTry+1));
			     
				  echo ' score : ' . $leScore ;
				 
				//   echo '<script>alert(' . $leScore . ');</script>';
				 
				 
				// echo 'count: ' . count($ArrayQuestion) . '<br/><br/>';
				// echo 'array: ' . $ArrayQuestion[$test] . '<br/><br/>';echo 'score: ' . $leScore . '<br/><br/>';echo 'pourcentage: ' . $lePourcentage . '<br/><br/>';
				 
				 
				 
				 //REFRESH DATA IN THE SERVER
				 
				 $_SESSION['questionComplete']= $ArrayQuestion;
				 $_SESSION['score']= $leScore;                   //$leScore;
				 $_SESSION['pourcentage']=$lePourcentage;
				 
				 $ArrayQuestionJSON=json_encode($ArrayQuestion);
				 
				 //REFRESH DATA INTO THE DATABASE
				try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=TutoCalculator;charset=utf8', 'root', 'mysql');
					}
					catch (Exception $e)
					{
							die('Erreur : ' . $e->getMessage());
					}
				 // $req = $bdd->prepare('UPDATE user SET questionComplete=' . $questionComplete . ' WHERE id='. $id);
						// $req->execute();
	 // $req1 = $bdd->prepare('UPDATE user SET score=60, pourcentage=50 WHERE id=19');
						// $req1->execute();
 
     $req = $bdd->prepare('UPDATE user SET score = :score, pourcentage = :pourcentage, questionComplete = :questionComplete WHERE id = :id');
$req->execute(array(
	'score' => $leScore,
	'pourcentage' => $lePourcentage,
	'questionComplete' => $ArrayQuestionJSON,
	'id' => $id
	));
 
 
 
 

				//		echo  'id: ' . $id . '<br/><br/>';
				//		echo  'score: ' . $leScore. '<br/><br/>';
				//		echo  'pourcentage: ' . $lePourcentage . '<br/><br/>';
						$bdd = null;
						
						

			//	  echo '<script>alert("ca marche wesh");</script>';
				 
				 
				 			 }
		//	 else {
				 
			//	 echo '<script>alert("ca marche pas id: ' . $ArrayQuestion[$file_path] . '");</script>';
		//	 }
			 
			 
			 
			//echo  'unserialized: ' . $ArrayQuestion . '<br/><br/>';
			//echo 'unserialized[0]: ' .  $ArrayQuestion[$test] . '<br/><br/>';  print_r($ArrayQuestion);
			
			}	


























