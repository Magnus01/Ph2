//live preview
//alert("running js/taskbar.js ...");
editor.getSession().on('change', function () {

    switch(fromtab) {
        case 'html':
            view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
                "data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
                "></iframe>");

        case 'css':
            view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
                "data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
                "></iframe>");
                break;

        case 'js':
            view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
                "data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
                "></iframe>");
                break;
        default:
            view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
                "data:text/html," + encodeURIComponent(html_tab_value+"<script>"+js_tab_value+"</script><style>"+css_tab_value+"</style>") +
                "></iframe>");
                break;
    }
});
console.log(fromtab);
																
		



	
	
//alert("coca");

$('#submit1').on('click', function() {
    textarea.val(editor.getSession().getValue());//alert("héhaaaa");
});

//For download
var textarea1 = $('textarea[name="answerDLtest"]'); //textarea1.hide();
textarea1.hide();

$('#download').on('click', function() {
    textarea1.val(editor.getSession().getValue());
    //alert("hého");
});






function hide() {
    var txt = document.getElementById('fixed');var submit = document.getElementById('submit1');var hide = document.getElementById('hide');
    var view = document.getElementById('view');var menu = document.getElementById('menu');
    var download = document.getElementById('download');
    var yt = document.getElementById('YTHint');var hint = document.getElementById('hint');
    var hint1 = $('blockquote[id="hint"]'); var hint2 = $('blockquote[id="hintRight"]');
    //alert(hide); console.log("coucou" + hide);
    //alert("caca" + txt.offsetHeight + "  hide " + hide.style.bottom);

    if (txt.offsetHeight != 2) {
        document.getElementById( 'hide' ).innerText = 'Show';
        hint1.hide();hint2.hide();
        submit.style.bottom = '0';download.style.bottom = '0';
        hide.style.bottom = '0';menu.style.bottom = '0';

        txt.style.height = '0';view.style.height = '0';
        yt.style.height = '0';
    }
    else {
        document.getElementById( 'hide' ).innerText = 'Hide';
        hint1.show();hint2.show();  hide.style.bottom = '30%'; download.style.bottom = '30%';
        submit.style.bottom = '30%';menu.style.bottom = '30%';
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
