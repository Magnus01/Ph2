var calculator = require("../src/C2Q1.js");

describe("MathUtils", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils(3, 5);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'add').andCallThrough();
    });
 
    describe("when calc is used to peform basic math operations", function(){
         
       
        it("should be able to calculate sum of 3 and 5", function() {
           
            calc.add(3,5);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.add).toBeDefined();
            console.log(typeof(calc.add)+ "function");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.add(3,5); 
            expect(calc.add).toHaveBeenCalled();
            expect(calc.add).toHaveBeenCalledWith(3,5);
             
           
    });
      it("IS IT ADDED", function() {
            expect(calc.add(3,5)).toBe(8);
             
           
    });
        it("Does the Sum Contain the correct essential code?", function() {
            
           var sumStr = calculator.add.toString().replace(/ /g,'');
            var sumStr = sumStr.replace(/(\r\n|\n|\r)/gm,"");
           // console.log(sumStr + "What is sumStr")
             expect(sumStr).toContain("function(add1,add2){returnadd1+add2;}"); 
           expect(sumStr).toContain("returnadd1+add2;"); 
    
               
       
         }); 

});
});  
