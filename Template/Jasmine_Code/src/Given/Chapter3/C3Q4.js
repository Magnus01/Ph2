MathSolver = function(infix){
    
    var postfixStack = [];
    var operatorStack = [];

    postfixStack = [];
    operatorStack = [];
    
    function isNumeric(x) {
        return !isNaN(parseFloat(x)) && isFinite(x);
    }
    
    var operators = {
        "^": {
            precedence: 4,
            },
        "/": {
            precedence: 3,
        },
        "*": {
            precedence: 3,
        },
        "+": {
            precedence: 2,
            },
        "-": {
            precedence: 2,
            }
        };
    
    
    
    return postfixStack;
};

document.getElementById("demo").innerHTML = MathSolver(["4", "+", "5", "*", "2", "-", "5"]);