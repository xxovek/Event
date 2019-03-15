<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spica Global Arts &mdash;Contact Us</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon"> 
    <script src="js/jquery.min.js"></script>
  </head>
  <body>

 <?php include 'navbar.php';?>
      <section class="probootstrap-hero probootstrap-hero-inner" style="background-image: url(img/27.jpg)"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Contact Us <span>Together we can make a difference</span></h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate">
            <form id="contactForm" method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="emailId" name="emailId" required>
              </div>
              <div class="form-group">
                <label for="subject">Contact number</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            
            
            <h4>USA Office</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-pin"></i> <span> 14805 ferris Creek Lane San Diego CA 92128</span></li>
              <li><i class="icon-email"></i><span>spicaglobalarts.com</span></li>
              <li><i class="icon-phone"></i><span>+123 456 7890</span></li>
            </ul>
      </div>
        </div>
        </div>
      </section>
      
    <?php include 'footer.php';?>
   
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="admin/jsmain/contacts.js"></script>
  </body>
</html>