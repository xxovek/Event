function activateSponsers(sponserId){
    $.ajax({
        url:'admin/src/activateSponsers.php',
        type:'POST',
        data:{sponserId:sponserId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
            //window.location.href="";
        }
    });
}
function AddSponsers(){
    var sponserName = $('#sponserName').val();
    var sponserDesc = $('#sponserDesc').val();
    var imgname = $('#imgname').val();
    $.ajax({
        url:'admin/src/addSponsers.php',
        type:'POST',
        data:{sponserName:sponserName,sponserDesc:sponserDesc,imgname:imgname},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
function displaySponsers(){
    $.ajax({
        url:'admin/src/displaySponsers.php',
        type:'POST',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}
function displaySponsersOnsite(){
    $.ajax({
        url:'admin/src/displaySponsersOnSite.php',
        type:'POST',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}
function removeSponser(sponserId){
    $.ajax({
        url:'admin/src/removeSponsers.php',
        type:'POST',
        data:{sponserId:sponserId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}