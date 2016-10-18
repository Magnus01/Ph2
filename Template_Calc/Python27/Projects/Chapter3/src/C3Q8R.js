MathSolver = function(infix){
    var postfixStack = [];
var operatorStack = [];

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
        }
        
        for (var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if("^*/+-".indexOf(token) !== -1)
               {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^/*+-".indexOf(o2) !== -1 && operators[o1].precedence <= operators[o2].precedence)
                {
                    var outputPop = operatorStack.pop();
                    postfixStack.push(outputPop);
                    o2 = operatorStack[operatorStack.length - 1];
                }
                operatorStack.push(o1);
            }
        };
             
    
        while(operatorStack.length > 0) 
        {
            var outputPop = operatorStack.pop();
            postfixStack.push(outputPop);    
        }

    return postfixStack;
    };

MathSolver = function(infix){
    
    postfixStack = [];
    operatorStack = [];
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
        }
        
        for (var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if("^*/+-".indexOf(token) !== -1)
               {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^/*+-".indexOf(o2) !== -1 && operators[o1].precedence <= operators[o2].precedence)
                {
                    var outputPop = operatorStack.pop();
                    postfixStack.push(outputPop);
                    o2 = operatorStack[operatorStack.length - 1];
                }
                operatorStack.push(o1);
            }
        };
             
    
        while(operatorStack.length > 0) 
        {
            var outputPop = operatorStack.pop();
            postfixStack.push(outputPop);    
        }

    return postfixStack;
    };

exports.MathSolver = MathSolver;

exports.MathUtils = function (){
    return MathUtils();
};