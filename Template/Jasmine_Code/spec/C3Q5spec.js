var calculator = require("../src/C3Q5.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(["4", "5", "2"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'pushToArray').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        
        
        it("Is it Defined??", function() {
            
            expect(calc.pushToArray).toBeDefined();
            console.log(typeof(calc.pushToArray)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.pushToArray(["4", "5", "2"]); 
            expect(calc.pushToArray).toHaveBeenCalled();
            expect(calc.pushToArray).toHaveBeenCalledWith(["4", "5", "2"]);
             
           
    });
      it("Does it remove operators?", function() {
          
            expect(calc.pushToArray(["4", "5", "2"])).toEqual([4, 5]);
             
           
    });  

});
});