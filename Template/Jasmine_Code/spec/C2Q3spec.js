var calculator = require("../src/C2Q3.js");

describe("Chapter3  Contact", function(){
   it("Should be create a function that defines an object called Contact", function(){
       expect(typeof calculator.Contact).toBe('function');
   }) ;
     var test = new calculator.Contact('Cecilie', 'Boxer', 93072668);
    it("Should contain properties name, profession, and number", function(){
        expect(test.name).toBe('Cecilie');
        expect(test.profession).toBe('Boxer');
        expect(test.number).toBe(93072668);
    });
    
    it("Should contain a function 'changeNumber' that changes the number to the given number", function()
     {
        test.changeNumber(93072669);
       expect(test.number).toBe(93072669); 
    });
            it("Does the Sum Contain the correct essential code?", function() {
            
           var sumStr = calculator.Contact.toString().replace(/ /g,'');
            var sumStr = sumStr.replace(/(\r\n|\n|\r)/gm,"");
           // console.log(sumStr + "What is sumStr")
             expect(sumStr).toContain("function(name,profession,number)"); 
           expect(sumStr).toContain("this.name=name;");
            expect(sumStr).toContain("this.profession=profession;"); 
            expect(sumStr).toContain("this.number=number;");
             expect(sumStr).toContain("this.changeNumber=function(newNumber){this.number=newNumber;}");       
       
         });
});

