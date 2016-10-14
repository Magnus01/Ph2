<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HTML</title>
    <style>
        #editor { 
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
    </style>
</head>
<body>
    <div id="editor">
        function foo(items) {
            var x = "All this is syntax highlighted";
            return x;
        }
    </div>
    <script src="http://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode("ace/mode/javascript");
    </script>
</body>
</html>