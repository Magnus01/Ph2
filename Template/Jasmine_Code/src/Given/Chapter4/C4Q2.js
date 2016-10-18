var equate = function(token, num1, num2) {
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
            return sum;
    }
};