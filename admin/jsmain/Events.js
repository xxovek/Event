function activateEvent(EventId){
    $.ajax({
        url:'admin/src/activateEvents.php',
        type:'POST',
        data:{EventId:EventId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
            //window.location.href="";
        }
    });
}
function AddEvent(){
    var EventName = $('#EventName').val();
    var EventDate = $('#EventDate').val();
    var EventTime = $('#EventTime').val();
    var Description = $('#Description').val();
    var Venue = $('#Venue').val();
    var VenueCity = $('#VenueCity').val();
    var imgname = $('#imgname').val();
    $.ajax({
        url:'admin/src/addContacts.php',
        type:'POST',
        data:{EventName:EventName,EventDate:EventDate,EventTime:EventTime,Description:Description,Venue:Venue,VenueCity:VenueCity,imgname:imgname},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}
function displayEvents(){
    $.ajax({
        url:'admin/src/displayEvents.php',
        type:'POST',
        dataType:'json',
        success:function(response){
            var count = response.length;
            for(var i=0;i<count;i++){
                
            }
        }
    });
}
function removeEvent(EventId){
    $.ajax({
        url:'admin/src/removeEvent.php',
        type:'POST',
        data:{EventId:EventId},
        dataType:'json',
        success:function(response){
            alert(response.msg);
        }
    });
}