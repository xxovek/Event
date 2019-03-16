function subscribeMail(){
    var subscriberEmail = $('#subscriberEmail').val();
    if(subscriberEmail==""){
        $('#subscriberEmail').focus()
        alert('Enter Email Id');

    }else{
        $.ajax({
            url:'admin/src/subscribeMail.php',
            type:'POST',
            data:{subscriberEmail:subscriberEmail},
            dataType:'json',
            success:function(response){
                $('#subscriberEmail').val('');
                alert(response.msg);
            }
        });
    }
}
function displaySubscriber(){
    $.ajax({
        url:'admin/src/displaySubscriber.php',
        type:'GET',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}