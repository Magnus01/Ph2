$('#buttonz').click(function() {   

    var val1 = editor.getValue(); 
    console.log(val1);
    $.ajax({
        type: 'POST',
        url: 'studentAnswer.php',
        data: { text1: val1 },
        success: function(response) {
            console.log("student solution sent")}
        })
    });

  