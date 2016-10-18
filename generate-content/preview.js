/**
 * Created by y50-70 on 10/18/2016.
 */
var editor = ace.edit("Editor");
var pyUt;
var pyUt_test;
var hints;

function importContent(title){

    var filename = title + '.json';

    $.getJSON(title + '.json', function(data){
        console.log(data);
        console.log(data.title);

        // update the page content
        document.getElementById("title").innerText = JSON.parse(data.title);
        document.getElementById("tutorial").innerHTML = JSON.parse(data.tutorial);
        document.getElementById("extitle").innerText = JSON.parse(data.extitle);
        document.getElementById("exdesc").innerHTML = JSON.parse(data.exdesc);

        // import unit Testing content into pyUt variable
        pyUt = data.unitTesting;
        pyUt_test = pyUt.substring(pyUt.search(/import\sunittest/));
        hints = data.hints;
    });
}

function execUnitTest(){

    var py_code = editor.getValue() + "\n\n" + pyUt.substring(pyUt.search(/import\sunittest/));

    $.ajax({
        type: 'POST',
        url: 'execute_unittest.php',
        data: { pyUnit: py_code },
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