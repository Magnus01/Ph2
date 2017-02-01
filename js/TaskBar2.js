

//live preview
//alert("taskbar11");
	
				editor.getSession().on('change', function () {
					
					
					
					
					switch(fromtab) {
						
						case 'html':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(editor.getSession().getValue()+"<script>"+js_tab_value+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>"); break;
						
						case 'css':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+js_tab_value+"</script><style>"+editor.getSession().getValue()+"</style>") +
						"></iframe>"); break;
						
						case 'js':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>"); break;
						
						
					}
																});console.log(fromtab);
																
		

		
		
		editor.on('focus', function () {
					
					
					
					
					switch(fromtab) {
						
						case 'html':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(editor.getSession().getValue()+"<script>"+js_tab_value+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>"); break;
						
						case 'css':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+js_tab_value+"</script><style>"+editor.getSession().getValue()+"</style>") +
						"></iframe>"); break;
						
						case 'js':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>"); break;
						
						
					}
																});
	
	editor.on('blur', function () {
					
					
					
					
					switch(fromtab) {
						
						case 'html':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(editor.getSession().getValue()+"<script>"+js_tab_value+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>"); break;
						
						case 'css':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+js_tab_value+"</script><style>"+editor.getSession().getValue()+"</style>") +
						"></iframe>"); break;
						
						case 'js':
					view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>"); break;
						
						
					}
						});


	
	


$('#submit1').on('click', function() {
	
	
	switch(fromtab){
        case 'html':
            html_tab_value = editor.getValue();
            
            break;
        case 'css':
            css_tab_value = editor.getValue();
            
            break;
        case 'js':
            js_tab_value = editor.getValue();
            
            break;
    }
	//console.log(js_tab_value);
	var answer=js_tab_value;
	
//	alert(answer);
    textarea.val(answer);//alert("héhaaaa");
	
	
	
	
	
});

//For download

var textarea1 = $('textarea[name="answerDLtest"]'); //textarea1.hide();
textarea1.hide();
console.log(textarea1.valueOf());
// alert("0"); 
$('#download').on('click', function() { 
//    alert("2");
	
	
switch(fromtab){
        case 'html':
            html_tab_value = editor.getValue();alert("html");
            
            break;
        case 'css':
            css_tab_value = editor.getValue();alert("css");
            
            break;
        case 'js':
            js_tab_value = editor.getValue();alert("js");
            
            break;
    }
	var HTML = html_tab_value + '<script href="script.js"></script> <link rel="stylesheet" href="style.css">';
	var CSS= css_tab_value; 
	var JS = js_tab_value;
	 alert(HTML);
	 var downloadVar = 'SEPERATEFILE'+HTML+'SEPERATEFILE'+CSS+'SEPERATEFILE'+JS+'SEPERATEFILE';
	 console.log(downloadVar);
    textarea1.val(downloadVar);//console.log(textarea1.valueOf());
   
});

//alert("héhouuuuuuuuuuuuu");




function hide() {
    var txt = document.getElementById('fixed');var submit = document.getElementById('submit1');var hide = document.getElementById('hide');
	var htmlTab = document.getElementById('htmlTab');var menu = document.getElementById('cssTab');var menu = document.getElementById('jsTab');
    var view = document.getElementById('view');var menu = document.getElementById('menu');var resetcode = document.getElementById('resetcode');
    var download = document.getElementById('download');
    var yt = document.getElementById('YTHint');var hint = document.getElementById('hint');
    var hint1 = $('blockquote[id="hint"]'); var hint2 = $('blockquote[id="hintRight"]');
    //alert(hide); console.log("coucou" + hide);
    //alert("caca" + txt.offsetHeight + "  hide " + hide.style.bottom);

    if (txt.offsetHeight != 2) {
        document.getElementById( 'hide' ).innerText = 'Show';
        hint1.hide();hint2.hide();
        submit.style.bottom = '0';download.style.bottom = '0';
        hide.style.bottom = '0';menu.style.bottom = '0';htmlTab.style.bottom = '0';cssTab.style.bottom = '0';jsTab.style.bottom = '0';resetcode.style.bottom = '0';
        txt.style.height = '0';view.style.height = '0';
        yt.style.height = '0';
    }
    else {
        document.getElementById( 'hide' ).innerText = 'Hide';
        hint1.show();hint2.show();  hide.style.bottom = '30%'; download.style.bottom = '30%';
        submit.style.bottom = '30%';menu.style.bottom = '30%';htmlTab.style.bottom = '30%';cssTab.style.bottom = '30%';resetcode.style.bottom = '30%';jsTab.style.bottom = '30%';
        txt.style.height = '100%'; view.style.height = '100%'; yt.style.height = '100%';
    }
}


function menu() {
    var menuHide = $('div[id="menuQuestion"]');

    if (menuHide.is(":visible") ) {
        menuHide.hide();
    }
    else {
        menuHide.show();
    }
}