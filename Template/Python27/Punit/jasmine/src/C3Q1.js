MathUtils = function () {}; 
    MathUtils.prototype.isNumeric = function(x){
    return !isNaN(parseFloat(x)) && isFinite(x);
};
    var isNumeric = function(x){
    return !isNaN(parseFloat(x)) && isFinite(x);
};
    exports.MathUtils = function () { 
    return MathUtils;  
    }; 
    exports.isNumeric = isNumeric;