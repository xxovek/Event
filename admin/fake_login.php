

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/elaadmin/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 06:46:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="./js/lib/jquery/jquery.min.js"></script>
      <script src="./js/availablity.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">



  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-3"></div>
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" align="center">Login</h4>
            <!-- <h6 class="card-subtitle">Use Bootstrap's predefined grid classes for horizontal form</h6> -->
            <form class="form p-t-20">
              <span id="msg"></span>

                <div class="form-group">
                    <label for="exampleInputuname2">User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="exampleInputuname2" placeholder="Username">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputpwd2">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter pwd">
                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                    </div>
                </div>
                <input type="hidden" name="city" id="city"/>
                <input type="hidden" name="state" id="state"/>
                <input type="hidden" name="pincode" id="pincode"/>

                <div class="form-group">
                    <div class="checkbox checkbox-success">
                        	<input id="check" type="checkbox" class="check" checked>
                        <label for="check"> Remember me </label>
                    </div>
                </div>
                <div class="text-left">
                    <button type="submit" name="submit" id="submit" class="btn btn-success waves-effect waves-light m-r-10">Log In</button>
                    <!-- <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button> -->
                </div>
            </form>
            <div>
    					<a href="forgot-password.php">Forgot Password?</a>
          </div>
          <div>
            <a href="guest_login.php">Guest Login</a>
        </div>
        <div>
          <a href="register.php">Don't have an Account</a>
      </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">


$('#contactform').on("submit",function(event)
  {
    event.preventDefault();
$.ajax({
url:"registrations.php",
method:"POST",
data:$('#contactform').serialize(),
success:function(data)
{
response = JSON.parse(data);
if(response['success']){
  alert("Thank you!");
//  $("#tab1").trigger("click");
// window.location.href="login.php";

  }
  else {
    var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'>Please Choose Another Email Id!</strong></font></div>";
      $('#EmailVerification').html(msg);
          window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 2000);
  }
}
});
});

var password = document.getElementById("password"),confirm_password = document.getElementById("ConfirmPassword");

function validatePassword(){
if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Passwords Don't Match");
} else {
  confirm_password.setCustomValidity('');
}
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
<!-- Mirrored from colorlib.com/polygon/elaadmin/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 06:46:34 GMT -->
</html>
