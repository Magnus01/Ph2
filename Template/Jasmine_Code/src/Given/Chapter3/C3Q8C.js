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
            if("^/*+-".indexOf(token) !== -1){
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^/*+-".indexOf(o2) !== -1 && operators[o1].precedence <= operators[o2].precedence){
                    var outputpop = operatorStack.pop();
                    postfixStack.push(outputpop);
                    o2 = operatorStack[operatorStack.length - 1];
                };
                
                operatorStack.push(o1);
            };
        };
             
    
        

    /*return operatorStack;*/
    return postfixStack;
    };

document.getElementById("demo").innerHTML = MathSolver(["4", "+", "5", "*", "2", "-", "5"]);
