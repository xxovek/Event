

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
    <title>Guest Login</title>
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
                                <h4>Guest login</h4>
                                <form id="passreset" method="post">
                                  <span id="msg"></span>
                                    <div class="form-group">
                                        <!-- <label>EMAIL</label> -->
                                        <input type="email" id="emailid" name="emailid" class="form-control" placeholder="Enter Email" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label>PASSWORD</label> -->
                                        <input type="password"  class="form-control" id="pwd" name="password" class="form-control" placeholder="Password"   autocomplete="off" data-type="password" required>
                                    </div>
                                    <input type="hidden" name="city" id="city"/>
                                    <input type="hidden" name="state" id="state"/>
                                    <input type="hidden" name="pincode" id="pincode"/>
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember Me</label>

                                    </div>
                                    <button type="button" id="rbutton" onclick="check();" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
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

<script>
  $(document).ready(function(){
  $.getJSON("http://ipinfo.io", function (data) {
        var city = data.city;
        var state = data.region;
        var pincode = data.postal;
        $("#city").val(city);
        $("#state").val(state);
        $("#pincode").val(pincode);
    });



  });
  function check()
  {

    var email = document.getElementById('emailid').value;
    var pwd = document.getElementById('pwd').value;
    var state = document.getElementById('state').value;
    var pincode = document.getElementById('pincode').value;
    var city = document.getElementById('city').value;
  if(email == '' || pwd == '')
  {
    var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><strong> Please Enter Email Id and password!</strong></font></div>";
      $('#msg').html(msg);

  window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 3000);
  }
  else {
    $.ajax({
     url:"guest_login_db.php",
     async: false,
     cache: false,
     method:"POST",
     data:{emailid:email,password:pwd,city:city,state:state,pincode:pincode},
     success:function(data){
         response = JSON.parse(data);
         if(response['success']){
        // window.location = './User_rights/dashboard.php';
          window.location = 'dashboard.php';
       }
       else {
         var msg= "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><font color='red'><strong>Please Enter Correct Email id and password!</strong></font></div>";
           $('#msg').html(msg);
       }
   window.setTimeout(function() {
             $(".alert").fadeTo(500, 0).slideUp(500, function(){
                 $(this).remove();
             });
         }, 3000);
     }
    });
  }
  }
</script>
</body>


<!-- Mirrored from colorlib.com/polygon/elaadmin/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 06:46:34 GMT -->
</html>
