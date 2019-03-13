<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <title>Register</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="./js/lib/jquery/jquery.min.js"></script>
      <script src="./js/availablity.js" type="text/javascript"></script>
      <script src="./js/all_validations.js" type="text/javascript"></script>
</head>


<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Register</h4>
                                <form id="contactform" method="post">
                                  <div class="form-group row">
                                    <span id="EmailVerification"></span><br>
                                    <strong id="user-availability-status" style="float:right" ></strong><br>
                                    <strong id="email-availability-status" style="float:right" ></strong>
                                  </div>

                                  <div class="form-group">
                                      <!-- <label>Full Name</label> -->
                                      <input type="text" class="form-control"id="fname" name="fname" onkeypress="return AlphaBets(event,this);" placeholder="Full Name" autocomplete="off" required>
                                  </div>
                                    <div class="form-group">
                                        <!-- <label>User Name</label> -->
                                        <img src="LoaderIcon.gif" id="loaderIcon" style="display:none;float:right"/>
                            					<input  type="text" class="form-control" id="username" name="username" onBlur="checkUserAvailability();" placeholder="Username" autocomplete="off"  required>
                                    </div>

                                    <div class="form-group">
                                        <!-- <label>Email address</label> -->

                                        <!-- <div class="input-group-addon"><i class="ti-email"></i></div> -->
                                        <input  type="email" class="form-control" id="user_email" name="email" placeholder="Enter email" onBlur="checkEmailAvailability();" autocomplete="off" required>

                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Password</label> -->
                                        <input type="password" class="form-control" id="password" name="password"  autocomplete="off"  placeholder="Enter pwd" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Repeat Password</label> -->
                                        <input type="password" class="form-control" data-type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Re Enter pwd" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Contact Number</label> -->
                                        <input  type="text" class="form-control" id="contact_number" name="contact_number" maxlength="10" onkeypress="return isNumberKey(event);" placeholder="Enter contact number" autocomplete="off" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30 sweet-message" name="submit" id="submit1">Register</button>

                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="login.php"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->

              <script src="js/lib/jquery/jquery.min.js"></script>
              <!-- Bootstrap tether Core JavaScript -->
              <script src="js/lib/bootstrap/js/popper.min.js"></script>
              <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
              <!-- slimscrollbar scrollbar JavaScript -->
              <script src="js/jquery.slimscroll.js"></script>
              <!--Menu sidebar -->
              <script src="js/sidebarmenu.js"></script>
              <!--stickey kit -->
              <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

              <script src="js/lib/sweetalert/sweetalert.min.js"></script>
              <!-- scripit init-->
              <script src="js/lib/sweetalert/sweetalert.init.js"></script>
              <!--Custom JavaScript -->
              <script src="js/custom.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>


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
     swal({
    title: 'Thank You!',
    text: 'Register Here.',
    timer: 2000,
    onOpen: () => {
      swal.showLoading();
    }
  }, function() {
            window.location = 'login.php';
        });
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
</html>
