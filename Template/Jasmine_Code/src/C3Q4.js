
var postfixStack = [];
var operatorStack = [];

var infix= ["2", "+", "2"];


var isNumeric = function(token){
    return !isNaN(parseFloat(token)) && isFinite(token);
}

function MathSolver(){
    
        this.infixToPostfix = function(infix) {
        var operatorStack = [];
            
        var operators = {
            "^": {
                precedence: 4,
                associativity: "Right"
            },
            "/": {
                precedence: 3,
                associativity: "Left"
            },
            "*": {
                precedence: 3,
                associativity: "Left"
            },
            "+": {
                precedence: 2,
                associativity: "Left"
            },
            "-": {
                precedence: 2,
                associativity: "Left"
            }
        }
        
        
        for (var i = 0; i < infix.length; i++) {
            var token = infix[i];
            if(isNumeric(token)) {
                postfixStack.push(Number(token));
            }
             else if("^*/+-".indexOf(token) !== -1)
                 
               {
                var o1 = token;
                var o2 = operatorStack[operatorStack.length - 1];
                while("^*/+-".indexOf(o2) !== -1 && ((operators[o1].associativity === "Left" && operators[o1].precedence <= operators[o2].precedence)))
                {
                    var outputPop = operatorStack.pop();
                    //postfixStack.push(new operatorToken(outputPop,"binary"));
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
this.printStack = function() {
                return postfixStack;
            }
    }
        
}

function run()
    {
        postfixStack = [];
        var ourExpression = infix;
        var ms  = new MathSolver();
        ms.infixToPostfix(ourExpression);
        return postfixStack;
    }
run();

//input PHP STUDENT SOLUTION ABOVE
//KEEP TEMPLATE BELOW
exports.printStack = function() {
    run();
    return postfixStack;
}