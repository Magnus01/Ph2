// import JSON
var course;

$.getJSON( "course.json", function( data ) {
    course = data;
    console.log(course);
});

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

var exeditLink, extitle, exupdated, exdesc;
exeditLink = "#";
extitle = "title";
exupdated = "updated";
exdesc = "description";

var exercise = document.createElement('li');

var block = document.createElement('div');
block.setAttribute('class', 'block');

// TAGS
var tags = document.createElement('div');
tags.setAttribute('class', 'tags');

var tag = document.createElement('a');
tag.setAttribute('href', exeditLink);
tag.setAttribute('class', 'tag');

var tagtext = document.createElement('span');
tagtext.innerText = 'Edit';

tag.appendChild(tagtext);
tags.appendChild(tag);
block.appendChild(tags);

var blockContent = document.createElement('class', 'block_content');

// TITLE
var title = document.createElement('h2');
var titletext = document.createElement('a');
titletext.innerText = extitle;

title.appendChild(titletext);
blockContent.appendChild(title);

// UPDATE TIME
var update = document.createElement('div');
var updatetext = document.createElement('span');
updatetext.innerText = exupdated;

update.appendChild(updatetext);
blockContent.appendChild(update);

// DESCRIPTION
var description = document.createElement('p');
description.setAttribute('class', 'excerpt');
description.innerText = exdesc;

blockContent.appendChild(description);
block.appendChild(blockContent);
exercise.appendChild(block);