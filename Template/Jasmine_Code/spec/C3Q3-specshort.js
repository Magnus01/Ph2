//infix expression should be ["4", "+", "5", "*", "2"]
var Cha3Q3 = require("../C3Q3.js");
describe("multiplication", function () {
  it("should multiply 2 and 3", function () {
    //infix = ["4", "+", "5", "*", "2"]
    //Cha3Q3.printStack();
     var product = Cha3Q3.MathSolver(["4", "+", "5", "*", "2"]); 
     expect(product).toEqual([4, 5, 2]);
  });
    it("Uses a spy", function (){
      spyOn(MathSolver, "isNumeric").  andCallThrough();
      Cha3Q3.MathSolver(["4", "+", "5", "*", "2"]);
      expect(MathSolver.isNumeric).toHaveBeenCalled();   
    });
    
    /* it("should multiply 3 and 5", function () {
    var product = Cha3Q3.printStack();
    expect(product).toEqual([4, 5, 2]);
  });*/
});    