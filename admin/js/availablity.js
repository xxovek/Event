function checkVendorAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_vendorName_availablity.php",
data:'username='+$("#cname1").val(),
type: "POST",
success:function(data){
	if(data =="<span class='alert alert-danger'> Vendor Name Not Available.</span>")
	{
		$("#cname1").val('');
	}
	$("#user-availability-status").html(data);
	$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkClientAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_clientName_availablity.php",
data:'username='+$("#cname1").val(),
type: "POST",
success:function(data){
	if(data =="<span class='alert alert-danger'> Client Name Not Available.</span>")
	{
		$("#cname1").val('');
	}
	$("#user-availability-status").html(data);
	$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkUserAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_username_availablity.php",
data:'username='+$("#username").val(),
type: "POST",
success:function(data){
  if(data ==="<span class='alert alert-danger'> Username Not Available.</span>")
  {
		$("#username").val('');
  }
  $("#user-availability-status").html(data);
  $("#loaderIcon").hide();
},
error:function (){}
});
}

function check_employee_name_availability()
{
$("#loaderIcon").show();
jQuery.ajax({
url: "check_employee_name_availablity.php",
data:'employee_uname='+$("#employee_uname").val(),
type: "POST",
success:function(data){
  if(data =="<span class='alert alert-danger' role='alert'> Username Not Available.</span>")
  {
    $("#employee_uname").val('');
  }
  $("#employee-availability-status").html(data);
  $("#loaderIcon").hide();
},
error:function (){}
});
}


function checkEmailAvailability() {
$("#loaderIcon_1").show();
jQuery.ajax({
url: "check_email_availablity.php",
data:'email='+$("#user_email").val(),
type: "POST",
success:function(data){
  if(data =="<span class='alert alert-danger'> Email Id Already Exists.</span>")
  {
  $("#user_email").val('');
  }
	$("#email-availability-status").html(data);
	$("#loaderIcon_1").hide();
},
error:function (){}
});
}

function checkItemsAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_itemName_availablity.php",
data:'username='+$("#itemname1").val(),
type: "POST",
success:function(data){
  if(data =="<span class='alert alert-danger'> This Item already Exist</span>")
  {
    $("#itemname1").val('');
  }
  $("#user-availability-status").html(data);
  $("#loaderIcon").hide();
},
error:function (){}
});
}
