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
        alert(result);
        switch(parseInt(result)){
            case 0:
                $("#testResult").html("Check the first test");
                break;
            case 1:
                $("#testResult").html("Check the 2nd test");
                break;
            case 2:
                $("#testResult").html("Check the 3rd test");
                break;
            default:
                $("#testResult").html("Congratulations. No mistakes!");
                break;
        }
    }}));
});



                                  
