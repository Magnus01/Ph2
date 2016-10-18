/**
 *  Interactive-eliasit.js - used after jquery, jquery-ui libs
 *  
 *  ajax-operations, animations, switches
 *  
 */

  $( function() {
    $( "#tabs" ).tabs();
  } );
  $( "#executeBtn" ).click(function() {
	  $("#sidebar").hide("500", "linear", function(){
		  $("#tabs").css("width", "99.9%");
	  });
	 
	  $("#executeBtn").addClass("active");
	  $("#EditorTab").removeClass("active");
	});
  
  $( "#EditorTab" ).click(function() {
	  $("#sidebar").show("500", "linear");
	  $("#tabs").css("width", "60%");
	  $("#EditorTab").addClass("active");
	  $("#executeBtn").removeClass("active");
	});
  
  
  $( "#buttonz" ).click(function() {
	  
	  Session = $(this)
	  Session.removeClass();
	  Session.addClass("btn btn-md btn-primary")
	  Session.parent().children(':eq(2)').html('<i class="fa fa-check-circle"></i> Executed');
	  
	  setTimeout(function(){ 
		 
		  Session.text("Execute Code");
		  Session.removeClass();
		  Session.addClass("btn btn-md btn-inverse")
		  
		
	  
	  }, 1000);
	  
	});