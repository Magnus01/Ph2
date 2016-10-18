var calculator = require("../src/C2Q2.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(3, 5);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'multiply').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        it("should be able to calculate sum of 3 and 5", function() {
           
            calc.multiply(3,5);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.multiply).toBeDefined();
            console.log(typeof(calc.multiply)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.multiply(3,5); 
            expect(calc.multiply).toHaveBeenCalled();
            expect(calc.multiply).toHaveBeenCalledWith(3,5);
             
           
    });
      it("IS IT Multiplied", function() {
            expect(calc.multiply(3,5)).toBe(8);
             
           
    });
        it("Does the Multiply Contain the correct essential code?", function() {
            
           var sumStr = calculator.multiply.toString().replace(/ /g,'');
            var sumStr = sumStr.replace(/(\r\n|\n|\r)/gm,"");
           // console.log(sumStr + "What is sumStr")
             expect(sumStr).toContain("function(multiply1,multiply2)"); 
           expect(sumStr).toContain("returnmultiply1*multiply2;"); 
    
               
       
         }); 

});
});  
