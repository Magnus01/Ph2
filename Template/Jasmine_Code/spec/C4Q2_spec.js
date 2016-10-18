 var solution = require("../src/C4Q2.js");

/*
 * PROBLEM:
 * Create a function called 'equate' that has 3 parameters; (operator, num1, num2)
 * The function should return the result of the equation.
 * ex: 2+3 = 5, equate("+", 2, 3)
 * ex: 15*2 = 30, equate("*", 15, 2)
 * Hint: Work on a single operator such as + and make it work before moving on to
 * multiplication, subtraction and division.
 */
describe("Chapter 4 - equate", function()
        {
           

            it("should be defined", function()
                    {
                        expect(solution.equate).toBeDefined();
                     });
            it("2*7 should be 14", function()
                    {
                        expect(solution.equate("*", 2, 7)).toBe(14);
                                });
             it("15-10 should be 5", function()
                 {
                     expect(solution.equate("-", 15, 10)).toBe(5);
                             });
             it("13 + 13 should be 26", function()
                 {
                     expect(solution.equate("+" , 13, 13)).toBe(26);
                             });

        });
            
