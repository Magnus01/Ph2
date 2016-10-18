var equate = function(operator, num1, num2)
{
    sum = 0;
    switch(operator)
        {
            case '+': sum = num1 + num2;
                break;
            case '-': sum = num1 - num2;
                break;
            case '*': sum = num1 * num2;
                break;
            case '/': sum = num1 / num2;
                break;
        }
    return sum;
}

var main = function(tokenStack)
{
    sum = 0;
    numberStack = new Array();
    
    for(var i = 0; i < tokenStack.length; i++)
    {
        inputToken = tokenStack[i];
        if(isNaN(inputToken))
        {
            if(inputToken.type == "binary")
            {
                num2 = numberStack.pop();
                num1 = numberStack.pop();
                operator = inputToken.operator;
                sum = equate(operator, num1, num2);
                numberStack.push(sum);
            }
            else if(inputToken.type == "sign")
            {
                num = numberStack.pop();
                numberStack.push(-num);
            }
        }
        else
        {
            numberStack.push(inputToken);        
        }
    }

    return numberStack.pop();
}

exports.main = main;