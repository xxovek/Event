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
    <title>Expenses</title>
    <link rel="icon" href="./images/logo.png" size="20*20" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <style>
        a.lightbox img {
            height: 150px;
            border: 3px solid white;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, .3);
        }
        .lightbox-target {
            position: fixed;
            top: -100%;
            width: 100%;
            background: rgba(0, 0, 0, .7);
            opacity: 0;
            -webkit-transition: opacity .5s ease-in-out;
            -moz-transition: opacity .5s ease-in-out;
            -o-transition: opacity .5s ease-in-out;
            transition: opacity .5s ease-in-out;
            overflow: hidden;
        }

        .lightbox-target img {
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-height: 0%;
            max-width: 0%;
            border: 3px solid white;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, .3);
            box-sizing: border-box;
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
        }
        a.lightbox-close {
            display: block;
            width: 290px;
            height: 50px;
            box-sizing: border-box;
            background: #3b9683;
            color: black;
            text-decoration: none;
            position: absolute;
            top: -80px;
            right: 0;
            -webkit-transition: .5s ease-in-out;
            -moz-transition: .5s ease-in-out;
            -o-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
        }
        a.lightbox-close:before {
            content: "";
            display: block;
            height: 30px;
            width: 1px;
            background: black;
            position: absolute;
            left: 26px;
            top: 10px;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        a.lightbox-close:after {
            content: "";
            display: block;
            height: 30px;
            width: 1px;
            background: black;
            position: absolute;
            left: 26px;
            top: 10px;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        .lightbox-target:target {
            opacity: 1;
            top: 0;
            bottom: 0;
        }

        .lightbox-target:target img {
            max-height: 70%;
            max-width: 70%;
        }

        .lightbox-target:target a.lightbox-close {
            top: 140px;
        }
    </style>

</head>

<body class="fix-header fix-sidebar">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <!-- <div id="main-wrapper"> -->
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" >
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" style="height: 30%;width: 50%;"/></b>

                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Ecommerce </a></li>
                                <li><a href="index1.html">Analytics </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Apps</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Email</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html">Compose</a></li>
                                <li><a href="email-read.html">Read</a></li>
                                <li><a href="email-inbox.html">Inbox</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-flot.html">Flot</a></li>
                                <li><a href="chart-morris.html">Morris</a></li>
                                <li><a href="chart-chartjs.html">ChartJs</a></li>
                                <li><a href="chart-chartist.html">Chartist </a></li>
                                <li><a href="chart-amchart.html">AmChart</a></li>
                                <li><a href="chart-echart.html">EChart</a></li>
                                <li><a href="chart-sparkline.html">Sparkline</a></li>
                                <li><a href="chart-peity.html">Peity</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Features</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Bootstrap UI <span class="label label-rouded label-warning pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-alert.html">Alert</a></li>
                                <li><a href="ui-button.html">Button</a></li>
                                <li><a href="ui-dropdown.html">Dropdown</a></li>
                                <li><a href="ui-progressbar.html">Progressbar</a></li>
                                <li><a href="ui-tab.html">Tab</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                            </ul>
                        </li>
						<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Components <span class="label label-rouded label-danger pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="uc-calender.html">Calender</a></li>
                                <li><a href="uc-datamap.html">Datamap</a></li>
                                <li><a href="uc-nestedable.html">Nestedable</a></li>
                                <li><a href="uc-sweetalert.html">Sweetalert</a></li>
                                <li><a href="uc-toastr.html">Toastr</a></li>
                                <li><a href="uc-weather.html">Weather</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-editor.html">Editor</a></li>
                                <li><a href="form-dropzone.html">Dropzone</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-bootstrap.html">Basic Tables</a></li>
                                <li><a href="table-datatable.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Layout</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-blank.html">Blank</a></li>
                                <li><a href="layout-boxed.html">Boxed</a></li>
                                <li><a href="layout-fix-header.html">Fix Header</a></li>
                                <li><a href="layout-fix-sidebar.html">Fix Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">EXTRA</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Pages <span class="label label-rouded label-success pull-right">8</span></span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-invoice.html">Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="page-error-400.html">400</a></li>
                                        <li><a href="page-error-403.html">403</a></li>
                                        <li><a href="page-error-404.html">404</a></li>
                                        <li><a href="page-error-500.html">500</a></li>
                                        <li><a href="page-error-503.html">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google</a></li>
                                <li><a href="map-vector.html">Vector</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-level-down"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                          <div class="row">
                              <div class="col-md-12">
                                  <button type="button" id="button1" class="btn btn-success btn-rounded m-b-10 m-l-5" style = "float:right;">Record Expenses</button>
                                  <div id="data"></div>
                              </div>
                          </div>

                          <div class="card card-outline-primary">
                              <div class="card-body">
                                  <form method="post" id="addexpence" enctype="multipart/form-data">
                                    <div class="card-header">
                                        <h4 class="m-b-0 text-white">UPDATE EXPENSES DETAILS</h4>
                                    </div>
                                      <div class="form-body">
                                          <div class="row p-t-20">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="control-label">Date</label><span id="selectdate1" style="float:right;"></span>
                                                      <input type="date" class="form-control" id="date1" name="date1"/>
                                                      <small class="form-control-feedback"> Enter date</small>
                                                    </div>
                                              </div>

                                              <div class="col-md-6">
                                                  <div class="form-group  has-success">
                                                      <label class="control-label">Category</label><span id="selectcategory1" style="float:right;"></span>

                                                      <select name="category1" id="category1" class="form-control select2-select" class="dropdown-menu"  style="width:100%;" /></select>
                                                      <small class="form-control-feedback"> Select Expense Category.</small> </div>
                                              </div>

                                          </div>

                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <input type="hidden" name="f1" id="f1" class="form-control"/>
                                                      <label class="control-label">Amount</label>
                                                      <span id="selectamount1" style="float:right;"></span>
                                                        <input id="amount1" name="amount1" class="form-control" type="text" onkeypress="return Amountfloat(this.id,event);" /></div>
                                                      <small class="form-control-feedback"> Enter Total Amount </small>
                                                     </div>


                                              <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="control-label">Status</label>
                                                  <span id="selectstatus1" style="float:right;"></span>
                                                    <select name="status1" id="status1" class="form-control custom-select" class="dropdown-menu" data-placeholder="Choose a Status"  style="width:100%;" >
                                                          <option value=""></option>
                                                          <option value="PAID">PAID</option>
                                                          <option value="UNPAID">UNPAID</option>
                                                      </select>
                                                 </div>
                                              </div>

                                          </div>

                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="control-label">Merchant Name</label>
                                                      <span id="selectmerchantname1" style="float:right;"></span>
                                                      <input type="text" class="form-control" name="merchantname1" id="merchantname1" maxlength="20" autocomplete="off" onkeypress="return AlphaBets(event);" />
                                                  </div>
                                              </div>

                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="control-label">Narration</label>
                                                    <span id="selectnarrationname1" style="float:right;"></span>
                                                    <input type="text" class="form-control" name="narrationname1" id="narrationname1" maxlength="20" autocomplete="off" onkeypress="return AlphaBets(event);"/></div>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="row">
                                              <div class="col-md-12 ">
                                                  <div class="form-group">
                                                      <label>Ref#</label>
                                                      <input type="text" name="ref1" id="ref1" class="form-control" maxlength="20" onkeypress="return IsAlphaNumericValue(event);"/>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Description</label>
                                              <textarea  name="description1" id="description1" rows="2" class="form-control" autocomplete="off"/></textarea>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-actions">
                                          <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> SAVE</button>
                                          <button type="button" class="btn btn-inverse" onclick="window.location.reload();">CANCEL</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                                    <div id="hidetable">
                            <div class="card-body">
                                <h4 class="card-title">EXPENCES</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="itemTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>DATE</th>
                                                <th>CATEGORY</th>
                                                <th>MERCHANT</th>
                                                <th>STATUS</th>
                                                <th>AMOUNT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody id="loadtabledata">
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <td class="text-center">Total Expences</td>
                                                <td class="text-center" id="totalinvoices"></td>
                                                <td></td>
                                                <td class="text-center">Total Expence Amount</td>
                                                <td class="text-center" id="Total_amount"></td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                              </div>

                        </div>

                    </div>
                </div>
                <!-- End PAge Content -->
            </div>


            <div class="lightbox-target" id="target_image">
                <span id="imagid1" style="width: 100%;height: 100%;"></span>
                <a class="lightbox-close" href="#"></a>
            </div>
            <div class="modal" id="viewExpenceReceiptModal" role="dialog" style="margin-top: 31px;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" id="close_image_btn" class="close" data-dismiss="modal" >&times;</button>
                        </div>
                        <form>
                      <div class="col-md-12">
                                <div class="form-group">
                                    <a class="lightbox" href="#target_image">
                                        <span id="imagid"></span>
                                    </a>
                                </div>
                        </div>

                      </form>
                    </div>
                </div>
            </div>

            <div class="modal" id="add_category_modal" role="dialog" style="margin-top:31px;">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                          NEW CATEGORY
                          <button type="button" class="close" data-dismiss="modal" >&times;</button>
                      </div>
                        <form method="post" id="addexpenceCategory">
                             <div class="col-md-12">
                          <div class="form-group">
                               <span id="insertcategory" style="float:right;"></span>
                              <label for="category_name">Category Name</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="category_name" id="category_name" maxlength="50" title="Enter alphabets only" autocomplete="off" onkeypress="return AlphaBets(event,this);" require/>
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="checkbox checkbox-success">
                            <input type="checkbox" data-toggle="collapse" data-target="#collapse_Category" id="Category_checkbox" value="" />
                              <label for="Category_checkbox">  Make this a sub-category?</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <div id="collapse_Category" class="collapse">
                              <label for="pwd1">Main Category</label>
                              <div class="input-group">
                                  <span id="select_main_category" style="float:right;"></span>
                                    <select name="main_category" id="main_category" class="form-control custom-select2-select" class="dropdown-menu" style="width:100%;" /></select>
                              </div>
                          </div>
                        </div>
                      </div>
                          <div class="modal-footer"  style="float:right;">
                          <button type="button" class="btn btn-success waves-effect waves-light m-r-10" onclick="addcategory();">Submit</button>
                          <button type="submit" class="btn btn-inverse waves-effect waves-light" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
                                         <div id="uploadModal" class="modal" role="dialog">
                                             <div class="modal-dialog" >
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                        Upload Bill Receipt
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                     </div>
                                                         <form id="uploadForm" action="upload_image_in_dir_for_expence.php" method="post" enctype='multipart/form-data' style="background-color:#fff;">
                                                               <div class="col-md-12">
                                                                 <input type="hidden" name="upload_expence_id" id="upload_expence_id"/>
                                                                 <div class="col-md-6">
                                                                   <div class="form-group">
                                                                     <B>Upload Your Bill Receipt</B>
                                                                     <br>
                                                                     <input class="form-control" type="file" name="userImage" id="file" onchange="loadFile(event)" style="margin-top: 2%;margin-bottom: 2%;" required>
                                                                 </div></div>

                                                                 <div class="col-md-6">
                                                                   <div class="form-group">
                                                                     <left>
                                                                         <img id="output" style="display:none;margin-top:10px;height: 100px;width: 165px;" />
                                                                     </left>
                                                                 </div></div>
                                                                 <script>
                                                                     var loadFile = function(event) {
                                                                         document.getElementById('output').style.display = 'block';
                                                                         var output = document.getElementById('output');
                                                                         output.src = URL.createObjectURL(event.target.files[0]);
                                                                     };
                                                                 </script>
                                                             </div>
                                                             <div class="modal-footer" style="float:right;">
                                                                 <input class="btn btn-success waves-effect waves-light m-r-10" type='submit' value='SAVE FILE' name='upload' />
                                                                 <input class="btn btn-inverse waves-effect waves-light" type='button' value='CANCEL' onclick="window.location.reload();" data-dismiss="modal" />
                                                             </div>
                                                         </form>
                                                 </div>
                                             </div>
                                         </div>



            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
          <footer class="footer"><?php include("sticky_footer.php");?></footer>
    <!-- </div> -->
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
    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
    <script src="./select2/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="./select2/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="./select2/select4.css" rel="stylesheet" />
    <script src="./select2/select4.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js"></script>

<script>

  function display_expence() {
      $.ajax({
          type: "POST",
          url: "display_expenses.php",
          data: "getrow",
      }).done(function(data) {
          response = JSON.parse(data);
          var count = Object.keys(response).length;
          var Total_amount = 0;
          for (var i = 0; i < count; i++) {
          var expence_id = parseInt(response[i]['expence_id']);
            //var expence_id = 5;
          //alert(expence_id);
    $('#loadtabledata').append('<tr><td class="text-center">'+(i + 1)+
    '</td><td class="text-center">'
    +response[i]['expence_date']+
    '</td><td class="text-center"><button type="button" class="btn btn-link" title="Edit Expence" data-toggle="collapse" style="font-size:15px; padding: 0px;color:#468ebb" name="submit" onclick="updateexpence('+expence_id+');">'
    +response[i]['expence_category']+
    '</button></td><td class="text-center">'
    +response[i]['expence_merchant']+
    '</td><td class="text-center">'
    +response[i]['expence_status']+
    '</td><td class="text-center">'+response[i]['expence_amount']+
    '</td><td class="text-center"><div class="btn-group"><button type="button" class="btn btn-success" name="submit"  title="Upload Bill Receipts" data-toggle="collapse" onClick="uploadBillReceipt('+expence_id+');"><i class="fa fa-upload"></i></button><button type="button" class="btn btn-warning" name="submit" title="View Bill Receipts" data-toggle="collapse" onClick="viewexpencereceipt(' + expence_id + ');"><i class="fa fa-eye"></i></button><button type="button" class="btn btn-primary" data-toggle="collapse" name="submit" title="Edit Expence" onclick="updateexpence(' + expence_id + ');"><i class="fa fa-edit"></i></button><button type="button" title="Remove Expence" class="btn btn-danger" name="submit"  onClick="removeexpence(' + expence_id + ');"><i class="fa fa-trash"></i></button></div></td></tr>');

    Total_amount = parseInt(response[i]['expence_amount']) + Total_amount;
          }
          $("#totalinvoices").html("<strong>" + count + "</strong>");
          $("#Total_amount").html("<strong>" + Total_amount + "</strong>");
          $("#itemTable").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
          });

      }).fail(function(jqXHR, textStatus) {
          alert('Request Failed');
      });
  }
</script>
<script type="text/javascript">
    function ValidateFileUpload(param) {
        var fuData = document.getElementById('file');
        var FileUploadPath = fuData.value;
        if (FileUploadPath == '') {
        } else {
            var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

            if (Extension === "gif" || Extension === "png" || Extension === "bmp" || Extension === "jpeg" || Extension === "jpg" || Extension === "pdf") {

                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(fuData.files[0]);
                }
            }
            else {
                return 1;
            }
        }
    }
</script>
<script>
$(document).ready(function() {
display_expence();
display_category();
display_main_category();
 $("#addexpence").hide();
 });

 $('select').select2({
     allowClear: true,
     placeholder: "Select here"
 }).on('select2:close', function() {
     var el = $(this);
     if (el.val() === "#CATEGORY") {
      $("#add_category_modal").modal('show');
     }
 });


 $("#button1").click(function() {
     $("#demo").hide();
     $("#hidetable").hide();
     $("#button1").hide();
    $("#data").load("expences_content.php");
 });




         $("#uploadForm").on('submit', (function(e) {
             e.preventDefault();
             $.ajax({
                 url: "upload_image_in_dir_for_expence.php",
                 type: "POST",
                 data: new FormData(this),
                 contentType: false,
                 cache: false,
                 processData: false,
                 success: function(data) {
                     alert("Your Bill Receipts file uploaded Successfully...");
                     $('#uploadModal').modal('hide');
                     document.getElementById("uploadForm").reset();
                     document.getElementById('output').style.display = 'none';
                     window.location.reload();
                 },
                 error: function() {
                     window.location.reload();
                 }
             });
         }));

         $('#addexpence').on("submit", function(e) {
             var date  = $("#date1").val();
             var amount = $("#amount1").val();
             var merchantname = $("#merchantname1").val();
             var narrationname = $("#narrationname1").val();
             var category = document.getElementById('category1').options[document.getElementById('category1').selectedIndex].text
             var ref = $("#ref1").val();
             var status = $("#status1").val();
             var description = $("#description1").val();
             var f11 = document.getElementById('f1').value;
             e.preventDefault();
             if (date === "") {
                 $("#selectdate1").html("<font color='red'>Please Insert Date</font>");
             } else {
                 $("#selectdate1").html("");
                 if (amount === "") {
                     $("#selectamount1").html("<font color='red'>Insert Amount</font>");
                 } else {
                     $("#selectamount1").html("");
                     if (merchantname === "") {
                         $("#selectmerchantname1").html("<font color='red'>Insert Merchant Name</font>");
                     } else {
                         $("#selectmerchantname1").html("");
                         if (narrationname === "") {
                             $("#selectnarrationname1").html("<font color='red'>Insert Narration Name</font>");
                         } else {
                             $("#selectnarrationname1").html("");
                             if (category === "" || category === "#CATEGORY" || category === "ADD NEW CATEGORY") {
                                 $("#selectcategory1").html("<font color='red'>Please Select Category</font>");
                             } else {
                                 $("#selectcategory1").html("");
                                 if (status === "") {
                                     $("#selectstatus1").html("<font color='red'>Please Select Status</font>");
                                 } else {
                                     $("#selectstatus1").html("");
                                     $.ajax({
                                         url: "insert_addexpence.php",
                                         type: "POST",
                                         data: {
                                             f1: f11,
                                             ref: ref,
                                             amt: amount,
                                             cat: category,
                                             mname: merchantname,
                                             narnme: narrationname,
                                             date1: date,
                                             status: status,
                                             desc: description
                                         },
                                         beforeSend: function() {
                                             $('#submit').val("Inserting...");
                                         },
                                         success: function(data) {
                                             alert("Expense Updated Successfully")
                                             $('#addexpence')[0].reset();
                                             uploadBillReceipt_onSubmitExpence();
                                         }
                                     });
                                 }
                             }
                         }
                     }
                 }
             }
         });


     function uploadBillReceipt_onSubmitExpence() {
         $.ajax({
             url: "get_lastEnter_expence_id_for_uploadReceipt.php",
             method: "POST",
             data: "",
             success: function(data) {
                 response = JSON.parse(data);
                 expence_id = response['expence_id'];
                 uploadBillReceipt(expence_id);
             }
         });
     }

     function uploadBillReceipt(expence_id) {
      // alert(expence_id);
         $('#uploadModal').modal();
         $("#upload_expence_id").val(expence_id);
     }

     function viewexpencereceipt(expence_id) {
       //alert(expence_id);
         $.ajax({
             url: "get_expence_file_name.php",
             method: "POST",
             data: ({
                 expence_id: expence_id
             }),
             success: function(data) {
                 response = JSON.parse(data);
                 if (response['image_not']) {
                     alert("Bill Receipt Not Uploaded");
                 } else {
                     $("#imagid").html('<img src="./BillReceipts/' + response['image_name'] + '" style="width: 100%;height: 100%;"/>');
                     $("#imagid1").html('<img src="./BillReceipts/' + response['image_name'] + '" style="width: 100%;height: 100%;"/>');
                     $('#viewExpenceReceiptModal').modal('show');
                 }
             }
         });
     }

     function updateexpence(expence_id) {
        //alert(expence_id);
         $("#button1").hide();
         $("#hidetable").hide();
         $("#addexpence").show();
         var abc = 'expence_id' + expence_id;
         $.ajax({
             url: "fetch_expence.php",
             method: "POST",
             data: ({
                 expence_id: expence_id
             }),
             success: function(data) {
                 response = JSON.parse(data);
                 $("#f1").val(response["expence_id"]);
                 $("#date").val(response['expence_date']);
                 $("#merchantname1").val(response['expence_merchant']);
                 $("#category1").empty();
                 $("#status1").empty();
                 display_category();
                 $("#status1").html("<option value='PAID'>PAID</option><option value='UNPAID'>UNPAID</option>");
                 $("#category1").append("<option value=" + response['expence_category'] + " selected=selected>" + response['expence_category'] + "</option>").trigger('change');
                 $("#status").append("<option value=" + response['expence_status'] + " selected=selected>" + response['expence_status'] + "</option>").trigger('change');
                 $("#amount1").val(response['expence_amount']);
                 $("#ref1").val(response['expence_ref']);
                 $("#narrationname1").val(response['expence_narration']);
                 $("#description1").val(response['expence_description']);
                 $("#file").val(response['receipts_name'])
             }
         });
     }

     function removeexpence(param) {
         var r = confirm("Are you Sure to Remove this Entry");
         if (r === true) {
             $.ajax({
                 url: "deleteexpense.php",
                 async: false,
                 cache: false,
                 method: "POST",
                 data: ({
                     expence_id: param
                 }),
                 success: function(data) {
                     alert("Expence Removed SuccessFully");
                     window.location.reload();
                 }
             });
         }
     }

     function addcategory() {
         var category_name = $("#category_name").val();

         if (category_name === "") {
             $("#insertcategory").html("<font color='red'>Please Insert Category Name</font>");

         } else {
           $("#insertcategory1").html("");
             var main_category = document.getElementById('main_category').options[document.getElementById('main_category').selectedIndex].text

             $.ajax({
                 url: "insert_addexpence_category.php",
                 method: "POST",
                 data: ({
                     category_name: category_name,
                     main_category: main_category
                 }),
                 success: function(data) {
                     alert("Category Added Successfully.");
                     $('#add_category_modal').modal('hide');
                 }
             });
         }
     }

     function display_main_category() {
         $.ajax({
             url: "get_category_values_main_category.php",
             async: false,
             cache: false,
             method: "POST",
             data: "row",
             success: function(data) {
                 $("#main_category").html(data);
             }
         });
     }

     function display_category() {
         $.ajax({
             url: "get_category_values.php",
             async: false,
             cache: false,
             method: "POST",
             data: "row",
             success: function(data) {
                 $("#category1").html(data);
             }
         });
     }
     $("#imagid").click(function() {
         $("#close_image_btn").click();
     });
 </script>
</body>
</html>
