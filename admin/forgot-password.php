<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
    <title>Reset Password</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="./js/lib/jquery/jquery.min.js"></script>
      <script src="./js/availablity.js" type="text/javascript"></script>
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
                                <h4>Reset Password</h4>
                                <formid="passreset" method="POST">
                                  <div class="form-group row">
                                    <p>Forgot your password?
                            <br>
                            Enter your email address to reset your password.</p>
                            <br><br>  <span id="msg"></span>
                                  </div>

                                  <div class="form-group">
                                      <!-- <label>Email Address</label> -->
                                      <input type="text" class="form-control"id="emailid" name="emailid" placeholder="Enter email" autocomplete="off" required>
                                  </div>


                                    <div class="form-group">
                                      <span id="field"></span>
                                    </div>
                                    <div class="form-group">
                            	  <button type="button" id="rbutton" onclick="check();" class="btn btn-primary btn-flat m-b-30 m-t-30" >Reset Password</button>
                                <button type="button" id="sbutton" onclick="find();" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset Password</button>
                                  <button type="button" id="fbutton"  onclick="resetpassword();" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset Password</button>
                            				</div>

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
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
$("#sbutton").hide();
$("#fbutton").hide();
});
function check()
{
  var email = document.getElementById('emailid').value;
if(email == '')
{
  var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><strong> Please Enter Email Id first!</strong></font></div>";
    $('#msg').html(msg);
window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
  }, 3000);
}
else {
  $.ajax({
   url:"resetpassword.php",
   async: false,
   cache: false,
   method:"POST",
   data:{emailid:email},
   success:function(data){
       response = JSON.parse(data);
       if(response['success']){
         var msg= "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><font color='Green'><strong>Check Your Email Id</strong></font></div>";
           $('#msg').html(msg);
         var field = ' <input type="text" class="input" id="password" name="password" aria-describedby="emailHelp" placeholder="Enter Security Code" >';
         $("#field").html(field);
         $("#rbutton").hide();
         $("#sbutton").show();
     }
     else {
       var msg= "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><font color='red'><strong>Please Enter Correct Email id!</strong></font></div>";
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

function find()
{
  var email = document.getElementById('emailid').value;
  var password = $("#password").val();
  if(password == '')
  {
    var msg= "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <font color='red'><strong>Please Enter Security Code</strong></font></div>";
      $('#msg').html(msg);
      window.setTimeout(function() {
               $(".alert").fadeTo(500, 0).slideUp(500, function(){
                   $(this).remove();
               });
           }, 3000);
  }
  else {
    $.ajax({
     url:"resetpassword_update.php",
     async: false,
     cache: false,
     method:"POST",
     data:{emailid:email,password:password},
     success:function(data){
         response = JSON.parse(data);
         if(response['success']){
           var field = ' <input type="password" class="input" id="final_password" name="final_password" aria-describedby="emailHelp" placeholder="Enter New Password" >';
           $("#field").html(field);
           $("#rbutton").hide();
           $("#sbutton").hide();
          $("#fbutton").show();
       }
       else {
         var msg= "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><strong>Please Enter Correct Security Code !</strong></font></div>";
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

function resetpassword(){
  var email = document.getElementById('emailid').value;
  var password = $("#final_password").val();
  if(password == '')
  {
    var msg= "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <font color='red'><strong>Password Field Required</strong></font></div>";
      $('#msg').html(msg);
      window.setTimeout(function() {
               $(".alert").fadeTo(500, 0).slideUp(500, function(){
                   $(this).remove();
               });
           }, 3000);
  }
  else {
    $.ajax({
     url:"resetpassword_final.php",
     async: false,
     cache: false,
     method:"POST",
     data:{emailid:email,password:password},
     success:function(data){
         response = JSON.parse(data);
         if(response['success']){
           alert("Password Reset Successully");
           window.location.href = 'index.php';
       }
       else {
         var msg= "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><font color='red'><strong>Please Enter Correct Security Code !</strong></font></div>";
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
</html>
