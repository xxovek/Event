

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png"  href="./images/logo.png">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="./js/lib/jquery/jquery.min.js"></script>

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
                                <h4>Login</h4>
                                <form id="login" method="post">
                                  <span id="msg"></span>
                                    <div class="form-group">
                                        <!-- <label>Username</label> -->
                                        <input type="text"  id="username1" name="username1" class="form-control" placeholder="Username" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>Password</label> -->
                                        <input type="password"  id="password1" name="password1" class="form-control" placeholder="Password"   autocomplete="off" data-type="password" required>
                                    </div>

                                  
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>

                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="register.php"> Sign Up Here</a></p>
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
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>

  $(document).ready(function(){
  $('#login').on("submit", function(event){
  event.preventDefault();
   $.ajax({
    url:"./src/signin.php",
    async: false,
    cache: false,
    method:"POST",
    data:$('#login').serialize(),
    success:function(data){
        response = JSON.parse(data);
        if(response['success']){
          // alert(response['success']);
           window.location = 'event.php';
      }
      else {
        var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong><font color='red'> Please Enter Correct Username or password!</strong></font></div>";
          $('#msg').html(msg);
      }

    }
   });
  });

});
</script>
</body>


<!-- Mirrored from colorlib.com/polygon/elaadmin/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 06:46:34 GMT -->
</html>
