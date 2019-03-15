<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <?php include "mainheader.php"; ?>
        <?php include "mainleftsidebar.php"; ?>
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <!-- <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div> -->
            <!-- End Bread crumb -->
            <!-- Container fluid  -->

            <div class="container-fluid">
              <div class="row ">
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="form-validation">
                                  <form class="form-valide" action="#" method="post">
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Name <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="eventname" name="val-eventname" placeholder="Enter a Event Name..">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Date <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="date" class="form-control" id="eventdate" name="val-eventdate" placeholder="Enter a Event Date..">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Time <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="time" class="form-control" id="eventtime" name="val-eventtime" placeholder="Enter a Event Time..">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Description <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <textarea  class="form-control" id="description" name="val-description" rows="6" cols="50" placeholder="Enter Description.."></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Venue <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="venue" name="val-venue"  placeholder="Enter Venue..">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Venue City <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="venuecity" name="val-venuecity"  placeholder="Enter Venue City..">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Profile <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="file"  id="eventprofile" name="val-eventprofile" >
                                          </div>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-lg-8 ml-auto">
                                              <button type="submit" class="btn btn-primary" onclick="saveevent();">SAVE</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
                <!-- Start Page Content -->
                <!-- <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>568120</h2>
                                    <p class="m-b-0">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1178</h2>
                                    <p class="m-b-0">Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>25</h2>
                                    <p class="m-b-0">Stores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
           <!-- <div class="row">
						<div class="col-lg-6">
							<div class="card">
								<div class="card-body">
									<div class="year-calendar"></div>
								</div>
							</div>
						</div>
            </div> -->
                <!-- End PAge Content -->
            </div>
        </div>
          <?php include "mainfooter.php"; ?>
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


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->
    <!-- Form validation -->
    <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <!-- <script src="js/lib/form-validation/jquery.validate-init.js"></script> -->
    <script src="js/custom.min.js"></script>
    <script src="js/event.js"></script>


</body>
</html>
