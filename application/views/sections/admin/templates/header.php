<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if ($pageTitle) {
            echo $pageTitle;
        } else {
            echo "Admin Dashboard";
        }
        ?>
    </title>

    <!-- bootstrap -->
    <!-- font-awesome -->
    <!-- Toastr style -->
    <!-- Gritter -->
    <!-- animate.css -->
    <!-- style.css -->
    <!-- iCheck -->
    <!-- chosen -->
    <!-- bootstrap-tagsinput -->
    <!-- colorpicker -->
    <!-- cropper -->
    <!-- switchery -->
    <!-- jasny -->
    <!-- nouslider -->
    <!-- datapicker -->
    <!-- ionRangeSlider -->
    <!-- ionRangeSlider -->
    <!-- wesome-bootstrap-checkbox -->
    <!-- clockpicker -->
    <!-- daterangepicker -->
    <!-- select2 -->
    <!-- touchspin -->
    <!-- dualListbox -->




    <!-- index.html -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">




    <!-- form_advance -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">David Williams</span>
                                <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('Update/changepassword') ?>">Change Password</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('Login/adminlogin') ?>">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">IN+</div>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>Dashboard/admindashboard"><i class="fa fa-home"></i><span class="nav-label">Dashboards</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>staff/all"><i class="fa fa-address-book"></i><span class="nav-label">Staff</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>sections/all"><i class="fa fa-gears"></i><span class="nav-label">Sections</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>finalGoods/all"><i class="fa fa-shopping-cart"></i><span class="nav-label">Final Goods</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>materials/all"><i class="fa fa-shopping-cart"></i><span class="nav-label">Materials</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i></i><span class="nav-label">Stock</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url() ?>mainStockMaterials/add"><span class="nav-label">Add Stock</span></a></li>
                            <li><a href="<?php echo base_url() ?>mainStockMaterials/all"><span class="nav-label">All Stocks</span></a></li>
                            <li><a href="<?php echo base_url() ?>mainStockMaterials/reportCashStocks"><span class="nav-label">Cash Stock Report</span></a></li>
                            <li><a href="<?php echo base_url() ?>mainStockMaterials/reportCompanyStocks"><span class="nav-label">Company Stock Report</span></a></li>
                            <li><a href="<?php echo base_url() ?>mainStockMaterials/reportMainStocks"><span class="nav-label">Main Stock Report</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-truck"></i></i><span class="nav-label">Transfers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url() ?>transfers/add"><span class="nav-label">Add Transfer</span></a></li>
                            <li><a href="<?php echo base_url() ?>transfers/all"><span class="nav-label">Transfers Report</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>messages/all"><i class="fa fa-envelope"></i><span class="nav-label">Messages</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pagelines"></i><span class="nav-label">#########</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-open"></i></i><span class="nav-label">View</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url('View/viewpurchasedmaterials') ?>"><span class="nav-label">Purchased Materials</span></a></li>
                            <li><a href="<?php echo base_url('View/viewdetailedmaterials') ?>"><span class="nav-label">Detailed Materials</span></a></li>
                            <li><a href="<?php echo base_url('View/viewtransferedmaterials') ?>"><span class="nav-label">Transfered Materials</span></a></li>
                            <li><a href="<?php echo base_url('View/viewcashstock') ?>"><span class="nav-label">Cash Stock</span></a></li>
                            <li><a href="<?php echo base_url('View/viewmainstock') ?>"><span class="nav-label">Main Stock</span></a></li>
                            <li><a href="<?php echo base_url('View/viewcompanystock') ?>"><span class="nav-label">Company Stock</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-open"></i></i><span class="nav-label">Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url('Report/reportdailycost') ?>"><span class="nav-label">Daily Cost Report</span></a></li>
                            <li><a href="<?php echo base_url('Report/reportdailytransfer') ?>"><span class="nav-label">Daily Transfer Report</span></a></li>
                            <li><a href="<?php echo base_url('Report/reportmonthlycost') ?>"><span class="nav-label">Monthly Cost Report</span></a></li>
                            <li><a href="<?php echo base_url('Report/reportgrn') ?>"><span class="nav-label">GRN Report</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-open"></i></i><span class="nav-label">Stock Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo base_url('Report/reportcashstock') ?>"><span class="nav-label">Cash Stock Report</span></a></li>
                            <li><a href="<?php echo base_url('Report/reportcompanystock') ?>"><span class="nav-label">Company Stock Report</span></a></li>
                            <li><a href="<?php echo base_url('Report/reportmainstock') ?>"><span class="nav-label">Main Stock Report</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li><span class="m-r-sm text-muted welcome-message">Welcome to Admin Panel</span></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a class="dropdown-item float-left" href="profile.html">
                                            <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="float-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica
                                                Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a class="dropdown-item float-left" href="profile.html">
                                            <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="<?php echo base_url() ?>messages/all" class="dropdown-item">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
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
                    </ul>
                </nav>
            </div>