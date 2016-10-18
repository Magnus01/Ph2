/*
 * PROBLEM:
 * Create a function main that takes an array of OperatorTokens and numbers
 * in postfix notation.
 *
 * F.eks: [2, 4, new OperatorToken("+", "binary")]
 * The function should calculate the result of the given expression and return the correct answer
 *
 * Due to the complexity of this assignment, little care is given to how you've implemented it.
 * As long as your function is able to correctly compute the expressions we hand it, it will pass.
 */
describe("The function main computes the result of a postfix expression", function()
{
    var solution = require("../src/C4Q4.js");
   it("should be defined", function()
   {
        expect(solution.main).toBeDefined();    
   });
    it("should compute the right answer", function()
      {
       expect(solution.main([13, 2, {operator: "*", type: "binary"}])).toBe(26);
       expect(solution.main([2, {operator: "-", type: "sign"}, 14, {operator: "+", type: "binary"}])).toBe(12);
    });

});

