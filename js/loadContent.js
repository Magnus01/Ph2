var pageData;

$.ajax({
    url: "../edu/s1Matrices/1.json",
    success: function(data){
        pageData = data;
    }
});