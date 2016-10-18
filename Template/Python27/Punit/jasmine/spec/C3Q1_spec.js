var sol = require("../src/C3Q1.js");

console.log(sol.isNumeric.toString());

 beforeEach(function() {
      
        calc = new MathUtils(["4"]);
        console.log(typeof(calc)+ "object");
        spyOn(calc, 'isNumeric').andCallThrough();
    });

describe("MathUtils", function() {
    var product = sol.isNumeric.toString().replace(/(\r\n|\n|\r)/gm,"").replace(/ /g,'');

    it("Is your function named isNumeric with an input argument? isNumeric = function(x)", function() {
        
        calc = new MathUtils(["4"]);
        spyOn(calc, 'isNumeric').andCallThrough();
        expect(calc.isNumeric).toBeDefined();
        calc.isNumeric(["4"]); 
        expect(calc.isNumeric).toHaveBeenCalled();
        expect(calc.isNumeric).toHaveBeenCalledWith(["4"]);
        
          }); 
        
    it("Is the input argument of your isNumeric function named x? isNumeric = function(x)", function() {
          expect(product).toContain("function(x)");  
         }); 
    it("Did you remember the return statment?", function() {
          expect(product).toContain("return");
         });
    it("Remember to use isNaN() and include the ! like this: return !isNaN(whatever)", function() {
          expect(product).toContain("!isNaN(");
         });
    it("Remember to use parseFloat() to fix the input of isNaN like this: return !isNaN(parseFloat(x))", function() {
          expect(product).toContain("parseFloat(x)");
         });
    it("The isFinite() function is required since the calculator is unable to handle inifinate numbers also to check with two functions use the && like this: return !isNaN(parseFloat(x)) && isFinite(x)", function() {
          expect(product).toContain("&&isFinite(x);");
         });
    it("Your answer is wrong", function() {
        calc = new MathUtils(["4"]);
       var product = calc.isNumeric(4);
       expect(product).toBe(true); 
    });

});