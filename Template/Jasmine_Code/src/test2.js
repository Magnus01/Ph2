//var isNumeric = function(x)
//{
//     return !isNaN(parseFloat(x)) && isFinite(x);
//};

MathUtils = function() {
    
};

MathUtils.prototype.isNumeric = function (x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
};





isNumeric = function (x) {
    return !isNaN(parseFloat(x)) && isFinite(x);
};








exports.isNumeric = isNumeric;

exports.MathUtils = function () {
    return MathUtils;
};

