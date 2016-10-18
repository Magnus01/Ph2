var sol = require("../src/C3Q22.js");

console.log(sol.operators["+"].precedence);
            
 //console.log(calculator[name] +"Hey");

describe("precedence", function ()
{
    
    
  it("check precedence", function () 
  {

    solution = sol.operators;
    
    var product = solution["^"].precedence;
    expect(product).toBe(5);
    expect(solution["-"].precedence).toBe(1)
    expect(solution["+"].precedence).toBe(2)
    expect(solution["/"].precedence).toBe(3)
    expect(solution["*"].precedence).toBe(4)
    expect(solution["^"].precedence).toBe(5)
  });
    it("Is it Defined??", function() {
            var product = solution["^"].precedence;
            expect(solution["-"].precedence).toBeDefined();
            console.log(typeof(solution["-"].precedence)+ "What is this");
         });
    
    it("Does it contain??", function() {
            
           // var product = calculator.postfixStack.toString()
          
          // console.log(product+ "PRODUCT")
 var string = sol.Operators.toString().replace(/(\r\n|\n|\r)/gm,"").replace(/ /g,'');
    console.log(string);
          expect(string).toContain("^");
          expect(string).toContain("precedence: 4");
        
          expect(string).toContain("{"/":{precedence:3}");
          //expect(string).toContain(["return !isNaN(parseFloat(x)) && isFinite(x);"]);

           
         }); 
});    
   
