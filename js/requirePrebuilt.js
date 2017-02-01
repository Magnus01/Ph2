function loadDoc() {

    Chapath = window.location.href.match(/Chapter[0-9]/)[0];
    Qname = window.location.href.match(/C[0-9]Q[0-9]/)[0];

    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        el = document.getElementById("fixed");
        editor = ace.edit(el);
        editor.session.setValue(this.responseText); 
    }
  };

  //xhttp.open("GET", "../Tutorial/Jasmine_Code/src/Given/Chapter4/C4Q1.js", true);
    var pathname = "../Jasmine_Code/src/Given/" + Chapath + "/" + Qname +".js";
    xhttp.open("GET", pathname, true);

  xhttp.send();
} 
//function loadDoc('Chapter4', 'C4Q1');

