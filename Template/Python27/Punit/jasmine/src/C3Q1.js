MathUtils = function () {}; 
    MathUtils.prototype.isNumeric = function (x) {
    return !isNaN(x);
};
    var isNumeric = function (x) {
    return !isNaN(x);
};
    exports.MathUtils = function () { 
    return MathUtils;  
    }; 
    exports.isNumeric = isNumeric;