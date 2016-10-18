 MathUtils = function() {};
MathUtils.prototype.isNumeric = function (x) {
    return !isNaN(parseFloat(x));
}; 

isNumeric = function (x) {
    return !isNaN(parseFloat(x));
}; exports.MathUtils = function() {
   return MathUtils;
};

exports.isNumeric = isNumeric;
 