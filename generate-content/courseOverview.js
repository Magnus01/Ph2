// DATABASE FETCHING
// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
var jqxhr = $.get( "../course2.php", function(data) {

    data = JSON.parse(data);
    console.log(data);

    // render exercises to the DOM
    for (var i = 0; i < data.length; i++) {
        console.log(data[i]);
        document.getElementById('courseCatalog').appendChild(
            renderCourse(
                data.title,
                "../generate-content/"
            )
        );
    }
})
    .done(function() {
        //alert( "second success" );
    })
    .fail(function() {
        alert( "error" );
    })
    .always(function() {
        //alert( "finished" );
    });


function renderCourse(title, link) {

    //  NODES
    var exercise = document.createElement('div');
    exercise.setAttribute('class', 'col-sm-6');

    var tag = document.createElement('a');
    tag.setAttribute('href', link);

    var block = document.createElement('div');
    block.setAttribute('class', 'col-sm-6');

    var span = document.createElement('span');
    span.innerText = title;

    var image = document.createElement('img');
    image.setAttribute('alt', 'Intro to Python for Data Science');
    image.setAttribute('src', './images/AAEAAQAAAAAAAAQFAAAAJGQ4ZjEwMzdmLWY0N2QtNDdkNy04NTlhLTM0NWFjZmM3MmQzYQ.png');

    // CONNECT
    exercise.appendChild(tag);
    block.appendChild(span);
    block.appendChild(image);
    exercise.appendChild(block);

    return exercise;
}

