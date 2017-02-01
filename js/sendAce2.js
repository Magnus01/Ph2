function showHint() {
$.ajax({  
    type: 'POST',  
    url: 'C3Q1py.php', 
    data: { album: this.title },
    success: function(response) {
        content.html(response);
    }
});
}