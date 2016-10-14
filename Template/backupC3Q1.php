<!--Latest version without any bug (as far as I've tested): without save system tho   -->
<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />


    <!--[if lte IE 8]>
    <script src="../css/ie/html5shiv.js"></script><![endif]-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>
    <script src="../js/ace.js"></script>
    <script src="../js/requirePrebuilt.js"></script>

<script type="text/javascript" src="../jsPy/d3.v2.min.js"></script>
<script type="text/javascript" src="../jsPy/jquery-1.8.2.min.js"></script>

<script type="text/javascript" src="../jsPy/jquery.ba-bbq.min.js"></script> <!-- for handling back button and URL hashes -->
<script type="text/javascript" src="../jsPy/jquery.jsPlumb-1.3.10-all-min.js "></script> <!-- for rendering SVG connectors 
                                                                                         DO NOT UPGRADE ABOVE 1.3.10 OR ELSE BREAKAGE WILL OCCUR -->
<script type="text/javascript" src="../jsPy/jquery-ui-1.8.24.custom.min.js"></script> <!-- for sliders and other UI elements -->
<link type="text/css" href="../css/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
<link type="text/css" href="../css/basic.css" rel="stylesheet" />

<!-- Python Tutor frontend code and styles -->
<script type="text/javascript" src="../jsPy/pytutor.js"></script>
<link rel="stylesheet" href="../css/pytutor.css"/>
    
    <title>Python Tutorial: Example Implementation for MA- 157</title>
 
  <link rel="stylesheet" href="../../css/style.css">
  
 <!--   <link rel="stylesheet" href="../../css/skel.css"

>-->
    <link rel="stylesheet" type="text/css" href="Taskbar1.css">
   <link rel="stylesheet" href="../../css/style-xlarge.css">
	

</head>


<body >






    <!-- Header -->
    <header id="header">
        <h1><a href="../../index.html"><img src="../../images/LogoUIA.png"/></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="C3Q1py.php">Refreshbala</a></li>
                <li><a href="../Overview.php">Tutorial</a></li>
                <!--<li><a href="../../sign-up.php">Subscription</a></li>-->
                <li><a href="../../index.html">Deconnexion</a></li>
                <li><a href="#">Project team</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
			
            <!-- Table -->
            <section>
                <h2>Filter </h2>
                    <h3>Explanation of the if Statement in Python for filtering</h3>
					
					 <div id="listSumDiv"></div>
					 

                            
                           
                        <p id="pp">Use the code already given, all that is required is to insert 
                            <pre><code class="prettyprint">if age < 30:</code></pre></p>
                            
						<div class="container" >
							<div class="row">
								<div class="form-group col-md-3"></div>
								<div class="form-group col-md-3">
									<!--Put the question here!!-->
									<p>
									<h3><strong>Question 1:</strong> filtering </h3>
									Having Learned how to use the for loop. Use the if statement in the following question in order to get the output of the agegroup to be people who are under 30 years old</p>
									<p></p>
                                
									<p><h3 id="test3"></h3> </p>
									<!-- <p>  <input   class="button" type="submit" value="Submit" name="submit1" id="submit1">
									<input type="reset" value="Reset answer" name="reset"></p>-->

									<form method="post" action="mailto:Frank@cohowinery.com" name="ContactForm"
										  onsubmit="return ValidateContactForm();">
										<p>Comments:  <textarea cols="55" name="Comment">  </textarea></p>
										<p>
											<input type="submit" value="Send" name="submit2">
											<input type="reset" value="Reset" name="reset">
										</p>
									</form>
								</div>
							</div>
							<div class="row">
								<div class="6u 12u$(small)">
								<br/><br/><br/>
									<ul class="actions fit">
										<li><a href="../../Overview.php" class="button alt fit">Back</a></li>
										<li><a href="C3Q2.php" class="button  alt fit">Next question</a></li>
									</ul>
								</div>
							</div>
						</div>
			</section>
		</div>




		<!-- navbar buttons -->
		<div id="canva">
			<iframe id="view"></iframe>
			
				<a id="pythonTab" class="button default" onclick="changeTabs('python')">Python</a>
			<!--	<a id="cssTab" class="button default" onclick="changeTabs('css')">CSS</a>
				<a id="jsTab" class="button default" onclick="changeTabs('js')">JavaScript</a>-->
			
			<div id="fixed" ></div>
			<div id="test2"></div>
			<div id="test"></div>
			<form action="C3Q1py.php" method="post">
				<textarea name="answer" rows="8" cols="45" ></textarea>
				<input name="submit1" type="submit" value="Submit" id='submit1'>
			</form>
			<a onclick="hide()" id="hide" class="button default">Hide</a>
			<a onclick="menu()" id="menu" class="button default">Menu</a>
           <a onclick="loadDoc(Chapath, Qname)" id="resetcode" class="button default">ResetCode</a>


		</div>


		   <form action="../Download_system/download_system.php" method="post" >  
			<textarea name="answerDLtest" rows="8" cols="45" ></textarea>
			<input name="download" type="submit" value="Download" id='download'>
		</form>

		<!-- menu -->
		<div id="menuQuestion" >
			<nav id="nav">
				<h1>Chapter 1:</h1>
				<ul>
					<li><a href="#">C1Q1</a></li>
					<li><a href="#">C1Q2</a></li>
					<li><a href="#">C1Q3</a></li>
					<li><a href="#">C1Q4</a></li>
				</ul>
				<h1>Chapter 2:</h1>
				<ul>
					<li><a href="#">C2Q1</a></li>
					<li><a href="#">C2Q2</a></li>
					<li><a href="#">C2Q3</a></li>
					<li><a href="../Chapter2/C2Q4.php">C2Q4</a></li>
				</ul> <h1>Chapter 3:</h1>
				<ul>
					<li><a href="../Chapter3/C3Q1.php">C3Q1</a></li>
					<li><a href="../Chapter3/C3Q2.php">C3Q2</a></li>
					<li><a href="../Chapter3/C3Q3.php">C3Q3</a></li>
					<li><a href="../Chapter3/C3Q4.php">C3Q4</a></li>
				</ul> <h1>Chapter 4:</h1>
				<ul>
					<li><a href="../Chapter4/C4Q1.php">C4Q1</a></li>
					<li><a href="../Chapter4/C4Q2.php">C4Q2</a></li>
					<li><a href="../Chapter4/C4Q3.php">C4Q3</a></li>
					<li><a href="../Chapter4/C4Q4.php">C4Q4</a></li>
				</ul>
			</nav>
		</div>





 <?php include('correcCha3pybackup3.php');
    // set 1) path, 2) qname and 3)exports variable
    if(isset($_POST["submit1"])) { 
      Correction('Chapter3', 'C3Q1py');
                                  Command();
                                 echo '<script src="../js/embed.js" type="text/javascript"></script>';
                                 echo '<script src="../js/embedjs2backup.js" type="text/javascript"></script>';
    echo '<script src="../js/z2py.js" type="text/javascript"></script>';}

	
	
    include('../saving.php');
	
    echo '<script type="text/javascript">',
     'loadDoc($Chapath, Qn$ame);',
     '</script>';
 
	
	
 ?>
    
			</section>

			
			
			
			
			
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Practical informations</h3>
							<p>Do you need an information?</p>
							<ul class="alt">
								<li><a href="#">How the website works?</a></li>
								<li><a href="#">Frequently Asked Questions</a></li>
								
								<li><a href="#">About the team project</a></li>
							</ul>
						</section>
						
						<!--<section class="4u 6u$(medium) 12u$(small)">
							<h3>Nostrum, repellat!</h3>
							<p>Tenetur voluptate exercitationem eius tempora! Obcaecati suscipit, soluta earum blanditiis.</p>
							<ul class="alt">
								<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
								<li><a href="#">Id inventore, qui necessitatibus sunt.</a></li>
								<li><a href="#">Deleniti eum odit nostrum eveniet.</a></li>
								<li><a href="#">Illum consectetur quibusdam eos corporis.</a></li>
							</ul>
						</section>-->
						
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									Gimlemoen 25, 4630 Kristiansand S, Norvège<br>
									
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">magnusl15@uia.no</a>
								</li>
								<li>
									
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; UiA. All rights reserved.</li>
						<li>Design: <a href="">Calculator Tutorial</a></li>
						<li>Images: <a href="">Calculator Tutorial</a></li>
					</ul>
				</div>
			</footer>



<hr>
<script> //alert("C1Q3"); </script>

	<script src="../js/src-min/ace.js" type="text/javascript" charset="utf-8"></script>




<script src="../js/TabsPy2.js" type="text/javascript"></script>
<script src="../js/TaskBar2Py.js" type="text/javascript"></script>
<script>
var Chapath = 'Chapter3';
var Qname = 'C3Q1py';
    //if we parse the strings of the url we dont have to define these variables manually
</script>
<script src="../js/requirePrebuilt.js" type="text/javascript"></script>

</body>

</html>