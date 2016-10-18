/**
 * Created by y50-70 on 10/15/2016.
 */

$('#buttonz').click(function() {

    var val1 = editor.getValue();
    console.log(val1);
    $.ajax({
        type: 'POST',
        url: 'studentAnswer.php',
        data: { text1: val1 },
        success: function(response) {
            console.log("student solution sent")}
    }).then($.ajax({

    url: "parse.php",
    success: function(result){
        //alert(result);
        var hints = pageData.h;
        console.log(hints[1]);
        if (result == "-1"){
            $("#testResult").html("Correct result.");
        } else if (parseInt(result) > Object.keys(hints).length) {
            $("#testResult").html("You have a Syntax Error.");
        } else{
            $("#testResult").html(hints[parseInt(result)]);
        }

    }}));
});



                                  
