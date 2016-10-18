/**
 * Created by y50-70 on 10/15/2016.
 */

$('#buttonz').click(function() {
    
    var val1 = editor.getValue();
    console.log(val1);
    
    $.ajax({
        type: 'POST',
        url: 'studentAnswer3.php',
        data: { text1: val1 },
        success: function(response) {
            console.log("student solution sent");
            $("#testResult").html(response);
            
        }
    }).then($.ajax({
    
        
    url: "parse3.php",
    success: function(result){
        
    

    }}));
});