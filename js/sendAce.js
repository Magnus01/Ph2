$('#buttonz').click(function() {   

    var val1 = editor.getValue(); 
    console.log(val1);
    $.ajax({
        type: 'POST',
        url: 'C3Q1py.php',
        data: { text1: val1 },
        success: function(response) {
            $('#VisualDebug').html(response);
        }
    });
});
  

                                  
	
	