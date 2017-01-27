var editor = ace.edit("Editor");
var t;
var hints;
// setting default python unit testing
var pyUt = "# Student Solution \ndef Qname(something):\n    return something\n\n#Teacher Tests\n\"\"\"" +
    "Hint 1 placeholder (to contain hint) \"\"\"\ndef test_ca(self):\n    self.assertIn(\"return\", string)\n\n\"\"\"" +
    "Hint 2 placeholder (testing result) \"\"\"\ndef test_ra(self):\n    self.assertEqual(Qname(\"hei\"), \"hei\")";

// update section function
function updateSection(section, html){
    // remove tag attribute
    $('#Editor').find('textarea').attr('onkeyup', '');

    t = document.getElementById(section);
    // automatically close all other editor activity
    editor.setValue("");

    // make changes to the editor settings
    editor.getSession().setMode("ace/mode/html");

    // html or text - split paths
    if (html){
        // add this value to the editor
        editor.setValue(t.innerHTML.toString(), 1);

        // set up the stuff, so that the page gets updated live after every change you make to the text editior
        $('#Editor').find('textarea').attr('onkeyup', 't.innerHTML = editor.getValue();');

        /**editor.on('change', function(){
            t.innerHTML = editor.getValue();
        });*/
    } else {
        // add this value to the editor
        editor.setValue(t.innerText, 1);

        // set up the stuff, so that the page gets updated live after every change you make to the text editior
        $('#Editor').find('textarea').attr('onkeyup', 't.innerText = editor.getValue();');

        /**editor.on('change', function(){
            t.innerText = editor.getValue();
        });*/
    }

    // set the focus on the editor
    editor.focus();
}


// click handlers for updating the website live by the use of the current editor
$('#title').on('click', function(){
    updateSection("title", false);
});

$('#tutorial').on('click', function(){
    updateSection("tutorial", true);
});

$('#extitle').on('click', function(){
    updateSection("extitle", false);
});

$('#exdesc').on('click', function(){
    updateSection("exdesc", true);
});



function generateContent(){

    // get content
    var title = JSON.stringify(document.getElementById("title").innerText);
    var tutorial = JSON.stringify(document.getElementById("tutorial").innerHTML);
    var extitle = JSON.stringify(document.getElementById("extitle").innerText);
    var exdesc = JSON.stringify(document.getElementById("exdesc").innerHTML);

    // display the content
    /*alert(title);
    alert(tutorial);
    alert(extitle);
    alert(exdesc);*/

    // regex hints
    processHints();

    // generate content
    var theJson = {
        title: title,
        tutorial: tutorial,
        extitle: extitle,
        exdesc: exdesc,
        unitTesting: pyUt,
        hints: hints
    };

    $.ajax({
        type: "POST",
        url: "export.php",
        data: theJson,
        success: function(result){
            //console.log("worked.");
//            console.log(result)
        }
    });
    $.ajax({
        type: "POST",
        url: "original.php",
        data: theJson,
        success: function(data){
            //console.log("worked.");
//            console.log(result)
        }
    });


    //alert(theJson);
}


function importDBContent(id) {

    $.ajax({
        type: "GET",
        url: "getExercise.php",
        data:{id: id},
        success:function(data) {
            data = JSON.parse(data);
            console.log(data);
            /*if(parseInt(data) != 0) {
             window.location.replace('../generate-content/');
             } else {
             alert(data);
             }*/

            // update the page content
            document.getElementById("title").innerText = data.title;
            document.getElementById("tutorial").innerHTML = data.content;
            document.getElementById("extitle").innerText = data["task title"];
            document.getElementById("exdesc").innerHTML = data["task title"];

            // import unit Testing content into pyUt variable
            //pyUt = data.unitTesting;
        }
    });
}


function importContent(){

    $.getJSON(document.getElementById("title").innerText + ".json", function(data){
        console.log( document.getElementById("title").innerText + ".json");

        // update the page content
        document.getElementById("title").innerText = JSON.parse(data.title);
        document.getElementById("tutorial").innerHTML = JSON.parse(data.tutorial);
        document.getElementById("extitle").innerText = JSON.parse(data.extitle);
        document.getElementById("exdesc").innerHTML = JSON.parse(data.exdesc);

        // import unit Testing content into pyUt variable
        pyUt = data.unitTesting ;

    });

}


function unitTest(){

    // remove tag attribute
    $('#Editor').find('textarea').attr('onkeyup', '');

    // automatically close all other editor activity
    editor.setValue("");

    // make changes to the editor settings
    editor.getSession().setMode("ace/mode/python");


    // add this value to the editor
    editor.setValue(pyUt, 1);

    // update the pyUt
    $('#Editor').find('textarea').attr('onkeyup', 'pyUt = editor.getValue();');

    // set the focus on the editor
    editor.focus();

}


function processHintSystem() {
    // ut = unit test
    // utu = unit test unit

    var utArray = pyUt.split('"""');
    var utdata = {
        solution: "",
        utulist: []
    };

    // EXTRACT INFORMATION
    var length = utArray.length;
    for (var i = length; i > 0; i -= 2) {

        // information hi hi hi
        if (i > 1) {
            var utu = {
                order: (i-1)/2,
                code: utArray.pop(),
                hint: utArray.pop()
            };

            utdata.utulist.push(utu);
        } else {
            utdata.solution = utArray.pop();
        }
    }

    return utdata;
}


function processHints(){
    // regex for extracting hints to an object
//    pyUt = editor.getValue();


    // split into code blocks and non code blocks





    
    var regexresult = pyUt.match(/["]{3}.*["]{3}/g);
console.log(regexresult);
    if (regexresult != null){
        // creating the hints object
        hints = {};

        // set the 0 property to true; since we have at least one hint
        hints[0] = true;

        // passing the regex result to the hints object
        for (var i = 0; i < regexresult.length; i++){
            // removes quotes at the start and end + removes possible whitespace as well
            hints[i+1] = regexresult[i].slice(3, -3).replace(/^\s\s*/, '').replace(/\s\s*$/, '');
        }

        console.log(hints);
    } else {
        hints = {0: false};
    }

}


function execUnitTest(){

    processHints();

    $.ajax({
       type: 'POST',
        url: 'execute_unittest.php',
        data: { pyUnit: pyUt },
        success: function (response) {

            // if it's minus one, we have the right answer, if not; display the correct hint
            if (response == "-1") {
                $('#testResult').html('<blockquote id="hint" style="background: #33cc33; color:white; border-left: 2px solid #33aa33"><i>Hint:</i><br/>'
                    + 'Your answer was correct! Congratulations!!!' + '</blockquote>');
            } else {
                $('#testResult').html('<blockquote id="hint" style="background: #c33; color:white;"><i>Hint:</i><br/>'
                    + hints[parseInt(response)+1] + '</blockquote>');
            }


        }
    });

}


function postToDatabase(){

    // get content
    var title = JSON.stringify(document.getElementById("title").innerText);
    var tutorial = JSON.stringify(document.getElementById("tutorial").innerHTML);
    var extitle = JSON.stringify(document.getElementById("extitle").innerText);
    var exdesc = JSON.stringify(document.getElementById("exdesc").innerHTML);

    // display the content
    /*alert(title);
     alert(tutorial);
     alert(extitle);
     alert(exdesc);*/

    // regex hints
    processHints();

    // generate content
    var theJson = {
        title: title,
        content: tutorial,
        tasktitle: extitle,
        taskdescription: exdesc,
        unitTesting: JSON.stringify(processHintSystem())
    };

    /*$.ajax({
        type: "POST",
        url: "export.php",
        data: theJson,
        success: function(result){
            //console.log("worked.");
//            console.log(result)
        }
    });*/
    $.ajax({
        type: "POST",
        url: "postToDatabase.php",
        data: theJson,
        success: function(data){
            console.log(data);
            //window.location.href = "../gentelella/Course.html";
        }
    });
}


function updateExercise(){

    // get content
    var title = JSON.stringify(document.getElementById("title").innerText);
    var tutorial = JSON.stringify(document.getElementById("tutorial").innerHTML);
    var extitle = JSON.stringify(document.getElementById("extitle").innerText);
    var exdesc = JSON.stringify(document.getElementById("exdesc").innerHTML);

    // regex hints
    processHints();

    // generate content
    var theJson = {
        title: title,
        content: tutorial,
        tasktitle: extitle,
        taskdescription: exdesc,
        unitTesting: pyUt,
        hints: hints
    };

    $.ajax({
        type: "POST",
        url: "updateExercise.php",
        data: theJson,
        success: function(data){
            console.log(data);
            window.location.href = "../gentelella/Course.html";
        }
    });
}