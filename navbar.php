
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" title="uiCookies:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="GeneralGallery.php">Gallery</a></li>
              <li><a href="contact.php">Contact us</a></li>
              <!-- <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="testimonial.html">Testimonial</a></li>
                  <li><a href="cause-single.html">Cause Single</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul>
                  </li>
                  <li><a href="news.html">News</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </li> -->

              <!-- <li class="probootstra-cta-button last"><a href="donate.html" class="btn btn-primary">Donate</a></li> -->
            </ul>
          </div>
        </div>
      </nav>


      <script type="text/javascript">
      $('li').removeClass('active');
        var regex = /[A-Za-z _]+.php/g;
        var input = location.pathname;
        if(regex.test(input)) {
           var matches = input.match(regex);
           $('a[href="'+matches[0]+'"]').closest('li').addClass('active');
        }
      </script>
