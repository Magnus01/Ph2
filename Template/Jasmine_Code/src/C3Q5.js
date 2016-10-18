MathUtils = function() {};



var postfixStack = [];


MathUtils.prototype.pushToArray = function(array) {
    for(var i = 0; i < array.length; i++){
        var token = array[i];
        postfixStack.push(token);
    };
    return postfixStack;
}; 



//STUDENT INPUT PHP SOLUTION ABOVE
//KEEP THE TEMPLATE BELOW
exports.MathUtils = function () {
    return MathUtils;
};

