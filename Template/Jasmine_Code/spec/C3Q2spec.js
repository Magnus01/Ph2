var calculator = require("../src/C3Q2.js");

console.log(calculator);
console.log(calculator.operators);
console.log(calculator.operators["+"].precedence);
            
 //console.log(calculator[name] +"Hey");

describe("precedence", function ()
{
    
    
  it("check precedence", function () 
  {

    solution = calculator.operators;
    
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
 var string = calculator.Operators.toString().replace(/(\r\n|\n|\r)/gm,"").replace(/ /g,'');
    console.log(string);
        
        expect(string).toContain("function()");
        
         expect(string).toContain("{\"^\":{precedence:5},");
        expect(string).toContain("\"/\":{precedence:3");
expect(string).toContain("\"*\":{precedence:4}");
        expect(string).toContain("\"+\":{precedence:2}");
       expect(string).toContain("\"-\":{precedence:1}");
         expect(string).toContain("};}");
        
           
         }); 
});    


