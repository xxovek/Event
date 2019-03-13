function subscribeMail(){
    var subscriberEmail = $('#subscriberEmail').val();
    $.ajax({
        url:'./src/subscribeMail.php',
        type:'POST',
        data:{subscriberEmail:subscriberEmail},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
function displaySubscriber(){
    $.ajax({
        url:'./src/displaySubscriber.php',
        type:'GET',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}