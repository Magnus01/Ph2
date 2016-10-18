var sol = require("../src/operators.js");

console.log("body", sol.operators1)

console.log("SOL OPERATORS STRING", sol.operators1);
//var re = {([\s\S]*?)^};
//var m = "sol.Operators".match(re)
//var m = "{helloworld}".match(re);
//if (m != null)
  //  console.log(m[0].replace(re, '$1') ,"hellO");

console.log(sol.operators1.toString());


describe("operators", function() {

    
  it("check precedence", function () 
  {

    solution = sol.operators;
    
    var product = solution["^"].precedence;
    
    expect(product).toBe(4);
    expect(solution["-"].precedence).toBe(2)
    expect(solution["+"].precedence).toBe(2)
    expect(solution["/"].precedence).toBe(3)
    expect(solution["*"].precedence).toBe(3)
    expect(solution["^"].precedence).toBe(4)
  });
        
it("Does it contain??", function() {
            
           // var product = calculator.postfixStack.toString()
           //  var product = console.log(sol.isNumeric.toString());
          // console.log(product+ "PRODUCT")
        var product = sol.operators1.toString();
        
        console.log(product);
        
        expect(product).toContain(["^"]);
       
        expect(product).toContain(["precedence: 4"]);

        expect(product).toContain(["{"]);

           
         }); 

});

        