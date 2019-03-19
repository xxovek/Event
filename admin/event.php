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
    <link href="dropzone/dropzone.css" rel="stylesheet" type="text/css">


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
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                  </div>
                </div>
               <div class="col-lg-4" >
                  <div class="form-group" style="float:right;padding:4%;">
                   <button class="btn btn-success" onclick="btnaddevent();">Add Event</button>
                  </div>
                </div>

              </div>
              <div class="row " id="eventmainform" style="display:none;">
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="form-validation">
                                  <form id="eventform"   method="post" enctype="multipart/form-data">
                                      <div class="form-group row">
                                        <div class="col-lg-12">
                                          <h2>ADD NEW EVENT</h2>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Name <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="eventname" name="EventName" placeholder="Enter a Event Name..">
                                              <span id="smeventname" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Date <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="date" class="form-control" id="eventdate" name="EventDate" placeholder="Enter a Event Date..">
                                              <span id="smeventdate" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Time <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="time" class="form-control" id="eventtime" name="EventTime" placeholder="Enter a Event Time..">
                                              <span id="smeventtime" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Description <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input  type="text" class="form-control" id="description" name="Description" rows="6" cols="50" placeholder="Enter Description..">
                                              <span id="smdescription" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Venue <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="venue" name="Venue"  placeholder="Enter Venue..">
                                              <span id="smvenue" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Venue City <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="venuecity" name="VenueCity"  placeholder="Enter Venue City..">
                                              <span id="smvenuecity" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">

                                          <label class="col-lg-4 col-form-label">Event Profile <span class="text-danger">*</span></label>
                                           <div class="col-lg-6">
                                              <input type="file"  id="eventprofile" name="eventprofile" accept="image/*" onchange="loadFile(event)" >
                                              <span id="smeventprofile" style="float:right;"></span>
                                          </div>
                                        </div>
                                          <div class="form-group row" id="eveimg" style="display:none">
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <img src="" alt="" id="output" width="110px" height="110px">
                                            </div>
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
              <div class="row " id="updateeventmainform" style="display:none;">
                  <div class="col-lg-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="form-validation">
                                  <form id="ueventform"   method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                      <div class="col-lg-12">
                                        <h2>UPDATE  EVENT</h2>
                                      </div>
                                    </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Name <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="hidden" id="EventId" name="EventId"/>
                                              <input type="text" class="form-control" id="ueventname" name="EventName" placeholder="Enter a Event Name..">
                                              <span id="usmeventname" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Date <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="date" class="form-control" id="ueventdate" name="EventDate" placeholder="Enter a Event Date..">
                                              <span id="usmeventdate" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Event Time <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="time" class="form-control" id="ueventtime" name="EventTime" placeholder="Enter a Event Time..">
                                              <span id="usmeventtime" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Description <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input  type="text" class="form-control" id="udescription" name="Description" rows="6" cols="50" placeholder="Enter Description..">
                                              <span id="usmdescription" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Venue <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="uvenue" name="Venue"  placeholder="Enter Venue..">
                                              <span id="usmvenue" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-lg-4 col-form-label">Venue City <span class="text-danger">*</span></label>
                                          <div class="col-lg-6">
                                              <input type="text" class="form-control" id="uvenuecity" name="VenueCity"  placeholder="Enter Venue City..">
                                              <span id="usmvenuecity" style="float:right;"></span>
                                          </div>
                                      </div>
                                      <div class="form-group row">

                                          <label class="col-lg-4 col-form-label">Event Profile <span class="text-danger">*</span></label>
                                           <div class="col-lg-6">
                                              <input type="hidden" id="imageid" name="imageid"/>
                                              <input type="hidden" id="oldimagename"/>
                                              <input type="file"  id="ueventprofile" name="eventprofile" accept="image/*" onchange="loadFile1(event)" >
                                              <span id="usmeventprofile" style="float:right;"></span>
                                          </div>
                                        </div>
                                          <div class="form-group row">
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                              <img src="" alt="" id="output1" width="110px" height="110px">
                                               <span id="updateimage"></span>
                                            </div>
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
                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                          <label><h3>Event Gallary</h3></label>
                          <div style="float:right">Please Upload the jpg ,jpeg image</div>
                  <div class='content'>
                  <form action="./src/uploadeventgallary.php" class="dropzone" id="myAwesomeDropzone">
                  <input type="hidden" id="eventgallery" name="eventgallery" />
                  </form>
                  </div>
                   </div>
                   <div class="col-lg-12" style="padding-top:10px;">

                             <div class="card-title">
                                 <h4>Table Basic </h4>

                             </div>
                             <div class="card-body">
                                 <div class="table-responsive">
                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th>#</th>
                                                 <th>Image Preview</th>
                                                 <th>Action</th>

                                             </tr>
                                         </thead>
                                         <tbody id="eventgallerytbl">



                                         </tbody>
                                     </table>
                                 </div>
                             </div>

                     </div>
                  </div>

                </div>
              </div>
                <div class="col-lg-12" id="eventtable">
                    <div class="card">
              <div class="row">

                <div class="col-lg-12">

                <table class="table table-stripped table-bordered" cellspacing="0" id="example1">
                    <thead>
                      <tr>
                        <th >Sr No</th>
                          <th >Event Name</th>
                          <th >Event Date</th>
                          <th >Event Time</th>
                          <th >Event Description</th>
                          <th >Event Venue</th>
                          <th >Venue City</th>
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
    <!--Custom JavaScript -->




    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->
    <!-- Form validation -->
    <script src="js/lib/form-validation/jquery.validate.min.js"></script>
    <!-- <script src="js/lib/form-validation/jquery.validate-init.js"></script> -->
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

    <script src="js/event.js"></script>
      <script src="dropzone/dropzone.js" type="text/javascript"></script>
    <script type='text/javascript'>
    Dropzone.autoDiscover = false;
    $(".dropzone").dropzone({
        addRemoveLinks: true,
        removedfile: function(file) {
            var name = file.name;
            var eventgallery = $("#eventgallery").val();
            $.ajax({
                type: 'POST',
                url: './src/uploadeventgallary.php',
                data: {name: name,eventgallery:eventgallery,request: 2},
                sucess: function(data){
                    console.log('success: ' + data);
                }
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });
    </script>
    <script>

    </script>

</body>
</html>
