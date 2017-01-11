<?php
 //echo 'coucou'; echo $_POST['answerDLtest'];
 
 

 
 function ExtractDownload($post, $type) {
				
				$array1= explode("SEPERATEFILE", $post);
				
				
			
				
				//$return1= $array1[0];$return2= $array1[1];$return3= $array1[2];$return4= $array1[3];
				
				switch($type){
        case 'html':
            $return= $array1[1];
            
            break;
        case 'css':
           $return= $array1[2];
            
            break;
        case 'js':
            $return= $array1[3];
            
            break;
    }
		
				
				  //echo $return1 . '<br/><br/>';echo $return2 . '<br/><br/>';echo $return3 . '<br/><br/>';//echo $return4 . '<br/><br/>';
							
				return $return;
				
				
			}
 
 $answer =$_POST['answerDLtest'];
 
 
 
 //$html= ExtractDownload($answer, 'html');
 //$css=ExtractDownload($answer, 'css');
 //$js=ExtractDownload($answer, 'js');
 
 
 
 
 // Chemin du fichier
   // $fileHTML = 'indexANSWER.html'; 
	//$fileCSS = 'style.css'; 
	//$fileJS = 'scriptJS.js';
	  $filePY ='answer.py';
	
	echo '<script>alert(' . $_POST['answerDLtest'] . ');</script>';
	
	
	
	
	
		$monfichierHTML = fopen($filePY, 'w+');
	    fseek($monfichierHTML, 0);
	   fputs($monfichierHTML, $answer);
	   	fclose($monfichierHTML);
	
	
	/*   old version
	$monfichierHTML = fopen($fileHTML, 'w+');
	    fseek($monfichierHTML, 0);
	   fputs($monfichierHTML, $html);
	   	fclose($monfichierHTML);
		
		$monfichierCSS = fopen($fileCSS, 'w+');
	    fseek($monfichierCSS, 0);
	   fputs($monfichierCSS, $css);
	   	fclose($monfichierCSS);
		
		$monfichierJS = fopen($fileJS, 'w+');
	    fseek($monfichierJS, 0);
	   fputs($monfichierJS, $js);
	   	fclose($monfichierJS);*/
		
		
   
	 
	 
      $zip = new ZipArchive(); 
      // On ouvre l’archive.
      if($zip->open('SciCodeProject.zip') == TRUE)
      // On crée l’archive.
      if($zip->open('SciCodeProject.zip', ZipArchive::CREATE) == TRUE)
      {
        echo '&quot;Zip.zip&quot; ouvert';

		// Ajout d’un fichier.
	$zip->addFile($filePY);
	
	
		
		
		
        $zip->close();
      }
      else
      {
        echo 'Impossible d&#039;ouvrir &quot;Zip.zip&quot;';
	// Traitement des erreurs avec un switch(), par exemple.
      } 
	 
	  // Gestion du telechargement dans le navigateur
     header('Content-Type: application/zip');
     header('Content-Disposition: attachment; filename='.basename('SciCodeProject.zip'));
     readfile('SciCodeProject.zip');
	 
	 
	 
	 
	 
	 
	 /*
     // Gestion du telechargement dans le navigateur
     header('Content-Type: application/force-download');
     header('Content-Disposition: attachment; filename='.basename($fileCSS));
     readfile($fileCSS);
     // Gestion du telechargement dans le navigateur
     header('Content-Type: application/force-download');
     header('Content-Disposition: attachment; filename='.basename($fileJS));
     readfile($fileJS);
     */
	 
	 
    ?>