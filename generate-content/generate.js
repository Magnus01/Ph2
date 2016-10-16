function generateContent(){

    // get content
    var title = JSON.stringify(document.getElementById("title").innerText);
    var tutorial = JSON.stringify(document.getElementById("tutorial").innerHTML);
    var extitle = JSON.stringify(document.getElementById("extitle").innerHTML);
    var exdesc = JSON.stringify(document.getElementById("exdesc").innerHTML);

    // display the content
    alert(title);
    alert(tutorial);
    alert(extitle);
    alert(exdesc);

    // generate content
    var theJson = {
        "title": title,
        "tutorial": tutorial,
        "extitle": extitle,
        "exdesc": exdesc
    };

    alert(theJson);

}