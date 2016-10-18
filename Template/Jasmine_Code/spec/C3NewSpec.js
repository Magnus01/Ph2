var sol = require("../src/C3Q2.js");

console.log(sol.operators.toString());



describe("isNumeric", function() {

        
it("Does it contain??", function() {
            
           // var product = calculator.postfixStack.toString()
           //  var product = console.log(sol.isNumeric.toString());
          // console.log(product+ "PRODUCT")
    var product = sol.operators.toString();
    console.log(product);
          expect(product).toContain(["return !isNaN(parseFloat(x))"]);
          expect(product).toContain(["function (x)"]);
          expect(product).toContain(["return !isNaN(parseFloat(x)) && isFinite(x);"]);

           
         }); 

});
