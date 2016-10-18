var Contacts = require("../src/C2Q3.js");



describe("Chapter3  Contact", function() {
    
 
    beforeEach(function() {
      
        calc = new MathUtils("Cecilie", "Boxer", 93072668);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'Contact').andCallThrough();
    });
 
    describe("Should contain properties name, profession, and number", function(){
         
       
        it("should be able to contain properties", function() {
           
            calc.Contact("Cecilie", "Boxer", 93072668);   
        });
        
        it("Is it Defined??", function() {
            
            expect(calc.Contact).toBeDefined();
 
            console.log(typeof(calc.Contact)+ "calc.Contact");
 
    });
        
        
        it("should HAVE BEEN CALLED", function() {
            calc.Contact("Cecilie", "Boxer", 93072668); 
            expect(calc.Contact).toHaveBeenCalled();
            expect(calc.Contact).toHaveBeenCalledWith("Cecilie", "Boxer", 93072668);

           
    });
  

});
});