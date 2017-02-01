
console.log("TASKBAR FUNCTIONING");
//alert("TASKBAR py");

$('#submit1').on('click', function() {
//	alert("héhoooooooa");
	
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
        case 'python':
            python_tab_value = editor.getValue();
            
            break;
    }
	//console.log(js_tab_value);
	var answer=python_tab_value;
	
//	alert("answer :" + answer);
    textarea.val(answer);
//    alert("héhaaaa");
	
	
	
	
	
});
function hide() {
    var txt = document.getElementById('fixed');
    var submit = document.getElementById('submit1');
    var hide = document.getElementById('hide');
	var pythonTab = document.getElementById('pythonTab');
    var view = document.getElementById('view');
    var menu = document.getElementById('menu');
    var resetcode = document.getElementById('resetcode');
    var download = document.getElementById('download');
    var yt = document.getElementById('YTHint');var hint = document.getElementById('hint');
    var hint1 = $('blockquote[id="hint"]'); var hint2 = $('blockquote[id="hintRight"]');
    //alert(hide); console.log("coucou" + hide);
    //alert("caca" + txt.offsetHeight + "  hide " + hide.style.bottom);

    if (txt.offsetHeight != 2) {
        document.getElementById( 'hide' ).innerText = 'Show';
        hint1.hide();hint2.hide();
        submit.style.bottom = '0';download.style.bottom = '0';
        hide.style.bottom = '0';
        menu.style.bottom = '0';
        resetcode.style.bottom = '0';
        pythonTab.style.bottom = '0';
        txt.style.height = '0';view.style.height = '0';
        yt.style.height = '0';
    }
    else {
        document.getElementById( 'hide' ).innerText = 'Hide';
        hint1.show();hint2.show();  hide.style.bottom = '30%'; download.style.bottom = '30%';
        submit.style.bottom = '30%';menu.style.bottom = '30%';pythonTab.style.bottom = '30%';resetcode.style.bottom = '30%';
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