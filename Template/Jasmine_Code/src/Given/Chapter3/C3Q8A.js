MathSolver = function (infix) {
    
    var postfixStack = [];
    var operatorStack = [];
    
    operatorStack = [];
    postfixStack = [];

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
        
        for ( var i = 0; i < infix.length; i++ ) {
            var token = infix[i];
            
        }
             
    
        

    return operatorStack;
    /*return postfixStack;*/
    };

document.getElementById("demo").innerHTML = MathSolver(["4", "+", "5", "*", "2", "-", "5"]);