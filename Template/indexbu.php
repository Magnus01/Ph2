<html class="wf-karminasans-n4-active wf-karminasans-n3-active wf-karminasans-n7-active wf-karminasans-i7-active wf-karminasans-i4-active wf-karminasans-i3-active wf-active">
<head>
    <style type="text/css">
@charset "UTF-8";
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <base href="/">
    <title ng-bind="SEO_title + ' - DataCamp'">
        Exercise Page - Code / Visual Debug
    </title>
    <!-- ngIf: SEO_canonicalLink -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="fragment" content="!">
    <meta name="keywords" content="R, Data analysis, interactive, learning ">
    <meta name="description"
          content="DataCamp is a free online interactive learning platform for data analytics. Think of it as Codecademy, but for data science.">
    <meta name="twitter:card" content="summary">

    <meta name="twitter:title" content="Line plot (1) - DataCamp">
    <meta name="twitter:description"
          content="DataCamp is a free online interactive learning platform for data analytics. Think of it as Codecademy, but for data science.">

    <meta name="twitter:image:src" content="images/var/twitter_share.png">
    <meta name="twitter:domain" content="www.datacamp.com">

    <meta name="google-signin-scope" content="email profile">
    <meta name="google-signin-cookiepolicy" content="single_host_origin">
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <link href="images/apple-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="Testing/css/normalize.css">

    <script src="https://use.typekit.net/pjc4zfc.js" type="text/javascript"></script>
    <style type="text/css">
        .tk-karmina-sans {
            font-family: "karmina-sans", sans-serif;
        }
    </style>
    
    
    
    <link rel="stylesheet" type="text/css" href="Testing/css/normalize.css">
    
    
    <link rel="stylesheet" type="text/css" href="Testing/css/karmina.css">


    <script type="text/javascript">
	try {
		Typekit.load();
	} catch (e) {
	}
    </script>
    

    <link rel="stylesheet" type="text/css" href="Testing/css/ace_editor.css" id="ace_editor" />
    <link rel="stylesheet" type="text/css" href="Testing/css/ace-tm.css" id="ace-tm" />

    <link rel="stylesheet" type="text/css" href="Testing/css/widget.css">
    <link rel="stylesheet" type="text/css" href="Testing/css/snipet-marker.css">
   
    
    <link rel="stylesheet" type="text/css" href="Testing/css/aceActive.css">
<link rel="stylesheet" type="text/css" href="Testing/css/mathJax.css">
    
  <link rel="stylesheet" type="text/css" href="Testing/css/mathJaxMenu.css">
    <link rel="stylesheet" type="text/css" href="Testing/css/mathJaxPreview.css">
   
    <link rel="stylesheet" type="text/css" href="Testing/css/mathJaxAssist.css">
    
    <link rel="stylesheet" type="text/css" href="Testing/css/mathJax_zoom.css">
    
    <link rel="stylesheet" type="text/css" href="Testing/css/mathJax_Message.css">

 <link rel="stylesheet" type="text/css" href="Testing/css/ace-crimson-editor.css" id="ace-crimson-editor" />

     <link rel="stylesheet" type="text/css" href="Testing/css/mathJaxMenuFont.css">

</head>
<body>
    <div ng-show="!globalLoading" ng-view="">
        <window-resizer></window-resizer>
        
        <section id="navigation" class="bg-navigation">
            <div class="clearfix">
                <a class="navbar--title" href="/">
                    <div class="logo"></div>
                    <h1 class="logo-title">Title logo</h1>
                    <div class="navigation--buttons-center"
                         data-onboarding="button-center">
                        <a href="" tooltip-append-to-body="true"
                           ng-click="previousExercise()" ng-hide="isFirstExercise"
                           button-shortcut="ctrl+j" tooltip="Previous Exercise (Ctrl+J)"
                           tooltip-placement="bottom" class="navigation--left">
                            <i class="fa fa-chevron-left"></i>
                        </a> <a href=""
                                tooltip-append-to-body="true" ng-click="openCourseOutlineModal()"
                                button-shortcut="ctrl+o" tooltip="Ctrl+O"
                                tooltip-placement="bottom"
                                ng-class="isFirstExercise ? 'navigation--left' : 'navigation--middle'"
                                class="navigation--outline navigation--middle">
                            <i class="fa fa-bars"></i><span>Course Outline</span>
                        </a> <a href=""
                                tooltip-append-to-body="true" ng-click="nextExercise()"
                                button-shortcut="ctrl+k" tooltip="Next Exercise (Ctrl+K)"
                                tooltip-placement="bottom" class="navigation--right">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!-- ngIf: user -->
                    <div class="navigation--buttons-right">
                        <span id="app-status" class="">
                            <i class="fa fa-circle"></i>
                            <span id="app-status-text">Workspace Ready</span>
                        </span>

                    </div>
                    <!-- end ngIf: user -->
            </div>
        </section>
            
        <div growl="">
            <div class="growl-container growl-fixed bottom-right"
                 ng-class="wrapperClasses()"></div>
        </div>
            
        <div class="exercise-area" upsell-modal="">
            <div id="rendered-view">
                <aside class="exercise--sidebar">
                    <div class="exercise--sidebar-content">
                        <div data-onboarding="assignment"
                             class="exercise--assignment exercise--typography">
                            <h3 class="exercise--title" ng-bind-html="exercise.title"> Chapter 3 Exercise 1 - Python</h3>
                            <skills-tooltip skills="exercise.skills" xp="exercise.current_xp"
                                            hint="true" solution="true">
                                <!-- ngIf: shown -->
                                <div ng-if="shown" class="skills-tooltip"
                                     tooltip-placement="right"
                                     tooltip="Completing this exercise grants 100 XP to&quot;Python Programming&quot;.Using a hint or solution lowers the XP you receive."
                                     tooltip-append-to-body="true">100xp</div>
                                <!-- end ngIf: shown -->
                            </skills-tooltip>
                            <div ng-bind-html="exercise.assignment"
                                 ng-model="exercise.assignment" mathjax=""
                                 class="ng-pristine ng-untouched ng-valid">
                                <p>
                                    With matplotlib, you can create a bunch of different
                                    plots in Python. The most basic plot is the line plot. A
                                    general recipe is given here.
                                </p> <pre>  <code>import matplotlib.pyplot as plt plt.plot(x,y) plt.show() </code>
									</pre>

                                <p>
                                    In the video, you already saw how much the world population has
                                    grown over the past years. Will it continue to do so? The world
                                    bank has estimates of the world population for the years 1950
                                    up to 2100. The years are loaded in your workspace as a list
                                    called
                                    <code>year</code>
                                    , and the corresponding populations as a list called
                                    <code>pop</code>
                                    .
                                </p>
                            </div>
                        </div>
                        <div class="exercise--instructions-title">
                            <h4>
                                Instructions<a report-button="" trigger="instructions"
                                               user-code="getFeedbackCode()"
                                               class="report-button no-link-style" href="">
                                    <i class="fa fa-flag-o" tooltip="Report a problem"
                                       tooltip-append-to-body="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div data-onboarding="instructions"
                             class="exercise--instructions exercise--typography">
                            <div ng-bind-html="exercise.instructions"
                                 ng-model="exercise.instructions" mathjax=""
                                 class="ng-pristine ng-untouched ng-valid">
                                <ul>
                                    <li>
                                        <a href="https://docs.python.org/3/library/functions.html#print"
                                           target="_blank"><code>print()</code></a> the last item from
                                        both the <code>year</code> and the <code>pop</code> list to
                                        see what the predicted population for the year 2100 is. Use
                                        two <code>print()</code> functions.
                                    </li>
                                    <li>
                                        Before you can start, you should import <code>matplotlib.pyplot</code>
                                        as <code>plt</code>. <code>pyplot</code> is a sub-package of <code>matplotlib</code>,
                                        hence the dot.
                                    </li>

                                </ul>
                            </div>
                            <div class="sct-feedback" scroll=".exercise--sidebar-content"
                                 has-solution="true">
                                <ul class="content--tab mono">
                                    <!-- ngRepeat: message in messages -->
                                    <a href="" ng-show="buttonVisible" class="exercise--show-hint"
                                       tooltip-placement="top" button-shortcut="ctrl+h"
                                       tooltip="Ctrl+H" ng-click="showHintOrSolution()">
                                        <i class="fa fa-lightbulb-o"
                                           ng-class="solutionEnabled ? 'fa-code' : 'fa-lightbulb-o'"></i>
                                        <span>Hint?</span>
                                    </a>
                                </ul>
                                <!-- ngRepeat: message in messages -->
                            </div>
                        </div>
                    </div>
                </aside>
                
                <section class="exercise--content">
                    <ul class="content--tab mono">
                        <li>
                            <a href="" class="active">
                                <i class="fa fa-code" aria-hidden="true"></i> Code
                                editor
                            </a>
                        </li>
                        <li><a class="" href="../Testing/Template/C3Q1py.php"><i class="fa fa-television" aria-hidden="true"></i> Visual Debug</a>
                    </ul>
                    <div id="content--top" style="height: 600px"></div>
                    <div class="content--tab-buttons">
                        
                        <a class="exercise--reset no-link-style" href=""><i class="fa fa-undo"></i></a>
                        <button data-onboarding="codeEditor" onclick="showHint(this.value)" class="btn btn-small btn-inverse"">Execute Code</button></div>
                                                                                                                              
                      
                                               
                        </form>
                                                 
 
 
                                 
                    <div class="content--resizer"></div>

                    <div id="content--bottom">
                        <ul class="content--tab mono">
                            <li><a class="active" href="#">Compiler</a></li>

                        </ul>

                    </div>


                </section>
            </div>
            <comments exercise="exercise"></comments>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js"
            type="text/javascript"></script>
    <script type="text/javascript">                        
        
      var editor = ace.edit("content--top");
		editor.setTheme("ace/theme/twilight");
		editor.getSession().setMode("ace/mode/python");
});                                             
                                                     
                                           
    </script>
    <script type="text/javascript" src="../Testing/js/sendAce.js"></script>
                                            
    <script type="text/javascript">

    </script>
</body>
</html>