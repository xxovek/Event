function authenticate(){
    var userName = $('#userName').val();
    var userPassword = $('#userPassword').val();
    $.ajax({
        url:'./src/admminAuthentication.php',
        type:'POST',
        data:{username:userName,password:userPassword},
        dataType:'json',
        success:function(response){
            alert(response.msg);
            //window.location.href="";
        }
    });
}