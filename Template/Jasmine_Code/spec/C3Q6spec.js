var calculator = require("../src/C3Q6.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["LA", "Oslo", "Grimstad", "London"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'Pop').andCallThrough();
    });
 
    describe("When using Pop function", function(){
        var something = calculator.Pop.toString();
        console.log(something);
       
        it("should be able take out the last string in an array", function() {
           
            calc.Pop(["LA", "Oslo", "Grimstad", "London"]);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.Pop).toBeDefined();
            console.log(typeof(calc.Pop)+ "function");
 
    });
        it("Check if indexOf was used", function () {
           expect(something).toContain("pop");
        });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.Pop(["LA", "Oslo", "Grimstad", "London"]); 
            expect(calc.Pop).toHaveBeenCalled();
            expect(calc.Pop).toHaveBeenCalledWith(["LA", "Oslo", "Grimstad"]);
             
           
    });
      it("IS IT Popped", function() {
            expect(calc.Pop(["LA", "Oslo", "Grimstad", "London"])).toBe("London");
             
           
    });  

});
});  