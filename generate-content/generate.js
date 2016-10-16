var editor = ace.edit("Editor");


// update section function
function updateSection(section, html){

    var t = document.getElementById(section);
    // automatically close all other editor activity
    editor.setValue("");

    // make changes to the editor settings
    editor.getSession().setMode("ace/mode/html");

    // html or text - split paths
    if (html){
        // add this value to the editor
        editor.setValue(t.innerHTML.toString(), 1);

        // set up the stuff, so that the page gets updated live after every change you make to the text editior
        editor.on('change', function(){
            t.innerHTML = editor.getValue();
        });
    } else {
        // add this value to the editor
        editor.setValue(t.innerText, 1);

        // set up the stuff, so that the page gets updated live after every change you make to the text editior
        editor.on('change', function(){
            t.innerText = editor.getValue();
        });
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
    var extitle = JSON.stringify(document.getElementById("extitle").innerHTML);
    var exdesc = JSON.stringify(document.getElementById("exdesc").innerHTML);

    // display the content
    alert(title);
    alert(tutorial);
    alert(extitle);
    alert(exdesc);

    // generate content
    var theJson = {
        "title": title,
        "tutorial": tutorial,
        "extitle": extitle,
        "exdesc": exdesc
    };

    alert(theJson);

}