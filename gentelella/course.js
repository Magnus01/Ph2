// import data model
//var course = getCourseInfo('course.json');
var startTime = Date.now();
$.getJSON( "course.json", function(data) {
    console.log(data);

    // render course information to the DOM
    document.getElementById('courseTitle').innerText = data.title;

    // render exercises to the DOM
    for (var i = 0; i < data.exercises.length; i++) {
        console.log(data.exercises[i]);
        document.getElementById('exercises').appendChild(
            renderExercise(
                data.exercises[i].title,
                data.exercises[i].content,
                "http://www.google.com",
                data.exercises[i].creationTimestamp
            )
        );
    }
}).done(function(data) {
    // track the time it takes to load in the model to the view
    console.log("Load/Render time: " + (Date.now()-startTime).toString());
});


/*function getCourseInfo(srcFile) {
    $.getJSON(srcFile, function( data ) {
        console.log(data);
        course = data;
    });
}*/

/*
<li>
    <div class="block">
        <div class="tags">
            <a href="" class="tag">
                <span>Edit</span>
            </a>
        </div>
        <div class="block_content">
            <h2 class="title">
                <a>title</a>
            </h2>
            <div class="byline">
                <span>updated 13 hours ago</span> by <a>Jane Smith</a>
            </div>
            <p class="excerpt">
                description
            </p>
        </div>
    </div>
</li>
*/

function renderExercise(title, description, link, updated) {

// LIST ELEMENT
    var exercise = document.createElement('li');
    var block = document.createElement('div');
    block.setAttribute('class', 'block');

// TAGS
    var tags = document.createElement('div');
    tags.setAttribute('class', 'tags');

    var tag = document.createElement('a');
    tag.setAttribute('href', link);
    tag.setAttribute('class', 'tag');

    var tagtext = document.createElement('span');
    tagtext.innerText = 'Edit';

    tag.appendChild(tagtext);
    tags.appendChild(tag);
    block.appendChild(tags);

    var blockContent = document.createElement('class', 'block_content');

// TITLE
    var exTitle = document.createElement('h2');
    var exTitletext = document.createElement('a');
    exTitletext.innerText = title;

    exTitle.appendChild(exTitletext);
    blockContent.appendChild(exTitle);

// UPDATE TIME
    var update = document.createElement('div');
    var updatetext = document.createElement('span');
    updatetext.innerText = updated;

    update.appendChild(updatetext);
    blockContent.appendChild(update);

// DESCRIPTION
    var exDescription = document.createElement('p');
    exDescription.setAttribute('class', 'excerpt');
    exDescription.innerText = description;

    blockContent.appendChild(exDescription);
    block.appendChild(blockContent);
    exercise.appendChild(block);

    return exercise;
}

