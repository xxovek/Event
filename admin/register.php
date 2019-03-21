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


                                  <div class="form-group">
                                      <label>Login Name</label><strong id="user-availability-status" style="float:right" ></strong>
                                      <input type="text" class="form-control" id="fname" name="fname" onkeypress="return AlphaBets(event,this);" placeholder="Login Name" autocomplete="off" onBlur="checkUserAvailability();" required>
                                  </div>



                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password"  autocomplete="off"  placeholder="Enter Password" required>
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
      var fname = $("#fname").val();
      var password  = $("#password").val();
      if(fname=="" || password==""){
        swal("Please Fill all mandatory fields");
      }
      else{
        $.ajax({
        url:"./src/registrations.php",
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
  }
  });
      }


  });
  function checkUserAvailability() {

  $("#loaderIcon").show();
  jQuery.ajax({
  url: "./src/check_username_availablity.php",
  data:'username='+$("#fname").val(),
  type: "POST",
  success:function(data){
    if(data ==="<span class='alert alert-danger'> Username Not Available.</span>")
    {
  		$("#fname").val('');
    }
    $("#user-availability-status").html(data);
    $("#loaderIcon").hide();
  },
  error:function (){}
  });
  }


</script>
</body>
</html>
