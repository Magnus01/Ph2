// DATABASE FETCHING
// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
var jqxhr = $.get( "../course2.php", function(data) {
    data = JSON.parse(data);
    console.log(data[0]);

    // render exercises to the DOM
    for (var i = 0; i < data.length; i++) {
        document.getElementById('courseCatalog').appendChild(
            renderCourse(
                data[i].title,
                "#", //"../Course.html",
                data[i].id,
                "../updateCourse.php"
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


function renderCourse(title, link, id, php) {

    //  NODES
    var course = document.createElement('div');
    course.setAttribute('class', 'col-sm-6');

    var a_link = document.createElement('a');
    a_link.setAttribute('href', link);
    a_link.setAttribute('onclick', 'updateCurrentCourse(\'' + php + '\', ' + id + ');');

    var block = document.createElement('div');
    block.setAttribute('class', 'col-sm-6');

    var span = document.createElement('span');
    span.innerText = title;

    var image = document.createElement('img');
    image.setAttribute('alt', 'Intro to Python for Data Science');
    image.setAttribute('src', './images/AAEAAQAAAAAAAAQFAAAAJGQ4ZjEwMzdmLWY0N2QtNDdkNy04NTlhLTM0NWFjZmM3MmQzYQ.png');

    // CONNECT
    block.appendChild(span);
    block.appendChild(image);
    course.appendChild(block);
    a_link.appendChild(course);

    return a_link;
}

