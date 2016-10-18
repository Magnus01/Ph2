var equate = function(token, num1, num2)
{
    if (token == "+"){
        return num1+ num2;
    }
    else if(token == "-"){
        return num1 - num2;
    }
    else if(token == "*"){

        return num1 * num2;
    }
    else if(token == "/"){
        return num1/num2;
    }
    else{
        return 0;
    }

 }

// this returns the function
// when grabbing result in spec file do following
//var solution = require("../src/test.js");
// var expected_result = solution.equate("+", 2, 5);
// expect(expected_result).toBe(7);
exports.equate = equate;