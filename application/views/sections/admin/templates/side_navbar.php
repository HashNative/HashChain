<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="<?php echo base_url('assets/img/profile_small.jpg') ?>" />
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
                    <a href="<?php echo base_url('Dashboard/admindashboard') ?>"><i class="fa fa-th-large"></i><span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-plus"></i></i><span class="nav-label">Add</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url('Add/addsections') ?>"><span class="nav-label">Sections</span></a></li>
                        <li><a href="<?php echo base_url('Add/addstaff') ?>"><span class="nav-label">Staff</span></a></li>
                        <li><a href="<?php echo base_url('Add/addmaterials') ?>"><span class="nav-label">Materials</span></a></li>
                        <li><a href="<?php echo base_url('Add/addmainstockmaterials') ?>"><span class="nav-label">Main Stock Materials</span></a></li>
                        <li><a href="<?php echo base_url('Add/addfinalgoods') ?>"><span class="nav-label">Final Goods</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope-open"></i></i><span class="nav-label">View</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url('View/viewstaff') ?>"><span class="nav-label">Staff</span></a></li>
                        <li><a href="<?php echo base_url('View/viewmaterials') ?>"><span class="nav-label">Materials</span></a></li>
                        <li><a href="<?php echo base_url('View/viewpurchasedmaterials') ?>"><span class="nav-label">Purchased Materials</span></a></li>
                        <li><a href="<?php echo base_url('View/viewdetailedmaterials') ?>"><span class="nav-label">Detailed Materials</span></a></li>
                        <li><a href="<?php echo base_url('View/viewtransferedmaterials') ?>"><span class="nav-label">Transfered Materials</span></a></li>
                        <li><a href="<?php echo base_url('View/viewcashstock') ?>"><span class="nav-label">Cash Stock</span></a></li>
                        <li><a href="<?php echo base_url('View/viewmainstock') ?>"><span class="nav-label">Main Stock</span></a></li>
                        <li><a href="<?php echo base_url('View/viewcompanystock') ?>"><span class="nav-label">Company Stock</span></a></li>
                        <li><a href="<?php echo base_url('View/viewfinalgoods') ?>"><span class="nav-label">Final Goods</span></a></li>
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