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
 }
 function displaysponsers() {

   $.ajax({
       type: "POST",
       url: "./src/displaySponsers.php",
       dataType:"json",
       success: function(response) {
          // alert(response);
         var count= response.length;
         if(count > 0){

           for (var i = 0; i < count; i++) {
             var c_id = response[i].SponserId;
             $("#tabledata").append('<tr><th scope="row">'+(i + 1)+'</th><td>'
             +response[i].sponserName+'</td><td>'
             +response[i].sponserDesc+'</td><td>'
             +response[i].sponserProfile+'</td><td>'
             +response[i].showFlag+'</td></tr>');
         }
         }
         $('#example1').DataTable({
           bPaginate: $('tbody tr').length>10,
           order: [],
           // "bInfo": false,
           columnDefs: [ { orderable: false, targets:[0,1,2,3,4] } ],
           dom: 'Bfrtip',
           buttons: ['copy', 'excel', 'pdf','print']
         });

       }
   });
 }
