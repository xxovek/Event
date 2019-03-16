displaysponsers();
var loadFile = function(event) {
    $("#dshow").show();
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
 $('#sponserform').on('submit',function(e){
   e.preventDefault();
   var sponsername = $("#sponsername").val();
   var sponserdesc = $("#sponserdesc").val();
   var sponserprofile = $("#sponserprofile").val();
   if(sponsername==""){
   $("#msponsername").html("<font color='red'>Enter a Sponsers Name..</font>");
   $("#sponsername").focus();
   }
   else {
   $("#msponsername").html("");
   if(sponserdesc===""){
     $("#msponserdesc").html("<font color='red'>Enter a Sponser Description..</font>");
     $("#sponserdesc").focus();
   }
   else{
      $("#msponserdesc").html("");
      if(sponserprofile==""){
        $("#msponserimg").html("<font color='red'>Enter a Sponsers Profile Img..</font>")
        $("#sponserprofile").focus();
      }
      else{
          $("#msponserimg").html("");
          $.ajax({
            type:'POST',
            url:'./src/addSponsers.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success:function(data){
              alert(data);
              $("#dshow").hide();
              // window.location.reload();
            }
          })
      }
   }
   }
 });
 function btnaddsponsers(){
   $("#sponsermainform").show();
   $("#usponsermainform").hide();
   $("#sponsertable").hide();
 }
 function displaysponsers() {
   $("#tabledata").empty();
   $.ajax({
       type: "POST",
       url: "./src/displaySponsers.php",
       dataType:"json",
       success: function(response) {
          // alert(response);
         var count= response.length;
         if(count > 0){
         var EventFlag ='';
           for (var i = 0; i < count; i++) {
             var c_id = response[i].SponserId;
             if(response[i].showFlag==0){
               EventFlag ='<button type="button" class="btn btn-warning btn-rounded" onclick="ActiveSponser('+c_id+')">InActive</button>';
             }
             else {
               EventFlag ='<button type="button" class="btn btn-info btn-rounded" onclick="InActiveSponser('+c_id+')">Active</button>';
             }
             $("#tabledata").append('<tr><th scope="row">'+(i + 1)+'</th><td>'
             +response[i].sponserName+'</td><td>'
             +response[i].sponserDesc+'</td><td>'
             +response[i].sponserProfile+'</td><td style="text-align: center;">'
             +EventFlag+'</td><td style="text-align: center;"><div class="table-data-feature"><button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit" onclick="EditSponsers('+c_id+')"><i class="fa fa-edit"></i></button><button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="removeSponsers('+c_id+')"><i class="fa fa-remove"></i></button></div></td></tr>');
         }
         }

         $('#example1').DataTable({
         searching: true,
         retrieve: true,
         bPaginate: $('tbody tr').length>10,
         order: [],
         columnDefs: [ { orderable: false, targets: [0,1,2,3,4,5] } ],
         dom: 'Bfrtip',
         buttons: ['copy','csv', 'excel', 'pdf'],
         destroy: true
         });
       }
   });
 }

function removeSponsers(param){
  $.ajax({
     type:"POST",
     url:"./src/removeSponsers.php",
     data:({
       sponserId:param
     }),
     success:function(msg){
       alert(msg);
       displaysponsers();
     }
  });
}
function ActiveSponser(param){
  $.ajax({
     type:"POST",
     url:"./src/activateSponserProfile.php",
     data:({
       sponserId:param
     }),
     success:function(msg){
       alert(msg);
       displaysponsers();
     }
  });
}
function InActiveSponser(param){
  $.ajax({
     type:"POST",
     url:"./src/inactivateSponserProfile.php",
     data:({
       sponserId:param
     }),
     success:function(msg){
       alert(msg);
       displaysponsers();
     }
  });
}
function EditSponsers(param){
  $.ajax({
     type:"POST",
     url:"./src/editSponsers.php",
     data:({
       sponserId:param
     }),
     success:function(msg){
        // alert(msg);
       $("#usponsermainform").show();
       $("#sponsertable").hide();
       var response = JSON.parse(msg);
       $("#usponsername").val(response['sponserName']);
       $("#usponserdesc").val(response['sponserDesc']);

       $("#sponserId").val(param);
       $("#updateimage").html('<img src="./sponsers/'+response['sponserProfile']+'" alt=""  width="110px" height="110px">')
       $("#output1").hide();
     }
  });
}
var loadFile1 = function(event) {
   $("#updateimage").hide();
   $("#output1").show();
   var output = document.getElementById('output1');
   output.src = URL.createObjectURL(event.target.files[0]);
};
$('#usponserform').on('submit',function(e){
  e.preventDefault();
  var sponsername = $("#usponsername").val();
  var sponserdesc = $("#usponserdesc").val();
  var sponserprofile = $("#usponserprofile").val();
  if(sponsername==""){
  $("#umsponsername").html("<font color='red'>Enter a Sponsers Name..</font>");
  $("#usponsername").focus();
  }
  else {
  $("#msponsername").html("");
  if(sponserdesc===""){
    $("#umsponserdesc").html("<font color='red'>Enter a Sponser Description..</font>");
    $("#usponserdesc").focus();
  }
  else{
     $("#umsponserdesc").html("");
     if(sponserprofile==""){
       $("#umsponserimg").html("<font color='red'>Enter a Sponsers Profile Img..</font>")
       $("#usponserprofile").focus();
     }
     else{
         $("#umsponserimg").html("");
         $.ajax({
           type:'POST',
           url:'./src/updateSponsers.php',
           data: new FormData(this),
           contentType: false,
           cache: false,
           processData:false,
           success:function(data){
             alert(data);
             $("#dshow").hide();
             $("#usponsermainform").hide();
             $("#sponsertable").show();
             displaysponsers();
           }
         })
     }
  }
  }
});
function cancelreset(){
  $("#sponsermainform").hide();
  $("#usponsermainform").hide();
  $("#sponsertable").show();
}
