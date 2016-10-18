var calculator = require("../src/C3Q1.js");

describe("MathUtils", function() {
    
 
    /*beforeEach(function() {
      
        calc = new MathUtils(["4", "+", "5", "*", "2"]);
   
        spyOn(calc, 'MathSolver').andCallThrough();
    });*/
 
    describe("when calc is used to peform basic math operations", function(){
        var MathSolverStr = calculator.MathSolver.toString().replace(/(\r\n|\n|\r)/gm,"").replace(/ /g,'');
        
        /*it("Is your function named MathSolver", function() {
            
            expect(calc.MathSolver).toBeDefined();
        });
        
        it("Is your function named MathSolver", function() {
            calc.MathSolver(["4", "+", "5", "*", "2"]); 
            expect(calc.MathSolver).toHaveBeenCalled();
            expect(calc.MathSolver).toHaveBeenCalledWith(["4", "+", "5", "*", "2"]);
        });*/
        
        it("Be sure to define a for loop with a varible like this for (var i = 0;", function () {
           expect(MathSolverStr).toContain("for");
        });
        it("How long the for loop should be run needs to be defined like this for (var i = 0; i < infix.length - 1;", function () {
           expect(MathSolverStr).toContain("infix.length")
        });
        it("Remember to make the varible increase in value like this for (var i = 0; i < array.length - 1; i++) this completes the for loop", function () {
           expect(MathSolverStr).toContain("++")
        });
        
        it("Each index of the input array need to be defined like this var something = infix[i] i is the for loop variable", function() {
           expect(MathSolverStr).toContain("infix[");
        });
        
        it("Your if stetment needs to check wther the input is a number or not using the isNumeric() function like this: if (isNumeric(token) == true){whatever code tou wish to excute if the input is a number}", function() {
            expect(MathSolverStr).toContain("if(isNumeric(");
        });
        
        it("If the input is a number deturmined by the isNumeric and the if statment you need to push it onto the postfixStack like this: postfixStack.push(Number(token)) token is the name of each index of the input array", function() {
            expect(MathSolverStr).toContain("postfixStack.push(Number(");
        });
       
        /*it("Your answer is wrong", function() {
            expect(calc.MathSolver(["4", "+", "5", "*", "2"])).toEqual([4, 5, 2]);
        }); */ 
        
});
});