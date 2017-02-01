function updateCurrentCourse(php, id) {
    $.ajax({
        type: "POST",
        url: php,
        data:{id: id},
        success:function(data) {
            //alert(data);
            if(parseInt(data) != 0) {
                window.location.replace('../Course.html');
            } else {
                alert(data);
            }
        }
    });
}

function updateCurrentExercise(php, id) {
    $.ajax({
        type: "POST",
        url: php,
        data:{id: id},
        success:function(data) {
            window.location.replace('../generate-content/');
        }
    });
}