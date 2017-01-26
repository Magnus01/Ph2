<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
    
jQuery(function($){
	var $email = $('#email1'), count = 1;
	$('#addemail').click(function(e){
		e.preventDefault();
		var idname = 'email' + (++count);
        var h = "hello";
		$email.parent().append($email.clone().attr({id: idname, name: idname}));
           $email.parent().append('<div class="col-sm-6"><a href=\"h\"><div class="topic image"><span>\ + data</span><img alt="Introduction to R" src="./images/AAEAAQAAAAAAAAQFAAAAJGQ4ZjEwMzdmLWY0N2QtNDdkNy04NTlhLTM0NWFjZmM3MmQzYQ.png"></div></div>')
	});
	
});
</script>
<style type="text/css">
#emails input {
	display: block;
}
</style>
</head>
<body>
<div id="emails">
    
 
    
    
    
    
<input type="text" id="email1" name="email1">
</div>
<a id="addemail" href="#">Add Email Field  </a> 
</body>
</html>