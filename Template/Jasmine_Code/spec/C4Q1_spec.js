var calculator = require("../src/C4Q1.js");
/*
 * PROBLEM:
 * Create a function (constructor) that creates an object when called.
 * The function should be called OperatorToken and must be defined with 2 parameters in its input field.
 * The object created should have two fields:
 *                    - operator
 *                    - type
 *  The operator field should be equal to the first parameter in the input field and represents values such as
 *  +, -, /, * and so on.
 *  The type field is the expected amount of operands taken. It can be one of:
 * "binary", "unary", "sign".
 *
 * if stuck: remember the this keyword, and its purpose.
 *
 */

describe("OperatorToken", function()
        {
            var token = calculator.OperatorToken("+", "binary");
            it("should exist", function()
                    {
                        expect(token).toBeDefined();
                    });
            it("should be an object", function()
                    {
                        expect(typeof token).toBe('object');
                    });
            it("should contain the field operator and type", function()
                    {
                        expect(token.operator).toBeDefined();
                        expect(token.type).toBeDefined();
                    });
            it("operator should be +", function()
                    {
                        expect(token.operator).toBe('+');
                    });
            it("type should be 'binary'", function()
                    {
                        expect(token.type).toBe('binary');
                    });
        });
