<?php
session_start();
?>

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

    <link rel="stylesheet" type="text/css" href="/css/css_v3/normalize.css">
    <script src="../js/jquery.min.js"></script>

    <script type="text/javascript" src="/js/jsPy_v3/d3.v2.min.js"></script>
    <script type="text/javascript" src="/js/jsPy_v3/jquery-1.8.2.min.js"></script>

    <script type="text/javascript" src="/js/jsPy_v3/jquery.ba-bbq.min.js"></script> <!-- for handling back button and URL hashes -->
    <script type="text/javascript" src="/js/jsPy_v3/jquery.jsPlumb-1.3.10-all-min.js "></script> <!-- for rendering SVG connectors
                                                                                      DO NOT UPGRADE ABOVE 1.3.10 OR ELSE BREAKAGE WILL OCCUR -->
    <script type="text/javascript" src="/js/jsPy_v3/jquery-ui-1.8.24.custom.min.js"></script> <!-- for sliders and other UI elements -->
    <link type="text/css" href="/css/css_v3/ui-lightness/jquery-ui-1.8.24.custom.css" rel="stylesheet" />

    <link type="text/css" href="/css/css_v3/basic.css" rel="stylesheet" />

    <script src="../js/loadContent.js"></script>

    <!-- Python Tutor frontend code and styles -->
    <script type="text/javascript" src="/js/jsPy_v3/pytutor.js"></script>
    <link rel="stylesheet" href="/css/css_v3/pytutor.css"/>

    <link rel="stylesheet" href="style.css"/>

    <!-- Mathquill -->
    <link rel="stylesheet" href="../js/mathquill-0.10.1/mathquill.css">

</head>


<body>

    <!-- NAVIGATION START -->
    <section id="navigation" class="bg-navigation">
        <div class="clearfix">
            <a class="navbar--title" href="/">
                <div class="logo"></div>
                <h1 class="logo-title">Sci-code</h1>
            </a>
            <div class="navigation--buttons-center"
                 data-onboarding="button-center">
                <h5 style="color: white">EXERCISE EDITOR</h5>

            </div>

            <!-- ngIf: user -->
            <div class="navigation--buttons-right">
                <a class="btn btn-primary btn-small" href="/Course.html">EXIT</a>
            </div>
            <!-- end ngIf: user -->
        </div>
    </section>
    <!-- NAVIGATION END -->



    <div class="exercise-area">
        <div id="render-view">

            <!-- CONTENT START -->
            <aside id="sidebar" class="exercise--sidebar">
                <div class="exercise--sidebar-content">
                    <div data-onboarding="assignment"
                         class="exercise--assignment exercise--typography">
                        <!-- TITLE -->
                        <h3 id="title" class="exercise--title editable-content" ng-bind-html="exercise.title">
                            Title
                        </h3>

                        <skills-tooltip skills="exercise.skills" xp="exercise.current_xp"
                                        hint="true" solution="true">

                            <!-- ngIf: shown -->
                            <div ng-if="shown" class="skills-tooltip" tooltip-placement="right"
                                 tooltip="Completing this exercise grants 100 XP to
                                 &quot;Python Programming&quot;.
                                 Using a hint or solution lowers the XP you receive."
                                 tooltip-append-to-body="true">
                                Points 1/10
                            </div>
                            <!-- end ngIf: shown -->
                        </skills-tooltip>


                        <!-- TUTORIAL START -->
<div id="tutorial" ng-bind-html="exercise.assignment" ng-model="exercise.assignment" mathjax=""
class="ng-pristine ng-untouched ng-valid editable-content">
<p>
    Example of html paragraph.
</p>

<h3>
    <span id="problem">ax^2+bx+c=0</span>
</h3>
<br>

<pre class="prettyprint lang-python"><code>#Example of code block

string = "hello world";
print(string);
</code></pre><br>

<p>
    Just click on what you want to edit, and then you edit it.
</p>
</div>
                        <!-- TUTORIAL END -->
                    </div>

                    <!-- QUESTION END -->
                    <div class="exercise--instructions-title">
                        <h4 id="extitle" class="editable-content">
                            Exercise Title
                        </h4>
                    </div>

                    <div id="exdesc" data-onboarding="instructions" class="exercise--instructions exercise--typography editable-content">
                        ... task description
                    </div>
                </div>
            </aside>


            <!-- ANSWER AND RESULT AREA -->
            <section id="tabs" class="exercise--content">
                <ul class="content--tab mono">
                    <li>
                        <a id="EditorTab" href="#Editor" class="active">
                            <i class="fa fa-code" aria-hidden="true"></i> Code Editor
                        </a>
                    </li>
                    <li >
                        <a id="VisualDebugTab"  href="#VisualDebug">
                            <i class="fa fa-television" aria-hidden="true"></i> Visualizer
                        </a>
                    </li>
                </ul>
                <div id="Editor" style="height:600px"></div>
                <div id="VisualDebug">

                </div>
                <div class="content--tab-buttons">


                    <button data-onboarding="codeEditor" class="btn btn-md btn-inverse editable-content" onclick="unitTest()">
                        Edit Unit Test
                    </button>

                    <?php
                    if ($_SESSION['Exercise_id'] > 0) {
                        // edit
                        echo '<button data-onboarding="codeEditor" class="btn btn-md btn-inverse" onclick="updateExercise()">DONE</button>';
                    } else {
                        // new exercise
                        echo '<button data-onboarding="codeEditor" class="btn btn-md btn-inverse" onclick="postToDatabase()">DONE</button>';
                    }
                    ?>
                    <!--<button data-onboarding="codeEditor" class="btn btn-md btn-inverse" onclick="importContent()">
                        Import JSON
                    </button>
                    <button data-onboarding="codeEditor" class="btn btn-md btn-inverse" onclick="execUnitTest()">
                        Execute Unit Test
                    </button>
                    <button data-onboarding="codeEditor" class="btn btn-md btn-inverse" onclick="window.open('preview.html', '_blank');">
                        Student Preview
                    </button>-->
                </div>





                <div id="testResult"></div>
            </section>
        </div>
    </div>
    <!-- CONTENT END -->



    <!-- SCRIPTS START -->
    <script src="../js/test.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/Interactive-eliasit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js" type="text/javascript"></script>
    <script src="../js/mathquill-0.10.1/mathquill.js"></script>
    <script>
        var MQ = MathQuill.getInterface(2);
        var problemSpan = document.getElementById('problem')
        var problemSpan = document.getElementById('problem');
        MQ.StaticMath(problemSpan);
    </script>
    <script>

    </script>
    <script type="text/javascript">
        var editor = ace.edit("Editor");
        editor.setTheme("ace/theme/twilight");
        editor.getSession().setMode("ace/mode/python");
    </script>
    <script type="text/javascript" src="../js/sendAce.js"></script>
    <!-- GENERATE SCRIPT -->
    <script src="generate.js"></script>
    <!-- Code Highlighter -->
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=desert"></script>
    <!-- SCRIPTS END -->


    <!-- PHP: GENERATE CONTENT IF EXERCISE VARIABLE IS DIFFERENT THAN 0 -->
    <?php
        echo "<script>";

        if ($_SESSION['Exercise_id'] > 0) {
            // edit
            echo "importDBContent(" . $_SESSION['Exercise_id'] . ")('done');";
        } else {
            // new exercise
            // NO NEED TO IMPORT; JUST CHILLAX
        }

        echo "</script>";

        echo "tihars toenors etnaosier tnaoisre n";
    ?>


</body>
</html>