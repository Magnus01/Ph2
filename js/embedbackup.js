/*  
      $.ajax({
        url : 'correcCha3pybackup3.php',
        type : 'POST',
        data : data,
        dataType : 'json',
        success : function (result) {
           alert(result['ajax']); // "Hello world!" alerted
           console.log(result['advert']) // The value of your php $row['adverts'] will be displayed
        },
        error : function () {
           alert("error");
        }
    })
});

       $.ajax({
            type: 'POST',
            url: 'test.php',
            data: {mydata: irrelevant},    
            success: function(){

            console.log('worky');

            alert(myvar); // NOT worky!

                    }

            });

success: function(data){
   console.log('worky');
   alert(data); // It should now, worky!
}