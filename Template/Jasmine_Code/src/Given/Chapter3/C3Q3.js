MathSolver = function (infix) {
    var postfixStack = [];
    postfixStack = [];
    function isNumeric(x) {
        return !isNaN(parseFloat(x)) && isFinite(x);
    }
    

    return postfixStack;
}

document.getElementById("demo").innerHTML = MathSolver(["4", "+", "5", "*", "2", "-", "5"]);
