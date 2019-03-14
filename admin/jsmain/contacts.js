function AddContacts(){
    var name = $('#name').val();
    var emailId = $('#emailId').val();
    var ContactNumber = $('#ContactNumber').val();
    $.ajax({
        url:'admin/src/addContacts.php',
        type:'POST',
        data:{name:name,emailId:emailId,ContactNumber:ContactNumber},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
function displayContacts(){
    $.ajax({
        url:'admin/src/displayContacts.php',
        type:'POST',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){

            }
        }
    });
}
function removeContacts(contactId){
    $.ajax({
        url:'admin/src/removeContacts.php',
        type:'POST',
        data:{contactId:contactId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}