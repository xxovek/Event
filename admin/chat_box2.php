
<?php
// session_start();
// if(isset($_SESSION['user_id']))
// {
// $uid = $_SESSION['user_id'];
$uid = '11';
include 'connection.php';
$result = mysqli_query($con,"select fname,email from users where  users.id='$uid'");
$user_fname="";
$user_email="";
      if(mysqli_num_rows($result)>0)
      {
        $row = mysqli_fetch_array($result);
        $user_fname =  $row[0];
        $user_email=$row[1];
      }
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
    <title>CHAT_BOX</title>
    <link rel="icon" href="./images/logo.png" size="20*20"/>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
    .container1 {
        border: 1px solid #dedede;
        background-color:#759475;
        font-size:13px;
        border-radius: 15px;
        padding: 10px;
        margin: 5px 0;
    }
    .dot {
        height: 15px;
        width: 15px;
        background-color: #008000;
        border-radius: 50%;
        display: inline-block;
    }
    .darker {

        border-color: #ccc;
        background-color: #B2C4B2;
    }
    message_write:focus, message_write:active {
        color: green;
    }
    .container1::after {
        content: "";
        clear: both;
        display: table;
    }

    .right-msg {
        float: right;

    }

    .time-right {
        float: right;
    }

    .time-left {
        float: left;
    }

    </style>
        <style>
            #custom-search-input {
                background: #e8e6e7 none repeat scroll 0 0;
                margin: 0;
                padding: 10px;
            }

            #custom-search-input .search-query {
                background: #fff none repeat scroll 0 0 !important;
                border-radius: 4px;
                height: 33px;
                margin-bottom: 0;
                padding-left: 7px;
                padding-right: 7px;
            }

            #custom-search-input button {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: 0 none;
                border-radius: 3px;
                color: #666666;
                left: auto;
                margin-bottom: 0;
                margin-top: 7px;
                padding: 2px 5px;
                position: absolute;
                right: 0;
                z-index: 9999;
            }

            .search-query:focus + button {
                z-index: 3;
            }

            .all_conversation button {
                background: #f5f3f3 none repeat scroll 0 0;
                border: 1px solid #dddddd;
                height: 38px;
                text-align: left;
                width: 100%;
            }

            .all_conversation i {
                background: #e9e7e8 none repeat scroll 0 0;
                border-radius: 100px;
                color: #636363;
                font-size: 17px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                width: 30px;
            }

            .all_conversation .caret {
                bottom: 0;
                margin: auto;
                position: absolute;
                right: 15px;
                top: 0;
            }

            .all_conversation .dropdown-menu {
                background: #f5f3f3 none repeat scroll 0 0;
                border-radius: 0;
                margin-top: 0;
                padding: 0;
                width: 100%;
            }

            .all_conversation ul li {
                border-bottom: 1px solid #dddddd;
                line-height: normal;
                width: 100%;
            }

            .all_conversation ul li a:hover {
                background: #dddddd none repeat scroll 0 0;
                color: #333;
            }

            .all_conversation ul li a {
                color: #333;
                line-height: 30px;
                padding: 3px 20px;
            }

            .member_list .chat-body {
                margin-left: 47px;
                margin-top: 0;
            }

            .top_nav {
                overflow: visible;
            }

            .member_list .contact_sec {
                margin-top: 3px;
            }

            .member_list li {
                padding: 6px;
            }

            .member_list ul {
                border: 1px solid #dddddd;
            }

            .chat-img img {
                height: 34px;
                width: 34px;
            }

            .member_list li {
                border-bottom: 1px solid #dddddd;
                padding: 6px;
            }

            .member_list li:last-child {
                border-bottom: none;
            }

            .member_list {
                height: 300px;
                overflow-x: hidden;
                overflow-y: auto;
            }

            .sub_menu_ {
                background: #e8e6e7 none repeat scroll 0 0;
                left: 100%;
                max-width: 233px;
                position: absolute;
                width: 100%;
            }

            .sub_menu_ {
                background: #f5f3f3 none repeat scroll 0 0;
                border: 1px solid rgba(0, 0, 0, 0.15);
                display: none;
                left: 100%;
                margin-left: 0;
                max-width: 233px;
                position: absolute;
                top: 0;
                width: 100%;
            }

            .all_conversation ul li:hover .sub_menu_ {
                display: block;
            }

            .new_message_head button {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                border: medium none;
            }

            .new_message_head {
                background: #f5f3f3 none repeat scroll 0 0;
                float: left;
                font-size: 13px;
                font-weight: 600;
                padding: 18px 10px;
                width: 100%;
            }

            .message_section {
                border: 1px solid #dddddd;
            }

            .chat_area {
                float: left;
                height: 300px;
                overflow-x: hidden;
                overflow-y: auto;
                width: 100%;
            }

            .chat_area li {
                padding: 14px 14px 0;
            }

            .chat_area li .chat-img1 img {
                height: 40px;
                width: 40px;
            }

            .chat_area .chat-body1 {
                margin-left: 50px;
            }

            .chat-body1 p {
                background: #D3D3D3 none repeat scroll 0 0;
                padding: 10px;
            }

            .chat_area .admin_chat .chat-body1 {
                margin-left: 0;
                margin-right: 50px;
            }

            .chat_area li:last-child {
                padding-bottom: 10px;
            }

            .message_write {
                background: #f5f3f3 none repeat scroll 0 0;
                float: left;
                padding: 15px;
                width: 100%;
            }

            .message_write textarea.form-control {
                height: 70px;
                padding: 10px;
            }

            .chat_bottom {
                float: left;
                margin-top: 13px;
                width: 100%;
            }

            .upload_btn {
                color: #777777;
            }

            .sub_menu_ > li a,
            .sub_menu_ > li {
                float: left;
                width: 100%;
            }

            .member_list li:hover {
                background: #428bca none repeat scroll 0 0;
                color: #fff;
                cursor: pointer;
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
                                <div class="chat_container">
                                  <div class="row">
                                  <div class="col-sm-3">
                                    <div class="col-sm-12 chat_sidebar">
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" id="search_name" class="search-query form-control" placeholder="Conversation"/>
                                                    <button class="btn btn-danger" type="button">
                                                        <span class=" glyphicon glyphicon-search"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="dropdown all_conversation">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-weixin" aria-hidden="true"></i> All Conversations
                                                    <span class="caret pull-right"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><a href="#"> All Conversation </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="member_list">
                                                <ul class="list-unstyled">
                                                     <span id="employee"></span>
                                                </ul>
                                            </div>
                                      </div>
                                    </div>

                                                    <div class="col-sm-6"  style="background-color:#D5DED5;">
                                                    <div class="col-sm-16 message_section">

                                                            <div class="new_message_head">
                                                                <div class="pull-left">
                                                                    <button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <div class="dropdown">
                                                                        <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fa fa-cogs" aria-hidden="true"></i> Setting
                                                                            <span class="caret"></span>
                                                                        </button>
                                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                                            <li><a href="#">Action</a></li>
                                                                        </ul>
                                                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                                            <li><a href="#">Delete</a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="chat_area">
                                                              <ul class="list-unstyled list1">
                                                            </ul>

                                                            </div>
                                                            <!--chat_area-->
                                                            <div class="message_write">
                                                                <textarea class="form-control" placeholder="type a message" name="msg" id="msg"></textarea>
                                                                <div class="clearfix"></div>
                                                                <div class="chat_bottom">
                                                                  <input type="button" value="Send" id="send_msg" class="pull-right btn btn-success"  onclick="message(document.getElementById('msg').value);">
                                                                </div>
                                                            </div>

                                                </div>
                                                </div>

                            </div>
                            </div>
                              </div>
                          </div>

                          <div class="card card-outline-primary">
                              <div class="card-body">

                              </div>
                          </div>


                        </div>

                    </div>
                </div>
                <!-- End PAge Content -->
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

    <script src="./select2/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="./select2/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="./select2/select4.css" rel="stylesheet" />
    <script src="./select2/select4.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js"></script>


    <script>
    function getEmployeeAdminInformation()
    {
    var user_email = '<?php echo $user_email?>';
              $.ajax({
                      type: "POST",
                      url: "getallemployeeadmin.php",
                      data: "",
                success: function(msg)
                 {
                   response = JSON.parse(msg);
                   var abc1='<li class="left clearfix"><span class="chat-img pull-left"><img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle"></span><div class="chat-body clearfix"><div class="header_sec"><strong class="primary-font">'+response[0]['user_name']+'</strong> <strong class="pull-right" style="color:green;">Admin</strong> </div></div> </li>';
                      $("#employee").append(abc1);

                   for(i=0;i<=response.length;i++)
                   {
                     var date2 = response[i]['Updated_at'].split(" ");
                    if(user_email==response[i]['Emp_email'])
                    {
                      var abc='<li class="left clearfix"><span class="chat-img pull-left"><img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle"></span><div class="chat-body clearfix"><div class="header_sec"><strong class="primary-font">'+response[i]['Emp_fname']+ " "+response[i]['Emp_lname']+'</strong> <strong class="pull-right "><span class="dot"></span></strong> </div></div> </li>';
                       $("#employee").append(abc);
                     }
                    else
                     {
                      var abc='<li class="left clearfix"><span class="chat-img pull-left"><img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle"></span><div class="chat-body clearfix"><div class="header_sec"><strong class="primary-font">'+response[i]['Emp_fname']+ " "+response[i]['Emp_lname']+'</strong> <strong class="pull-right "> '+date2[1]+'</strong> </div></div> </li>';
                       $("#employee").append(abc);

                    }

                    }
                  }
                });
    }

    function message(param)
    {
      var x =   document.getElementById('msg').value;
      if(x=="")
      {
        document.getElementById('msg').focus();
      }
      else {

      var user = '<?php echo $user_fname?>';
        $.ajax({
            type: "POST",
              url: "insertinto_msgdb.php",
                data: ({msg:param}),
                  beforeSend:function(){
            $("#send_msg").val("Sending...");
            },
            success: function(data)
            {
           var today = new Date();
           var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
          var xyz='  <div class="col-sm-8"  style="float:left;"><div class="container1"><b>'+user+' :</b> '+param+'<span class="time-right"> '+time+' </span> </div></div>';
           $(".list1").append(xyz);
          },
         complete:function(){
           $("#send_msg").val("Send");
         }
       });
    }

    }

    function display_message()
    {
      var user = '<?php echo $user_fname?>';
    $.ajax({
        type: "POST",
        url: "display_msg.php",
        data: "",
        success: function(data)
        {
          response = JSON.parse(data);
        for(i=0;i<=response.length;i++)
        {
          if(user==response[i]['Emp_name'])
          {
           var list1='<div class="col-sm-8" style="float:left;"><div class="container1"><b>'+response[i]['Emp_name']+'</b> : '+response[i]['message']+' <span class="time-right"> '+response[i]['Created_at']+' </span></div> </div>';

           $(".list1").append(list1);
          }
          else
           {
               var list2='<div class="col-sm-8" style="float:right;"><div class="container1 darker"><span class="left-msg"><b>'+response[i]['Emp_name']+'</b> : '+response[i]['message']+'</span> <span class="time-right">'+response[i]['Created_at']+'</span></div></div>';
                 $(".list1").append(list2);
          }
      }
      }

      });
    }

    </script>

    <script>
      jQuery(document).ready(function($) {
        getEmployeeAdminInformation();
        display_message();
      });
    </script>

</body>
</html>
<?php
// }
//  // else {
//  //   header("Location:index.php");
//  // }
 ?>
