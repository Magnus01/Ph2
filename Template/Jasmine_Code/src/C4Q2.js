var equate = function(token, num1, num2)
{
    sum = 0;
    tk = token;
    switch (tk) {
    case '+':
        sum += num1 + num2;
        break;
    case '-':
        sum += num1 - num2;
        break;
    case '*':
        sum += num1 * num2;
        break;
    case '/':
        sum += num1 / num2;
        break;

    case '^':
        sum += Math.pow(num1,num2);
        break;
    case 'sin':
        sum += Math.sin(num1 * Math.PI / 180.0);
        break;
    case 'cos':
        sum += Math.cos(num1);
        break;
    case 'tan':
        sum += Math.tan(num1);
        break;

    case 'arcsin':
        sum += Math.asin(num1);
        break;
    case 'arccos':
        sum += Math.acos(num1);
        break;
    case 'arctan':
        sum += Math.atan(num1);
        break;

    case 'abs':
        sum += Math.abs(num1);
        break;
    case 'sqrt':
        sum += Math.sqrt(num1);
        break;
    case 'log':
        sum += Math.log(num1);
        break;
    }
    return sum;
};

exports.equate = function(operator, num1, num2)
{
    return equate(operator, num1, num2);
};
