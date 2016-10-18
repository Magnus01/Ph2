var calculator = require("../src/test.js");


// chapter 4 - question 4
describe("Chapter 4 - task b", function ()
{  
    it("should return the correct answer", function ()
            
    {
        console.log(calculator.equate("-",2,2));
        expect(calculator.equate("+",2,2)).toBe(4);
    });
});