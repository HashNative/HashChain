<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HashChain | User</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url('assets/css/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url('assets/js/plugins/gritter/jquery.gritter.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/iCheck/custom.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/chosen/bootstrap-chosen.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/cropper/cropper.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/switchery/switchery.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/jasny/jasny-bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/nouslider/jquery.nouislider.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/datapicker/datepicker3.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/ionRangeSlider/ion.rangeSlider.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/clockpicker/clockpicker.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/daterangepicker/daterangepicker-bs3.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/select2/select2.min.css" rel="stylesheet'); ?>">

    <link href="<?php echo base_url('assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/plugins/dualListbox/bootstrap-duallistbox.min.css'); ?>" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="<?php echo base_url('assets/css/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet">

    <!-- Ladda style -->
    <link href="<?php echo base_url('assets/css/plugins/ladda/ladda-themeless.min.css'); ?>" rel="stylesheet">

    <!-- Text spinners style -->
    <link href="<?php echo base_url('assets/css/plugins/textSpinners/spinners.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body>

<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="<?php echo base_url('assets/img/profile_small.jpg'); ?>"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Username</span>
                            <span class="text-muted text-xs block">User <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('Login/userlogin');?>">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        User
                    </div>
                </li>
                <li class="active">
                    <li>
                        <a href="<?php echo base_url('Dashboard/userdashboard'); ?>">
                            <i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                </li>
                <li>
                    <a href="<?php echo base_url('transfer/transfer'); ?>">
                        <i class="fa fa-paper-plane"></i> <span class="nav-label">Transfer</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('goods/finished_good'); ?>">
                        <i class="fa fa-truck"></i> <span class="nav-label">Enter Finished Goods</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('barcode/barcode_print'); ?>">
                        <i class="fa fa-barcode"></i> 
                        <span class="nav-label">
                                Print Barcode</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('attendance/view_attendance'); ?>">
                        <i class="fa fa-users"></i> <span class="nav-label">View Attendance</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('stock/view_main_stock'); ?>">
                        <i class="fa fa-home"></i> <span class="nav-label">View Main Stock</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url('goods/view_final_good'); ?>">
                        <i class="fa fa-shopping-cart"></i> <span class="nav-label">View Final Goods</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg sidebar-content">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to User Dashboard</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">15</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                    </a>
                                    <div>
                                        <small class="float-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                    </a>
                                    <div>
                                        <small class="float-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                    </a>
                                    <div>
                                        <small class="float-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html" class="dropdown-item">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="profile.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="float-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="grid_options.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html" class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="<?php echo base_url('Login/userlogin');?>">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    

        <br>
