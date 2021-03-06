<?php
session_start();
if(isset($_SESSION['u_uname'])){
?>
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

    <!-- <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet"> -->
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="datatables/CSS/buttons.bootstrap4.min.css" />
    <link rel="stylesheet" href="datatables/CSS/dataTables.bootstrap4.min.css" />
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
              <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                  </div>
                </div>
               <div class="col-lg-4" >
                  <div class="form-group" style="float:right;padding:4%;">

                   <button class="btn btn-primary" onclick="btnaddsponsers();">Add Sponsers</button>
                  </div>
                </div>

              </div>
              <div class="row " id="sponsermainform" style="display:none;">
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="form-validation">
                                  <form id="sponserform"  method="post">
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Sponsers Name <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="sponsername" name="sponserName" placeholder="Enter a Sponsers Name..">
                                              <span id="msponsername" style="float:right"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Sponser Description <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <textarea class="form-control" id="sponserdesc" name="sponserDesc" rows="8" cols="120" placeholder="Enter a Sponser Description.."></textarea>
                                              <span id="msponserdesc" style="float:right"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">

                                          <label class="col-lg-4 col-form-label">Sponser Profile Image <span class="text-danger">*</span></label>
                                           <div class="col-lg-6">
                                              <input type="file"  id="sponserprofile" name="sponserprofile" accept="image/*" onchange="loadFile(event)" >
                                               <span id="msponserimg" style="float:right"></span>
                                          </div>



                                      </div>
                                      <div class="form-group row" id="dshow" style="display:none;">
                                         <div class="col-lg-6" >
                                        <img src="" alt="" id="output" width="110px" height="110px">
                                      </div>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-lg-4">
                                                <button type="button" class="btn btn-success" onclick="cancelreset()">CANCEL</button>
                                              <button type="submit" class="btn btn-primary">SAVE</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="row " id="usponsermainform" style="display:none;">
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="form-validation">
                                  <form id="usponserform"  method="post">
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Sponsers Name <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="hidden" id="sponserId" name="sponserId"/>
                                              <input type="text" class="form-control" id="usponsername" name="sponserName" placeholder="Enter a Sponsers Name..">
                                              <span id="umsponsername" style="float:right"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Sponser Description <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <textarea class="form-control" id="usponserdesc" name="sponserDesc" rows="8" cols="120" placeholder="Enter a Sponser Description.."></textarea>
                                              <span id="umsponserdesc" style="float:right"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">

                                          <label class="col-lg-4 col-form-label">Sponser Profile Image <span class="text-danger">*</span></label>
                                           <div class="col-lg-6">
                                              <input type="file"  id="usponserprofile" name="sponserprofile" accept="image/*" onchange="loadFile1(event)" >
                                               <span id="umsponserimg" style="float:right"></span>
                                          </div>



                                      </div>
                                      <div class="form-group row"  >
                                         <div class="col-lg-6" >
                                        <img src="" alt="" id="output1" width="110px" height="110px">
                                         <span id="updateimage"></span>
                                           <input type="hidden" id="imageid" name="imageid"/>
                                           <input type="hidden" id="oldimagename"/>
                                      </div>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-lg-4">
                                              <button type="button" class="btn btn-success" onclick="cancelreset()">CANCEL</button>
                                              <button type="submit" class="btn btn-primary">UPDATE</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-12" id="sponsertable">
                  <div class="card">
            <div class="row">

              <div class="col-lg-12">

              <table class="table table-stripped table-bordered" cellspacing="0" id="example1">
                  <thead>
                    <tr>
                        <th >Sr No</th>
                        <th >Sponser Name</th>
                        <th >Sponser Description</th>
                        <th >Sponser Profile</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody id="tabledata"></tbody>
                </table>
              </div>
            </div>
            </div>
            </div>
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
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->

    <script src="js/custom.min.js"></script>
    <script src="datatables/jquery.dataTables.min.js"></script>
    <script src="datatables/dataTables.bootstrap4.min.js"></script>
    <script src="datatables/dataTables.buttons.min.js"></script>
    <script src="datatables/buttons.bootstrap4.min.js"></script>
    <script src="datatables/jszip.min.js"></script>
    <script src="datatables/pdfmake.min.js"></script>
    <script src="datatables/vfs_fonts.js"></script>
    <script src="datatables/buttons.html5.min.js"></script>
    <script src="datatables/buttons.print.min.js"></script>
    <script src="datatables/buttons.colVis.min.js"></script>

    <script src="js/sponser.js"></script>
</body>
</html>
<?php
}else {
	header('Location:login.php');
}
?>
