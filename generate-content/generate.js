var editor = ace.edit("Editor");
var t;
// setting default python unit testing
var pyUt = "# Correct Answer\ndef Qname(something):\n    return something\n\n\n# Unit Test of the Answer\nimport " +
    "unittest\n\nclass UT(unittest.TestCase):\n    \n    \"\"\" Hint 1 placeholder \"\"\"\n    def test_a(self):" +
    "\n        self.assertEqual(Qname(\"hei\"), \"hei\") # Example";

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
    alert(title);
    alert(tutorial);
    alert(extitle);
    alert(exdesc);

    // generate content
    var theJson = {
        title: title,
        tutorial: tutorial,
        extitle: extitle,
        exdesc: exdesc
    };

    $.ajax({
        type: "POST",
        url: "export.php",
        data: theJson,
        success: function(){
            console.log("worked.");
        },
    });


    alert(theJson);
}


function importContent(){
    $.getJSON('default.json', function(data){
        console.log(data.title);

        // update the page content
        document.getElementById("title").innerText = JSON.parse(data.title);
        document.getElementById("tutorial").innerHTML = JSON.parse(data.tutorial);
        document.getElementById("extitle").innerText = JSON.parse(data.extitle);
        document.getElementById("exdesc").innerHTML = JSON.parse(data.exdesc);

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