/*
* More functionality to add:
*
* */

console.log("TABSPY FUNCTIONING");
//alert("TABSPY FUNCTIONING");
//alert(python_tab_value);


//editor
// function color code and live preview

//For submit
var textarea = $('textarea[name="answer"]');
textarea.hide();

//VIEW variable
var view= $('#view');
var editor = ace.edit("fixed");
// adding the first text to the editor                                                      look there    ======>
// var EditorValue = "<script type=\"text/javascript\">";                                                                                                                                                                                  </script>";
//editor.setValue(EditorValue, 1);

// extracting the answer
// var currentAnswer = editor.getValue();
// console.log(currentAnswer);
// evaluating the answer
// eval(currentAnswer);
// console.log("The answer with your current function is: " + adding(2,3));

editor.setHighlightActiveLine(false);
editor.getSession().setUseWrapMode(true);
editor.setTheme("ace/theme/twilight");
editor.getSession().setMode("ace/mode/python"); //works for JS

//VIEW function
// editor.getSession().on('change', function () {
// view.contents().find('body').html(editor.getSession().getValue());
// });









// setting initial starting stat (html in this case)
var fromtab = 'python';
$( '#pythonTab' ).css( 'background-color', 'red');
//editor.setValue(python_tab_value, 1);
editor.focus();


function changeTabs(totab){

    // Storing current value
    switch(fromtab){
        case 'html':
            html_tab_value = editor.getValue();
            $( '#htmlTab' ).css( 'background-color', 'rgb(151,0,51)');
            break;
        case 'css':
            css_tab_value = editor.getValue();
            $( '#cssTab' ).css( 'background-color', 'rgb(151,0,51)');
            break;
        case 'js':
            js_tab_value = editor.getValue();
            $( '#jsTab' ).css( 'background-color', 'rgb(151,0,51)');
            break;
        case 'python':
            python_tab_value = editor.getValue();
            $( '#pythonTab' ).css( 'background-color', 'rgb(151,0,51)');
            break;
    }

    // Setting new value (and currently selected tab)
    switch(totab){
        case 'html':
			editor.getSession().setMode("ace/mode/html");
            editor.setValue(html_tab_value, 1);
			
			
			view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(editor.getSession().getValue()+"<script>"+js_tab_value+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>");
			
			
            fromtab = 'html';
            $( '#htmlTab' ).css( 'background-color', 'red');
            break;
        case 'css':
		editor.getSession().setMode("ace/mode/css");
            editor.setValue(css_tab_value, 1);
			
			view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+js_tab_value+"</script><style>"+editor.getSession().getValue()+"</style>") +
						"></iframe>");
			
            fromtab = 'css';
            $( '#cssTab' ).css( 'background-color', 'red');
            break;
        case 'js':
		editor.getSession().setMode("ace/mode/javascript");
            editor.setValue(js_tab_value, 1);
			
			view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" +
						"data:text/html," + encodeURIComponent(html_tab_value+"<script>"+editor.getSession().getValue()+"</script><style>"+css_tab_value+"</style>") +
						"></iframe>");
            fromtab = 'js';
            $( '#jsTab' ).css( 'background-color', 'red');
            break;
        case 'python':
		editor.getSession().setMode("ace/mode/python");
            editor.setValue(python_tab_value, 1);
			
			//view.contents().find('body').html("<iframe style=\"height: 100%;width: 100%; background-color: white;\" src=" + encodeURIComponent(editor.getSession().getValue()) + "></iframe>");
            fromtab = 'python';
            $( '#pythonTab' ).css( 'background-color', 'red');
            break;
    }
    editor.focus();
}