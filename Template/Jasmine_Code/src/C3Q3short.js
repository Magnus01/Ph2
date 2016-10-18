MathUtils = function() {};


var postfixStack = [];


function isNumeric(x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
}

MathUtils.prototype.MathSolver = function (infix) {
    postfixStack = [];
    for (var i = 0; i < infix.length; i++) {
        var token = infix[i];
        if (isNumeric(token) == true) {
            postfixStack.push(Number(token));          
        } 
    } 
    return postfixStack;
}


//Everything from here on is manipulating student solution (some parts require copying student solution to within a function)
//to fit with Jasmine
exports.MathUtils = function (){
    return MathUtils;
};



exports.isNumeric = isNumeric

MathSolver = function (infix) {
    postfixStack = [];
    for (var i = 0; i < infix.length; i++) {
        var token = infix[i];
        if (isNumeric(token) == true) {
            postfixStack.push(Number(token));          
        } 
    } 
    return postfixStack;
};

postfixStack1 = function() {
    var postfixStack = [];
    };

exports.MathSolver = MathSolver

exports.postfixStack1 = postfixStack1


