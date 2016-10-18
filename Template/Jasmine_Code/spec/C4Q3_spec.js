// require
var calculator = require("../src/C4Q3.js");

/*
 * PROBLEM:
 * Create a function called 'countOperators' that counts and returns the number of OperatorTokens in the list.
 * The list given can include both numbers and OperatorTokens.
 * ex. [1, 2, new OperatorToken("+", "binary")] - function should output 1.
 * ex. [5, 2, 4, new OperatorToken("*", "binary"), new OperatorToken("+", "binary")] - function should output 2.
 *
 * hint: function isNaN - look it up.
 */
OperatorToken = function(operator, type){
    this.operator = operator;
    this.type = type;
}

// chapter 4 - question 4
describe("Chapter 4 Task 4", function () {  
    it("should count the numbers of operators in the given stack", function () {
        var test1 = [new OperatorToken("+", "binary"), 1, 2];
        var test2 = [3, 2, 4, new OperatorToken("*", "binary"), new OperatorToken("+", "binary")];
        expect(calculator.countOperators(test1)).toBe(1);
        expect(calculator.countOperators(test2)).toBe(2);
    });
});