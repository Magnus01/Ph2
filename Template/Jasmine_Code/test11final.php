<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>TEST PHP TUTO</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />   <!--CSS after bro-->
   </head>
   <body>
		<p>
			TEST PHP.<br />
			Write the answer below:
		</p>
		
		<form action="test11final.php" method="post">
			<p>
				<textarea name="answer" rows="8" cols="45"  placeholder="Your answer here "  ></textarea>
					 <input   onclick="fonction()" type="submit" value="Submit" />
				
				
			</p>
		</form>
		
		<p>Bonjour <?php echo $_POST['answer'] ; ?> !</p>   <!--Just a test-->
				
				<?php
				
					$monfichier = fopen('npm/node_modules/jasmine/bin/src/calculator.js', 'w+');  //Open the js file with permission to read and write

					//$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						
						
						
				        fseek($monfichier, 0);  //point on the first line
						fputs($monfichier, $_POST['answer']);    //post the answer
																
 
						fclose($monfichier); //close and save the file 
						
						
/////////////////////////////////NODE.JS//////////////////////////////////////////					
						
						//$command1='cd C:\\Users\\R9KT4\\AppData\\Roaming\\npm\\node_modules\\jasmine\\bin ; jasmine-node spec --junitreport';
						
						//Here we change the directory, it's working
						echo getcwd() . '<br/>';
						chdir( 'npm/node_modules/jasmine/bin');
						echo getcwd() . '<br/>';
						
						
						$command1='  jasmine-node spec --junitreport';   //PHP doesn't seem to recognize it..
						
						
						//$command2="jasmine-node spec --junitreport";
						
						echo   $command1 . '<br/>'  ;
						//echo   $command2
						  
						$output1 = shell_exec($command1);         //execute it on the shell, the function works but not with node.js commands...
						
						echo $output1 . '<br/>';
						
						
						
						//retrieve xml file
						// $monXml = fopen('reports/TEST-multiplication.xml', 'a'); 
						// $ligne = fgets($monXml);
						// echo 'sdsdsdsd';
						// echo htmlspecialchars($ligne). '<br/>';
						// echo '<pre>' . htmlspecialchars($ligne) . '</pre><br/>';
						// fclose($monXml);
						
						$test=highlight_file('reports/TEST-multiplication.xml',  $return = true );
						
						
						echo 'CACACACACACACACACA' . $test . '<br/>';
						echo 'sdsdsdsd<br/><br/><br/><br/>';
						
						//Catch exceptions
						if (preg_match("#TypeError|Exception#", $output1))
							{
											echo 'ERROR EXCEPTION <br/>';
									
							}
							else
							{
								echo 'HYGGELIG ikke exception <br/>';
								
									//XML REGEX
										if (preg_match("#failures=\"[1-99]\"#", $test))
											{
												echo 'ERROR XML <br/>';
											}
											else
											{
												echo 'HYGGELIG ikke error<br/>';
												
											}
							}
						
						
						
						
						
													
						
						
						
						?>
		
	
		
   </body>
   
   
   <script language="JavaScript"> 

//function fonction() {window.open("SpecRunner.html","newFenetre","width=1000,height=500");  }  <!-- Display the SpecRunner page in a pop-up with the result-->

</script> 

</html>
