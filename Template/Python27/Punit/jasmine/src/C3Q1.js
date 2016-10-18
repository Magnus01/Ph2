MathSolver = function (x){
    function MathSolver(infix) {
    var postfixStack = [];
    
    postfixStack = [];
    
    function isNumeric(x) {
        return !isNaN(parseFloat(x)) && isFinite(x);
    }
    
    for(var i = 0; i < infix.length; i++){
        var token = infix[i];
        
    }
    
    return postfixStack;
}

MathSolver(["4", "+", "5", "*", "2"]);}; 
    exports.MathSolver = MathSolver;