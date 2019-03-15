var form_validation = function() {
    var e = function() {
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

function saveevent(){
  var eventname = $("#eventname").val();
  var eventdate = $("#eventdate").val();
  var eventtime = $("#eventtime").val();
  var description = $("#description").val();
  var venue = $("#venue").val();
  var venuecity = $("#venuecity").val();
  var eventprofile = $("#eventprofile").val();
  if(eventname==""||eventdate==""||eventtime==""||description==""||venue==""||venuecity==""||eventprofile==""){
    form_validation.init();
  }
  else {
    alert("ok");
    $.ajax({
         url:"../src/addEvent.php",
         method:"POST",
         data:({
           EventName:eventname,
           EventDate:eventdate,
           EventTime:eventtime,
           Description:description,
           Venue:venue,
           VenueCity:venuecity,
           EventProfile:eventprofile
         }),
         success:function(data){
           alert(data);
         }
       });
  }
}
