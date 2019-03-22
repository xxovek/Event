var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    $("#eveimg").show();
};
var loadFile1 = function(event) {
   $("#output1").show();
   $("#updateimage").hide();
   var output = document.getElementById('output1');
   output.src = URL.createObjectURL(event.target.files[0]);
};
displayevents();
// form_validation.init();
function btnaddevent(){
    $('#eveimg').hide();
  $("#eventmainform").show();
  $("#eventtable").hide();

  $("#updateeventmainform").hide();
}
// <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit" onclick="getRegId(21)"><i class="fa fa-edit"></i></button>
function displayevents() {
   $("#tabledata").empty();
  $.ajax({
      type: "POST",
      url: "./src/displayEvents.php",
      dataType:"json",
      success: function(response) {
         // alert(response);
        var count= response.length;
        if(count > 0){
          var EventFlag ='';
          for (var i = 0; i < count; i++) {
            var c_id = response[i].EventId;
            if(response[i].EventFlag==0){
              EventFlag ='<button type="button" class="btn btn-warning btn-rounded" onclick="ActiveEvent('+c_id+')">InActive</button>';
            }
            else {
              EventFlag ='<button type="button" class="btn btn-info btn-rounded" onclick="InActiveEvent('+c_id+')">Active</button>';
            }
            $("#tabledata").append('<tr><th scope="row" style="font-size: 12px;">'+(i + 1)+'</th><td style="font-size: 12px;" >'
            +response[i].EventName+'</td><td style="font-size: 12px;">'
            +response[i].EventDate+'</td><td style="font-size: 12px;">'
            +response[i].EventTime+'</td><td style="font-size: 12px;">'
            +response[i].Venue+'</td><td style="font-size: 12px;">'
            +response[i].VenueCity+'</td><td style="text-align: center;font-size: 12px;">'+EventFlag+'</td><td style="text-align: center;"><div class="table-data-feature"><button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit" onclick="EditEvent('+c_id+')"><i class="fa fa-edit"></i></button><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="removeEvent('+c_id+')"><i class="fa fa-remove"></i></button></div></td></tr>');
           }
        }
        $('#example1').DataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length>10,
        order: [],
        columnDefs: [ { orderable: false, targets: [0,1,2,3,4,5,6,7] } ],
        dom: 'Bfrtip',
        buttons: ['copy','csv', 'excel', 'pdf'],
        destroy: true
        });

      }
  });
}
function ActiveEvent(param){
  $.ajax({
     type:"POST",
     url:"./src/activateEvents.php",
     data:({
       EventId:param
     }),
     success:function(msg){
       alert(msg);
       displayevents();
     }
  });
}
function EditEvent(param){
  $.ajax({
     type:"POST",
     url:"./src/editEvent.php",
     data:({
       EventId:param
     }),
     success:function(msg){
       var response = JSON.parse(msg);
       $("#updateeventmainform").show();
       $("#eventtable").hide();
       $("#ueventname").val(response['EventName']);
       $("#ueventdate").val(response['EventDate']);
       $("#ueventtime").val(response['EventTime']);
       $("#udescription").val(response['Description']);
       $("#uvenue").val(response['Venue']);
       $("#uvenuecity").val(response['VenueCity']);
       $("#EventId").val(param);
       $("#eventgallery").val(param);
       $("#updateimage").show();
       var arr = response['EventProfile'].split(".");
       $("#imageid").val(arr[0]);
       $("#oldimagename").val(response['EventProfile']);
       $("#updateimage").html('<img src="./Events/'+response['EventProfile']+'" alt=""  width="110px" height="110px">');
       $("#output1").hide();
       EventGallery();
     }
  });
}
function EventGallery(){
  var param =  $("#EventId").val();
  $("#eventgallerytbl").empty();
  $.ajax({
     type: "POST",
     url: "./src/displayEventsGallery.php",
     // dataType:"json",
     data:({
       EventId:param
     }),
     success: function(response) {
        var html='';
       var response = JSON.parse(response);
        // alert(response);
         var count= response.length;
           for (var i = 0; i < count; i++) {
           html+='<tr>';
           html+='<th scope="row">'+(i+1)+'</th>';
           html+='<td><img src="./EventGallery/'+response[i]['pictures']+'" alt=""  width="40px" height="40px"></td>';
           html+='<td><button class="btn btn-danger" onclick="removeimage(\'' +response[i]['pictures'] + '\')"><i class="fa fa-remove"></i></button></td>';
           html+='</tr>';
        }
        $("#eventgallerytbl").html(html);
     }

   });
}
function removeimage(param){

  var name = param;
  var eventgallery = $("#eventgallery").val();
  // alert(eventgallery);
  $.ajax({
      type: 'POST',
      url: './src/removeuploadevent.php',
      data: {name: name,eventgallery:eventgallery},
      success: function(data){
           alert(data);
          if(data){
            EventGallery();
          }
      }
  });
}
function cancelreset(){
  // $("#eventmainform").hide();
  // $("#eventtable").show();
  // $("#updateeventmainform").hide();
  window.location.reload();
}
function InActiveEvent(param){
  $.ajax({
     type:"POST",
     url:"./src/inactivateEvents.php",
     data:({
       EventId:param
     }),
     success:function(msg){
       alert(msg);
       displayevents();
     }
  });
}
function removeEvent(param){
  $.ajax({
     type:"POST",
     url:"./src/removeEvent.php",
     data:({
       EventId:param
     }),
     success:function(msg){
       alert(msg);
       // displayevents();
       window.location.reload();
     }
  });
}
$('#eventform').on('submit',function(e){
  e.preventDefault();
  var eventname = $("#eventname").val();
  var eventdate = $("#eventdate").val();
  var eventtime = $("#eventtime").val();
  var description = $("#description").val();
  var venue = $("#venue").val();
  var venuecity = $("#venuecity").val();
  var eventprofile = $("#eventprofile").val();
  if(eventname==""){
    $("#smeventname").html("<font color='red'>Please Enter a Event Name</font>");
  }
  else
  {
     $("#smeventname").html("");
     $("#eventname").focus();
     if(eventdate==""){
       $("#smeventdate").html("<font color='red'>Please Enter a Event Date</font>");
     }
     else {
       $("#smeventdate").html("");
       $("#eventdate").focus();
       if(eventtime==""){
         $("#smeventtime").html("<font color='red'>Please Enter a Event Time</font>");

       }
       else
       {
         $("#smeventtime").html("");
         $("#eventtime").focus();
         if(description==""){
           $("#smdescription").html("<font color='red'>Please Enter a Event Description</font>");
         }
         else{
           $("#smdescription").html("");
           $("#description").focus();
           if(venue==""){
             $("#smvenue").html("<font color='red'>Please Enter a Event Venue</font>");
           }
           else{
             $("#smvenue").html("");
             $("#venue").focus();
             if(venuecity==""){
               $("#smvenuecity").html("<font color='red'>Please Enter a Event Venue City</font>");
             }
             else{
               $("#smvenuecity").html("");
               $("#venuecity").focus();
               if(eventprofile==""){
                 $("#smeventprofile").html("<font color='red'>Please Enter a Event Profile Image</font>");
               }
               else{
                 $("#smeventprofile").html("");
                 $("#eventprofile").focus();
                 $.ajax({
                      url:"../admin/src/addEvent.php",
                      type:"POST",
                      contentType: false,
                      cache: false,
                      processData:false,
                      data: new FormData(this),
                      success:function(data){
                        alert(data);
                        $("#eventname").val("");
                        $("#eventdate").val("");
                        $("#eventtime").val("");
                        $("#description").val("");
                        $("#venue").val("");
                        $("#venuecity").val("");
                        $("#eventprofile").val("");
                        $("#eventmainform").hide();
                        $("#eventtable").show();
                          $('#eveimg').hide();
                         displayevents();
                      }
                    });

               }
             }
           }
         }
       }
     }
  }
});
$('#ueventform').on('submit',function(e){
  e.preventDefault();
  var eventid = $("#EventId").val();
  // alert(eventid);
  var eventname = $("#ueventname").val();
  var eventdate = $("#ueventdate").val();
  var eventtime = $("#ueventtime").val();
  var description = $("#udescription").val();
  var venue = $("#uvenue").val();
  var venuecity = $("#uvenuecity").val();
  var eventprofile = $("#ueventprofile").val();
  var oldimagename=$("#oldimagename").val();
  if(eventprofile==""){
    eventprofile="C:\\fakepath\\"+oldimagename;
  }

  // alert(eventprofile);
  if(eventname==""){
    $("#usmeventname").html("<font color='red'>Please Enter a Event Name</font>");
  }
  else
  {
     $("#usmeventname").html("");
     $("#ueventname").focus();
     if(eventdate==""){
       $("#usmeventdate").html("<font color='red'>Please Enter a Event Date</font>");
     }
     else {
       $("#usmeventdate").html("");
       $("#ueventdate").focus();
       if(eventtime==""){
         $("#usmeventtime").html("<font color='red'>Please Enter a Event Time</font>");

       }
       else
       {
         $("#usmeventtime").html("");
         $("#ueventtime").focus();
         if(description==""){
           $("#usmdescription").html("<font color='red'>Please Enter a Event Description</font>");
         }
         else{
           $("#usmdescription").html("");
           $("#udescription").focus();
           if(venue==""){
             $("#usmvenue").html("<font color='red'>Please Enter a Event Venue</font>");
           }
           else{
             $("#usmvenue").html("");
             $("#uvenue").focus();
             if(venuecity==""){
               $("#usmvenuecity").html("<font color='red'>Please Enter a Event Venue City</font>");
             }
             else{
               $("#usmvenuecity").html("");
               $("#uvenuecity").focus();
               if(eventprofile==""){
                 $("#usmeventprofile").html("<font color='red'>Please Enter a Event Profile Image</font>");
               }
               else{
                 $("#usmeventprofile").html("");

                 $.ajax({
                      url:"../admin/src/updateEvent.php",
                      type:"POST",
                      contentType: false,
                      cache: false,
                      processData:false,
                      data: new FormData(this),
                      success:function(data){
                        alert(data);
                        // $("#updateeventmainform").hide();
                        // $("#eventmainform").hide();
                        // $("#eventtable").show();
                        //  displayevents();
                        window.location.reload();
                      }
                    });

               }
             }
           }
         }
       }
     }
  }
});
