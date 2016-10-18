<p>Bonjour <?php echo $_POST['answer'] ; ?> !</p>
				
				<?php
				
				
				
					$monfichier = fopen('src/C3Q2.js', 'r+');  

					$ligne = fgets($monfichier);
 
 
					//echo '<p>Cette page a été vue ' .$_POST['prenom'] . ' fois !</p>';
						fseek($monfichier, 0);
						fputs($monfichier, $_POST['answer']); 
																
 
						fclose($monfichier);  ?>