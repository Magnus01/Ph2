<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercise Page</title>
<link href="images/apple-icon.png" rel="apple-touch-icon">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../css_v3/normalize.css">
        <script src="../js/jquery.min.js"></script>

    <script type="text/javascript" src="../jsPy_v3/d3.v2.min.js"></script>
<script type="text/javascript" src="../jsPy_v3/jquery-1.8.2.min.js"></script>

<script type="text/javascript" src="../jsPy_v3/jquery.ba-bbq.min.js"></script> <!-- for handling back button and URL hashes -->
<script type="text/javascript" src="../jsPy_v3/jquery.jsPlumb-1.3.10-all-min.js "></script> <!-- for rendering SVG connectors 
                                                                                      DO NOT UPGRADE ABOVE 1.3.10 OR ELSE BREAKAGE WILL OCCUR -->
<script type="text/javascript" src="../jsPy_v3/jquery-ui-1.8.24.custom.min.js"></script> <!-- for sliders and other UI elements -->
 <link type="text/css" href="../css_v3/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
<link type="text/css" href="../css_v3/basic.css" rel="stylesheet" />

	<script src="../js/loadContent.js"></script>

<!-- Python Tutor frontend code and styles -->
<script type="text/javascript" src="../jsPy_v3/pytutor.js"></script>
<link rel="stylesheet" href="../css_v3/pytutor.css"/>

</head>
<body>

	<section id="navigation" class="bg-navigation">
		<div class="clearfix">
			<a class="navbar--title" href="Overview.php">
				<div class="logo"></div>
				<h1 class="logo-title">Sci-code</h1>
			</a>
			<div class="navigation--buttons-center"
				data-onboarding="button-center">
				<a class="navbar--title" href="/"> </a><a href=""
					tooltip-append-to-body="true" ng-click="previousExercise()"
					ng-hide="isFirstExercise" button-shortcut="ctrl+j"
					tooltip="Previous Exercise (Ctrl+J)" tooltip-placement="bottom"
					class="navigation--left"> <i class="fa fa-chevron-left"></i>
				</a> <a href="" tooltip-append-to-body="true"
					ng-click="openCourseOutlineModal()" button-shortcut="ctrl+o"
					tooltip="Ctrl+O" tooltip-placement="bottom"
					ng-class="isFirstExercise ? 'navigation--left' : 'navigation--middle'"
					class="navigation--outline navigation--middle"> <i
					class="fa fa-bars"></i><span>Course Outline</span>
				</a> <a href="" tooltip-append-to-body="true" ng-click="nextExercise()"
					button-shortcut="ctrl+k" tooltip="Next Exercise (Ctrl+K)"
					tooltip-placement="bottom" class="navigation--right"> <i
					class="fa fa-chevron-right"></i>
				</a>
			</div>
			<!-- ngIf: user -->
			<div class="navigation--buttons-right">
				<span id="app-status" class=""> <i class="fa fa-circle"></i>
					<span id="app-status-text">Workspace Ready</span>
				</span>

			</div>
			<!-- end ngIf: user -->
		</div>
	</section>
	<div class="exercise-area">
		<div id="render-view">

			<aside id="sidebar" class="exercise--sidebar">
				<div class="exercise--sidebar-content">
					<div data-onboarding="assignment"
						class="exercise--assignment exercise--typography">
						<h3 class="exercise--title" ng-bind-html="exercise.title">
							Object Oriented Programming</h3>
						<skills-tooltip skills="exercise.skills" xp="exercise.current_xp"
							hint="true" solution="true"> <!-- ngIf: shown -->
						<div ng-if="shown" class="skills-tooltip"
							tooltip-placement="right"
							tooltip="Completing this exercise grants 100 XP to
&quot;Python Programming&quot;.
Using a hint or solution lowers the XP you receive."
							tooltip-append-to-body="true">Points 1/10</div>
						<!-- end ngIf: shown --> </skills-tooltip>
						<div ng-bind-html="exercise.assignment"
							ng-model="exercise.assignment" mathjax=""
							class="ng-pristine ng-untouched ng-valid">
							<p>Object-oriented programming intro adapted from MIT 6.01 course notes (Section 3.5)

</p>
							<pre>  <code>  
def addVectors (v1, v2):
    
    sum = []

    if len(v1) != len(v2):
        sum = []
    else:
        for i in range(len(v1)):
            sum.append(v1[i]+v2[i])
            
    return sum
    
addVectors([1, 2, 3], [3, 2, 1])</code>
									</pre>

						
						</div>
					</div>
					<div class="exercise--instructions-title">
						<h4>
							Exercise
						</h4>
					</div>
					<div data-onboarding="instructions"
						class="exercise--instructions exercise--typography">
						<div ng-bind-html="exercise.instructions"
							ng-model="exercise.instructions" mathjax=""
							class="ng-pristine ng-untouched ng-valid">
							<ul>
								<li><a
									href="https://docs.python.org/3/library/functions.html#print"
									target="_blank">Understand Object Orientated Programming Through Visualization
								

                                
							</ul>
						</div>
						<div class="sct-feedback" scroll=".exercise--sidebar-content"
							has-solution="true">
							<ul class="content--tab mono">
								
								<a href="" class="exercise--show-hint"> 
									<span>Hint</span>
								</a>
							</ul>
							<!-- ngRepeat: message in messages -->
						</div>
					</div>
				</div>
			</aside>

			<section id="tabs" class="exercise--content">
				<ul class="content--tab mono">
					<li ><a id="EditorTab" href="#Editor" class="active"><i class="fa fa-code"
							aria-hidden="true"></i> Code Editor</a></li>
					<li ><a id="VisualDebugTab"  href="#VisualDebug"><i class="fa fa-television"
							aria-hidden="true"></i> Visualizer</a></li>
				</ul>
				
				<div id="Editor" style="height:600px"></div>
				
				
				
				<div id="VisualDebug">
					
				</div>
<div class="content--tab-buttons">
                       
                      <form action="Download_system/download_system.php" method="post" >  
			<textarea name="answerDLtest" rows="8" cols="45" ></textarea>
			<input name="download" type="submit" value="Download" id='download'></form>
		
                        <button id="Save" data-onboarding="codeEditor" class="btn btn-md btn-inverse">
						
						
						<i class="fa fa-floppy-o" aria-hidden="true"></i>
						
						
						
						
						Download</button>
						
						
                        <a class="exercise--reset no-link-style" href=""><i class="fa fa-undo"></i></a>
                        <button id="buttonz" data-onboarding="codeEditor" class="btn btn-md btn-inverse">Execute Code</button>
                        </div>
                
                
                
                         

    <div id="testResult"></div>


  
                
                
                
                
                
                
                
                
                
                
                
                

   
                
                
			</section>
		</div>
	</div>

    <script src="../js/test.js"></script>                
        
<script src="https://code.jquery.com/jquery-1.12.4.js"
	type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
	type="text/javascript"></script>
<script type="text/javascript" src="../js/Interactive-eliasit.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js" type="text/javascript"></script>
<script type="text/javascript">
		var editor = ace.edit("Editor");     alert("BottomPHP");
		editor.setTheme("ace/theme/twilight");
		editor.getSession().setMode("ace/mode/python");
    </script>
     <script type="text/javascript" src="../js/sendAce.js"></script>
<script src="../js/download.js" type="text/javascript"></script>
</body>
</html>