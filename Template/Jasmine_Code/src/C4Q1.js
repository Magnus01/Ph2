function OperatorToken(operator, type)
{
    this.operator = operator;
    this.type = type;
}

exports.OperatorToken = function(val1, val2)
{
    return  new OperatorToken(val1, val2);
};
