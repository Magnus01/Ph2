//!javascript
// spec/calculator-spec.js

var calculator = require("../src/calculator.js");

describe("multiplication", function() {
    it("should multiply 2 and 3", function ()
            {
                var product = calculator.multiply(2, 3);
                expect(product).toBe(6);
            });
    it("should exist", function()
            {
                expect(calculator.multiply).toBeDefined();
            });
    it("should be faulty", function()
            {
                expect(calculator.add).toBeDefined();
            });
});
