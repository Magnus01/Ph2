var calculator = require("../src/C3Q3.js");

var sol = require("../src/C3Q3.js");





describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["4", "+", "5", "*", "2"]);
   
        spyOn(calc, 'MathSolver').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        it("should be able to return ONLY numbers", function() {
           
            calc.MathSolver(["4", "+", "5", "*", "2"]);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.MathSolver).toBeDefined();
          
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.MathSolver(["4", "+", "5", "*", "2"]); 
            expect(calc.MathSolver).toHaveBeenCalled();
            expect(calc.MathSolver).toHaveBeenCalledWith(["4", "+", "5", "*", "2"]);
             
           
    });
      it("Does it remove operators?", function() {
            expect(calc.MathSolver(["4", "+", "5", "*", "2"])).toEqual([4, 5, 2]);
               
           
    });  
        
it("Does the MathSolver Contain the correct essential code?", function() {
            
           var MathSolverStr = sol.MathSolver.toString().replace(/(\r\n|\n|\r)/gm,"").replace(/ /g,'');
           

           expect(MathSolverStr).toContain("for(vari=0;i<infix.length;i++)");       
    expect(MathSolverStr).toContain("vartoken=infix[i];"); 
     expect(MathSolverStr).toContain("if(isNumeric(token)==true)"); 
    expect(MathSolverStr).toContain("postfixStack.push(Number(token)"); 
       
         }); 
        


});
});


