        
        
 /*       
function GetSearchItems() {
    var url = '@Url.Action("GetShopSearchResults", "Shop", New With {.area = "Shop"})';
    var data = $("#ShopPane").serialize();
    // Clear container
    $('#shopResultsContainer').html('');
    // Retrieve data from action method
    var jqxhr = $.post(url, data);
    // Handle results
    jqxhr.success(function (result) {
        //alert("ajax success");
        $('#shopResultsContainer').html(result.ViewMarkup);
    });
    jqxhr.error(function () {
        //alert("ajax error");
    });
    jqxhr.complete(function () {
        //alert("ajax complete");
    });

    // Show results container
    $("#shopResultsContainer").slideDown('slow');
}        
       {{"code": "x = 5", "trace": [{"line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": ""}, {"line": 1, "event": "return", "func_name": "<module>", "globals": {"x": 5}, "ordered_globals": ["x"], "stack_to_render": [], "heap": {}, "stdout": ""}]} 
       
      {"code": "x = 5", "trace": [{"line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": ""}, {"line": 1, "event": "return", "func_name": "<module>", "globals": {"x": 5}, "ordered_globals": ["x"], "stack_to_render": [], "heap": {}, "stdout": ""}]}  
        
//var listSumTrace = {"code": "x = 5", "trace": [{"line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": ""}, {"line": 1, "event": "return", "func_name": "<module>", "globals": {"x": 5}, "ordered_globals": ["x"], "stack_to_render": [], "heap": {}, "stdout": ""}]};

//var listSumTrace =  {"code": "x = 5", "trace": [{"line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": ""}, {"line": 1, "event": "return", "func_name": "<module>", "globals": {"x": 5}, "ordered_globals": ["x"], "stack_to_render": [], "heap": {}, "stdout": ""}]};
        
//        var listSumTrace =  { "code": "x = 5\ny = 10", "trace": [ { "line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": "" }, { "line": 2, "event": "step_line", "func_name": "<module>", "globals": { "x": 5 }, "ordered_globals": [ "x" ], "stack_to_render": [], "heap": {}, "stdout": "" }, { "line": 2, "event": "return", "func_name": "<module>", "globals": { "x": 5, "y": 10 }, "ordered_globals": [ "x", "y" ], "stack_to_render": [], "heap": {}, "stdout": "" } ] }
        
        

//        console.log(listSumtrace + "LISTSUMTRACE");
//     var listSumVisualizer = new ExecutionVisualizer('listSumDiv', listSumTrace,
//                                                  {embeddedMode: true,
//                                                   heightChangeCallback: redrawAllVisualizerArrows});

//  function redrawAllVisualizerArrows() {
//    if (listSumVisualizer) listSumVisualizer.redrawConnectors();
    //if (hanoiVisualizer) hanoiVisualizer.redrawConnectors();
   // if (happyVisualizer) happyVisualizer.redrawConnectors();
//  }


  // Call redrawConnectors() on all visualizers whenever the window is resized,
  // since HTML elements might have moved during a resize. The SVG arrows rendered
  // by jsPlumb don't automatically get re-drawn in their new positions unless
  // redrawConnectors() is called.
});//done

console.log("Am I alive?");
$(document).ready(function() {

    $.post("correcCha3pybackup3.php", {action: 'typer'}, function( listSumTrace ) {
    // do something with data, e.g.
   // console.log(data);
       
       // return this.data
        //var x = JSON.stringify(x);
       //   alert(listSumTrace + "data");
      console.log(listSumTrace + "x");
        
//var listSumTrace = {"code": "x = 5", "trace": [{"line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": ""}, {"line": 1, "event": "return", "func_name": "<module>", "globals": {"x": 5}, "ordered_globals": ["x"], "stack_to_render": [], "heap": {}, "stdout": ""}]};

//var listSumTrace =  {"code": "x = 5", "trace": [{"line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": ""}, {"line": 1, "event": "return", "func_name": "<module>", "globals": {"x": 5}, "ordered_globals": ["x"], "stack_to_render": [], "heap": {}, "stdout": ""}]};
        
//        var listSumTrace =  { "code": "x = 5\ny = 10", "trace": [ { "line": 1, "event": "step_line", "func_name": "<module>", "globals": {}, "ordered_globals": [], "stack_to_render": [], "heap": {}, "stdout": "" }, { "line": 2, "event": "step_line", "func_name": "<module>", "globals": { "x": 5 }, "ordered_globals": [ "x" ], "stack_to_render": [], "heap": {}, "stdout": "" }, { "line": 2, "event": "return", "func_name": "<module>", "globals": { "x": 5, "y": 10 }, "ordered_globals": [ "x", "y" ], "stack_to_render": [], "heap": {}, "stdout": "" } ] }
        
        

        console.log(listSumtrace + "LISTSUMTRACE");
     var listSumVisualizer = new ExecutionVisualizer('listSumDiv', listSumTrace,
                                                  {embeddedMode: true,
                                                   heightChangeCallback: redrawAllVisualizerArrows});

  function redrawAllVisualizerArrows() {
    if (listSumVisualizer) listSumVisualizer.redrawConnectors();
    //if (hanoiVisualizer) hanoiVisualizer.redrawConnectors();
   // if (happyVisualizer) happyVisualizer.redrawConnectors();
  }


  // Call redrawConnectors() on all visualizers whenever the window is resized,
  // since HTML elements might have moved during a resize. The SVG arrows rendered
  // by jsPlumb don't automatically get re-drawn in their new positions unless
  // redrawConnectors() is called.
  $(window).resize(redrawAllVisualizerArrows);

  redrawAllVisualizerArrows(); // do it once at the end
});

});
 

