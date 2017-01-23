<?php

session_start();


//INITIALIZATION////////////////////////////////////////////////////////////////////////////////////
$test = 2; //test
$file_path=$test;
		   
//retrieve the file name                                    retrive the current file's name
	//	 $file_path = remplaceMoi(basename(__FILE__));

$sequence = shell_exec('c:/Python27/python.exe Python27/Punit/Test.py 2>&1');

// iterate through the string
$len = strlen($sequence);


//echo '<script>alert("len: ' . $len . '");</script>';
$pass = TRUE;


 echo ' length: ' . $len ;
 //Calculate the number of mistake
 numberOfTryCalcul($len, $sequence, $file_path);

 
 /////////////////////////////////////////////////////////////////////////////////////////////////////////
//ANALYZE THE ANSWER'S STATUS
for($i = 0; $i < $len; $i++){
    if($sequence[$i] == "."){
        continue;
    }
 
     else if ($sequence[$i] == "F") {
		 
		
		 //Score System wrong answer
		 ScoreAndPourcentage(0, $file_path);
        echo $i;
         $pass = FALSE;
        break;
    } 
     
}


if($pass){
	
	
	//Score System success
	ScoreAndPourcentage(1, $file_path);
	
    echo -1;
}



/////////////////////////////////////////////////////////////////////////////////////////////////////////

function numberOfTryCalcul($len, $sequence, $file_path) {
	
	$numberOfTry = $_SESSION['questionComplete'][2]['numberOfTry']; 
	//echo ' numberOfTrySESSION: ' . $_SESSION['questionComplete'][2]['numberOfTry'] ;

	
	for($i = 0; $i < $len; $i++){ 

      if ($sequence[$i] == "F") {
		 
		$numberOfTry++;
		
    } }
	
	$_SESSION['questionComplete'][$file_path]['numberOfTry']=$numberOfTry;
	

     
	//  echo ' numberOfTry 1: ' . $numberOfTry ;

	
    
	
}



function ScoreAndPourcentage($success, $file_path){

 //echo ' success: ' . $success ;
		  

			$ArrayQuestion= $_SESSION['questionComplete'];
			$numberOfTry=$ArrayQuestion[$file_path]['numberOfTry'];
			$leScore = $_SESSION['score'];
			$lePourcentage = $_SESSION['pourcentage'];
			$id=$_SESSION['id'];
		
			 
			 
			 
			 
			 if($ArrayQuestion[$file_path]['status'] == 0 ) {   //if question is not finished
				 
				 
				if($success == 1){
					
				
				 $ArrayQuestion[$file_path]['status'] =1;
				 
				 $lePourcentage +=  1/count($ArrayQuestion)*100;
				 if($lePourcentage>100) 
				 {
					 $lePourcentage=100;
					 
				 }
				}
				 
			//	  echo ' numberOfTry 2: ' . $numberOfTry ;
				 
		// Formula :		( (((-log(5*x-15)*x+150)*y)/x)+5 )/(10+numberOfTry)    where x is the pourcentage, y levelOfDifficulty
				 
				 $leScore += intval(  ((((150-log(5*($lePourcentage+5)-15)*$lePourcentage) *  $ArrayQuestion[$file_path]['levelOfDifficulty'])/($lePourcentage+1))+5)  / (10+($numberOfTry+1)));
			     
				//  echo ' score : ' . $leScore ;
				
				 
				 
				 //REFRESH DATA IN THE SERVER
				 
				 $_SESSION['questionComplete']= $ArrayQuestion;
				 $_SESSION['score']= $leScore;                  
				 $_SESSION['pourcentage']=$lePourcentage;
				 
				 
				 //ArrayQuestion from array to json
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
				
                //Prepare database request
                  $req = $bdd->prepare('UPDATE user SET score = :score, pourcentage = :pourcentage, questionComplete = :questionComplete WHERE id = :id');
				  //exectute database request
                 $req->execute(array(
	                     'score' => $leScore,
	                    'pourcentage' => $lePourcentage,
                       	'questionComplete' => $ArrayQuestionJSON,
                     	'id' => $id
                        	));

			        	$bdd = null;
						
						

				 
				 
				 			 }
	
			
			}	


























