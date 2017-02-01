$(document).ready(function(){
     //$('#jsTab').on('click', function() {

    console.log("AMICALLED THREE");
    
    (function loadSrc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        el = document.getElementById("fixed");
        editor = ace.edit(el);
        var output = this.responseText;

       editor.session.setValue(output); 
        //console.log(this.responseText + "THIS RESPONSE TEXT");
        
        console.log("AMICALLED THREEHEHEH");
        console.log(output);
    }
  };
//'' . $Chapath . '/src/' . $Qname . '.js',
  //xhttp.open("GET", "../Tutorial/Jasmine_Code/src/Given/Chapter4/C4Q1.js", true);
    var Chapath = window.location.href.match(/Chapter[0-9]/)[0];
    var Qname =  window.location.href.match(/C[0-9]Q[0-9][ABC]?/)[0];
        console.log(Chapath);
       // var Chapath = "Chapter3";
        //var Qname = "C3Q1";
//        $pathname2 = '' . $Chapath . '/src/' . $Qname . '.txt';
//    var pathname = Chapath +"/src/" + Qname + ".txt";
 var pathname = "Python27/Projects/Chapter3/src/C3Q1py.txt";
   // var pathname = "Python27/Projects/" + Chapath + "/src/"+ Qname +".js";
  // var pathname = "Chapter3/src/C3Q1.js";
    console.log(pathname + "THIS IS ZZ PATHNAME");
    xhttp.open("GET", pathname, true);
                          
          
  xhttp.send();
        
})();
    
   
});   

//.input.split('exports')[0]+'exports';

