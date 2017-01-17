function ScoreAndPourcentage(){
		
		  
		   
		   
		   
		   $file_path = remplaceMoi(basename(__FILE__));
		   
		   
			$ArrayQuestion= $_SESSION['questionComplete'];
			$leScore = $_SESSION['score'];
			$lePourcentage = $_SESSION['pourcentage'];
			$id=$_SESSION['id'];
			//echo 'array: ' . $array . '<br/><br/>';//echo __FILE__ . '<br/>';echo $file_path . '<br/>';
			//$serialized=   serialize($array);
			$test='C4Q2';
			 
			//echo  'strval: ' . strval($file_path) . '<br/><br/>';
			
			//$ArrayQuestion = unserialize($serialized);
			 
			 
			 if($ArrayQuestion[$file_path] == 0) {
				 
				 $ArrayQuestion[$file_path] =1;
				 $leScore += intval(1/count($ArrayQuestion)* rand(100,1000));
			     $lePourcentage +=  1/count($ArrayQuestion)*100;
				// echo 'count: ' . count($ArrayQuestion) . '<br/><br/>';
				// echo 'array: ' . $ArrayQuestion[$test] . '<br/><br/>';echo 'score: ' . $leScore . '<br/><br/>';echo 'pourcentage: ' . $lePourcentage . '<br/><br/>';
				 
				 
				 //REFRESH DATA IN THE SERVER
				 
				 $_SESSION['questionComplete']=$ArrayQuestion;
				 $_SESSION['score']=$leScore;
				 $_SESSION['pourcentage']=$lePourcentage;
				 
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
 
     $req = $bdd->prepare('UPDATE user SET score = :score, pourcentage = :pourcentage WHERE id = :id');
$req->execute(array(
	'score' => $leScore,
	'pourcentage' => $lePourcentage,
	'id' => $id
	));
 
 
 
 

						echo  'id: ' . $id . '<br/><br/>';
						echo  'score: ' . $leScore. '<br/><br/>';
						echo  'pourcentage: ' . $lePourcentage . '<br/><br/>';
						$bdd = null;
						
						

				  echo '<script>alert("ca marche wesh");</script>';
				 
				 
				 
			 }
			 else {
				 
				 echo '<script>alert("ca marche pas id: ' . $ArrayQuestion[$file_path] . '");</script>';
			 }
			 
			 
			 
			//echo  'unserialized: ' . $ArrayQuestion . '<br/><br/>';
			//echo 'unserialized[0]: ' .  $ArrayQuestion[$test] . '<br/><br/>';  print_r($ArrayQuestion);
			
			}	