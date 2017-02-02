var jqxhr = $.get( "course3.php", function(data) {

    data = JSON.parse(data);
//    data = JSON.stringify(data);
//    data2 = {hint, test};
    var hint = [];
    var test = [];
 for (var i = 0; i < data.unittest.length; i++) {
//        console.log(data.unittest[i]);
//        data.unittest[i].hint;
        hint.push(data.unittest[i].hint);
        test.push(data.unittest[i].code);
   
    }
    console.log(hint[1]);
    
      $.ajax({
        type: "POST",
        url: "export.php",
        data: hint,
        success: function(result){
           alert("worked.");
//            console.log(result)
        }
    });
})
    
        .done(function() {
        alert( "second success" );
    })
//
//       for (var i = 0; i < data.unittest.length; i++) {
//        alert(data.unittest[i]);
//    }
//    

//    .done(function() {
//        alert( "second success" );
//    })
//    .fail(function() {
//        alert( "error" );
//    })
//    .always(function() {
//        //alert( "finished" );
//    });
//
//// Perform other work here ...
//
//// Set another completion function for the request above
//jqxhr.always(function() {
//    //alert( "second finished" );
//});





