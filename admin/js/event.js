var form_validation = function() {

    var e = function() {
               var count = 0;
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {

                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {


                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()

                },
                rules: {
                    "val-eventname": {
                        required: !0,
                        minlength: 5
                    },
                    "val-eventdate": {
                        required: !0
                    },
                    "val-eventtime": {
                        required: !0
                    },
                    "val-description": {
                        required: !0
                    },
                    "val-venue": {
                        required: !0
                    },
                    "val-venuecity": {
                        required: !0
                    },
                    "val-eventprofile": {
                        required: !0
                    },
                },
                messages: {
                    "val-eventname": {
                        required: "Please Enter a Event Name",
                        minlength: "Your Event Name must consist of at least 5 characters"
                    },
                    "val-eventdate": {
                        required: "Please Enter a Event Date"
                    },
                    "val-eventtime": {
                        required: "Please Enter a Event Time"
                    },
                    "val-description": {
                        required: "Please Enter a Event Description"
                    },
                    "val-venue": {
                        required: "Please Enter a Event Venue"
                    },
                    "val-venuecity": {
                        required: "Please Enter a Event Venue City"
                    },
                    "val-eventprofile": {
                        required: "Please Enter a Event Profile Image"
                    }
                }

            })


        }
        return {
          init: function() {
              e(), a(), jQuery(".js-select2").on("change", function() {
                  jQuery(this).valid()
              })
          }
      }


}();
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
displayevents();
form_validation.init();
function btnaddevent(){
  $("#eventmainform").show();
}

function displayevents() {

  $.ajax({
      type: "POST",
      url: "./src/displayEvents.php",
      dataType:"json",
      success: function(response) {
         // alert(response);
        var count= response.length;
        if(count > 0){

          for (var i = 0; i < count; i++) {
            var c_id = response[i].EventId;
            $("#tabledata").append('<tr><th scope="row">'+(i + 1)+'</th><td>'
            +response[i].EventName+'</td><td>'
            +response[i].EventDate+'</td><td>'
            +response[i].EventTime+'</td><td>'
            +response[i].Description+'</td><td>'
            +response[i].Venue+'</td><td>'
            +response[i].VenueCity+'</td><td>ok</td></tr>');
        }
        }
        $('#example1').DataTable({
          bPaginate: $('tbody tr').length>10,
          order: [],
          // "bInfo": false,
          columnDefs: [ { orderable: false, targets:[0,1,2,3,4,5,6,7] } ],
          dom: 'Bfrtip',
          buttons: ['copy', 'excel', 'pdf','print']
        });

      }
  });
}
// $('#eventform').on('submit',function(e){
//   alert('in form');
//   e.preventDefault();
//
//   var eventname = $("#eventname").val();
//   // alert(eventname);
//   var eventdate = $("#eventdate").val();
//   // alert(eventdate);
//   var eventtime = $("#eventtime").val();
//   // alert(eventtime);
//   var description = $("#description").val();
//   // alert(description);
//   var venue = $("#venue").val();
//   // alert(venue);
//   var venuecity = $("#venuecity").val();
//   // alert(venuecity);
//
//
//   if(eventname==""||eventdate==""||eventtime==""||description==""||venue==""||venuecity==""){
//     alert('ok');
//
//   }
//   else
//   {
//
//     alert("ok");
//     $.ajax({
//          url:"../admin/src/addEvent.php",
//          type:"POST",
//          contentType: false,
//          cache: false,
//          processData:false,
//          data: new FormData(this),
//          success:function(data){
//            alert(data);
//          }
//        });
//   }
// });
