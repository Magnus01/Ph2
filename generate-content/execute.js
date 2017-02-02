//function getHintsAndUnitTests() {
//    return $.ajax({
//        type: 'GET',
//        url: 'getAllUnitTestStatements.php',
//        success: function(data) {
//            // parse json data
//            data = JSON.parse(data);
//
//            // sort data by order
//            data.sort(function(a, b) {
//                return a.order - b.order;
//            });
//
//            // console.log
//            console.log(data);
//
//            // return
//            return data;
//        }
//
//    });
//
//}

function getHints(handleData) {
    return $.ajax({
        type: 'GET',
        url: '../gentelella/course3.php',
        success: function(data) {
            console.log(data + "HELLo");
            data = JSON.parse(data);
            var hints = [];

 for (var i = 0; i < data.unittest.length; i++) {
//        console.log(data.unittest[i]);
//        data.unittest[i].hint;
        hints.push(data.unittest[i].hint);

   
    }
//            console.log(hints[1]);

            return handleData(hints);
        }

    });

}


function getUnitTest(handleData) {
    return $.ajax({
        type: 'GET',
        url: '../gentelella/course3.php',
        success: function(data) {
            
            data = JSON.parse(data);
                var test = [];
 for (var i = 0; i < data.unittest.length; i++) {

        test.push(data.unittest[i].code);
   
    }
//            console.log(handleData(test));

            return handleData(test);
        }

    });

}

function sendUnitTest(){
    getUnitTest(function(output){
        
      $.ajax({
        type: "POST",
        url: "Unit.php",
         data: { Unit: output },
        success: function(result){
           alert(output);
//            console.log(result)
        }
    });
})
    
}
 
function execUnitTest(){
    
    getHints(function(output){
    hints = output;
    console.log(hints[0] + "hints1");
    
    var val1 = editor.getValue();
    console.log(val1, "VALUTE OF ANSWER");
//    hints = pageData.h


    $.ajax({
        type: 'POST',
        url: 'Unit.php',
        data: { text1: val1 },
        success: function(response) {
            // if it's minus one, we have the right answer, if not; display the correct hint
            console.log(response);
            if (response == "-1") {
                $('#testResult').html('<blockquote id="hint" style="background: #33cc33; color:white; border-left: 2px solid #33aa33"><i>Hint:</i><br/>'
                    + 'Your answer was correct! Congratulations!!!' + '</blockquote>');
            } else if (isNaN(response)) {
            $('#testResult').html('<blockquote id="hint" style="background: #c33; color:white; border-left: 2px solid #33aa33"><i>Hint:</i><br/>'
                    + 'Syntax Error' + '</blockquote>');
            }
            else {
                $('#testResult').html('<blockquote id="hint" style="background: #c33; color:white;"><i>Hint:</i><br/>'
                    + hints[parseInt(response)] + '</blockquote>');
            }
        }
    })
});
}



