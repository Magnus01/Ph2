/**
 * Created by y50-70 on 9/17/2016.
 */
function returnHint(reportPath){
    $.ajax(reportPath, {
        success: function(data){
            console.log(data);
            var hint = '<strong>' + ($(data).find('failure').parent().first().attr('name') + '</strong> ' +  $(data).find('failure').attr('message'));
            console.log(hint);
            // setting the return value thingy
            // document.getElementById('fixed').style.width = '50%';
            document.getElementById('testResult').innerHTML = '<blockquote id="hint" style="background: #c33; color:white;"><i>Hint:</i><br/>' + hint + '</blockquote>';
            return ($(data).find('failure').parent().first().attr('name') + ' ' +  $(data).find('failure').attr('message'));
        }
    });
}