<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spica Global Arts &mdash; Event</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel = "icon" href ="img/logo.png" type = "image/x-icon" sizes="16x16"> 
    <!-- <script src="js/jquery.min.js"></script> -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include 'navbar.php';?>
      <section class="probootstrap-hero" style="background-image: url(img/3.jpg)"  data-stellar-background-ratio="1.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Spica Global Arts <span>Together we can make a difference</span></h1>
                <!-- <p class="probootstrap-animate"><a href="events.php" class="btn btn-primary btn-lg">Buy Now</a></p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="probootstrap-service-intro">
          <div class="container">
            <div class="probootstrap-service-intro-flex">
              <div class="item probootstrap-animate" data-animate-effect="fadeIn">
                <div class="icon">
                  <i class="icon-wallet"></i>
                </div>
                <div class="text">
                  <h2>Give Donation</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href="#">Lear More</a></p>
                </div>
              </div>
              <div class="item probootstrap-animate" data-animate-effect="fadeIn">
                <div class="icon">
                  <i class="icon-heart"></i>
                </div>
                <div class="text">
                  <h2>Become Volunteer</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href="#">Lear More</a></p>
                </div>
              </div>
              <div class="item probootstrap-animate" data-animate-effect="fadeIn">
                <div class="icon">
                  <i class="icon-graduation-cap"></i>
                </div>
                <div class="text">
                  <h2>Give Scholarship</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  <p><a href="#">Lear More</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
              <h2>Upcoming Conserts</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <div class="row upComingData">
            
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
              <div class="probootstrap-image-text-block  probootstrap-cause">
                <figure>
                  <img src="img/4.jpg" alt="Spica Glpbal Arts" class="img-responsive">
                </figure>
                <div class="probootstrap-cause-inner">
                  <div class="progress">
                    <div class="progress-bar progress-bar-s2" data-percent="99"></div>
                  </div>

                  <div class="row mb30">
                    <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised">Raised: <span class="money">$21,973</span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal">Goal: <span class="money">$100,000</span></div>
                  </div>
                  
                  <h2><a href="#">Help Children To Get Education</a></h2>
                  <div class="probootstrap-date"><i class="icon-calendar"></i> 15 days remaining</div>  
                  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate quaerat maxime inventore.</p>
                  <p><a href="#" class="btn btn-primary btn-black">Donate Now!</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>Save the future for the little children by donating. <a href="events.php">See all Events</a></p>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-dark" style="background-image: url(img/9.jpg)"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
              <h2>Past Events</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <div class="row">
            <?php include 'admin/src/displayPastEvents.php';?>
            </div>
          </div>
        </div>
      </section>
      
      <section class="probootstrap-section  probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2>Our Sponsers</h2>
              <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <?php include 'admin/src/displaySponsersOnSite.php';?>
              </div>
            </div>
          </div>
        </div>
      </section>
        
      <section class="probootstrap-half">
        <div class="image">
          <div class="image-bg">
            <img src="img/18.jpg" alt="Free Bootstrap Template by uicookies.com">
          </div>
        </div>
        <div class="text">
          <div class="probootstrap-animate">
            <h3>Sucess Stories</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sunt excepturi dicta ex, placeat ab esse, iure harum eaque fuga asperiores distinctio amet temporibus enim illum molestiae neque ad similique possimus repellendus velit! Quaerat nihil nemo, aliquam consectetur debitis illum. Excepturi cum, quaerat minus odit dolorem recusandae, debitis reprehenderit voluptate?</p>
            <p><a href="#" class="btn btn-primary btn-lg">Read More</a></p>
          </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-3 probootstrap-animate">
              <h3>News</h3>
              <ul class="probootstrap-news">
                <li>
                  <span class="probootstrap-date">July 16, 2017</span>
                  <h3><a href="#">Porro provident suscipit</a></h3>
                  <p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
                  <p><span class="probootstrap-meta"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span></p>
                </li>
                <li>
                  <span class="probootstrap-date">July 16, 2017</span>
                  <h3><a href="#">Voluptatem dolor pariatur</a></h3>
                  <p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
                  <p><span class="probootstrap-meta"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span></p>
                </li>
              </ul>
              <p><a href="#" class="btn btn-primary">View all news</a></p>
            </div>
            <div class="col-md-6 probootstrap-animate">
              <h3>About Us</h3>
              <p><img src="img/2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
              <p>Spica Global Arts mission is to promote Indian classical art form in San Diego and suppor charitable organizations worldwide.
              Our vision is to provide an opportunity for the future generation to be able to stay connected to their rich cultural heritage</p>
              <p><a href="about.php" class="btn btn-primary">Learn More</a></p>
            </div>
            <div class="col-md-3 probootstrap-animate">
              <h3>Gallery</h3> 
              <div class="owl-carousel owl-carousel-fullwidth">
                <?php include 'admin/src/getGalleryImagesForHome.php';?>
              </div>
              <p class="text-center"><a href="GeneralGallery.php" class="btn btn-primary">View all gallery</a></p>
            </div>
          </div>
        </div>
      </section>
<?php include 'footer.php';?>
<script src="js/scripts.min.js"></script>
<script src="js/main.min.js"></script>
<script src="js/custom.js"></script>
<script src="admin/jsmain/Events.js"></script>
</body>
</html>