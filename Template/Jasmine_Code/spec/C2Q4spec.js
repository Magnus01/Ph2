var calculator = require("../src/C2Q4.js");

describe("list", function () {
    it("Does the Sum Contain the correct essential code?", function() {
            
           var sumStr = calculator.List.toString().replace(/(\r\n|\n|\r)/gm,"").replace(/ /g,'');
        
           // console.log(sumStr + "What is sumStr")
             expect(sumStr).toContain("varlist=[1,2,3,1,1,5,4,3];"); 
           expect(sumStr).toContain("varcount=0;");
            expect(sumStr).toContain("for(vari=0;i<list.length;i++)"); 
        expect(sumStr).toContain("if(list[i]==1){count=count+1;}}"); 
        
              
         });
 });   

