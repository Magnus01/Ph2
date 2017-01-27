function getHintsAndUnitTests() {
    return $.ajax({
        type: 'GET',
        url: 'getAllUnitTestStatements.php',
        success: function(data) {
            // parse json data
            data = JSON.parse(data);

            // sort data by order
            data.sort(function(a, b) {
                return a.order - b.order;
            });

            // console.log
            console.log(data);

            // return
            return data;
        }

    });

}





function execUnitTest(){

    var val1 = editor.getValue();
    console.log(val1);

    $.ajax({
        type: 'POST',
        url: '../Template/execute_unittest.php',
        data: { text1: val1 },
        success: function(response) {
            console.log("student solution sent")}
    }).then($.ajax({

    url: "parse.php",
    success: function(result){
            // if it's minus one, we have the right answer, if not; display the correct hint
            if (response == "-1") {
                $('#testResult').html('<blockquote id="hint" style="background: #33cc33; color:white; border-left: 2px solid #33aa33"><i>Hint:</i><br/>'
                    + 'Your answer was correct! Congratulations!!!' + '</blockquote>');
            } else {
                $('#testResult').html('<blockquote id="hint" style="background: #c33; color:white;"><i>Hint:</i><br/>'
                    + hints[parseInt(response)+1] + '</blockquote>');
            }


        }
    })

)}