<?php 

    require_once 'init.php';
    require_once 'model/Checked.php';
    if (!isset($_SESSION["login"])) {
        header("location:view/auth/login-view.php");
    }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>S-UPACARA</title>

    <!-- Favicon -->
    <link rel="icon" href="public/img/core-img/favicon.ico">


    <!-- Data Table Stylesheet -->
    <link rel="stylesheet" href="public/css/plugins/data-table-css/datatables.min.css">

    <!-- Morris Stylesheet -->
    <link rel="stylesheet" href="public/css/plugins/morris-css/morris.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="public/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="public/css/responsive.css">

</head>

<body>

    <div class="page-wrapper">

        <!-- ###### Layout Container Area ###### -->
        <div class="layout-container-area">

            <!-- Side Menu Area -->
            <div class="side-menu-area">

                <div class="logo-bar">
                    <!-- logo -->
                    <a href="index.php" class="logo">
                        <span class="big-logo">
                            <img src="public/img/core-img/logo3.png" alt="">
                        </span>
                        <span class="small-logo">
                            <img src="public/img/core-img/logo2.png" alt="">
                        </span>
                    </a>
                </div>

                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview active">
                        <a href="dashboard.php"><i class="icon_drive"></i><span>Dashboard</span></a>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="icon-profile-male"></i><span>Anggota</span></a>
                        <ul class="treeview-menu">
                            <li><a href="view/anggota/anggota-view.php"><i class="fa fa-eye"></i>Anggota</a></li>
                            <li><a href="view/anggota/createAnggota-view.php"><i class="fa fa-plus-circle"></i>Tambah Anggota</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="icon_genius"></i><span>Kelas</span></a>
                        <ul class="treeview-menu">
                            <li><a href="view/kelas/kelas-view.php"><i class="fa fa-eye"></i>Kelas</a></li>
                            <li><a href="view/kelas/createKelas-view.php"><i class="fa fa-plus-circle"></i>Tambah Kelas</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-user-o"></i><span>Guru</span></a>
                        <ul class="treeview-menu">
                            <li><a href="view/guru/guru-view.php"><i class="fa fa-eye"></i>Guru</a></li>
                            <li><a href="view/guru/createGuru-view.php"><i class="fa fa-plus-circle"></i>Tambah Guru</a></li>
                        </ul>           
                    </li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-group"></i><span>Petugas</span></a>
                        <ul class="treeview-menu">
                            <li><a href="view/petugas/petugas-view.php"><i class="fa fa-eye"></i>Petugas</a></li>
                            <li><a href="view/petugas/createPetugas-view.php"><i class="fa fa-plus-circle"></i>Tambah Petugas</a></li>
                        </ul>           
                    </li>
                    <li class="treeview">
                        <a href=""><i class="icon-profile-male"></i><span>Admin</span></a>
                        <ul class="treeview-menu">
                            <li><a href="view/admin/admin-view.php"><i class="fa fa-eye"></i>Admin</a></li>
                        </ul>
                    </li>                    
                </ul>
            </div>

            <!-- Layout Container -->
            <div class="layout-container sidemenu-container">

                <!-- ***** Page Top Bar Area ***** -->
                <div class="page-top-bar-area d-flex align-items-center justify-content-between">

                    <div class="logo-trigger-search-area d-flex align-items-center">
                        <!-- Logo Trigger -->
                        <div class="logo-trigger-area d-flex align-items-center">
                            <!-- Trigger -->
                            <div class="top-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <!-- Top Search Bar -->
                        <div class="top-search-bar ml-5">
                            <form action="#" method="get">
                                <input type="search" name="search" class="top-search" placeholder="Search...">
                                <button type="submit"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <!-- User Meta -->
                    <div class="user-meta-data d-flex align-items-center">
                        <!-- Notifications -->

                        <!-- Profile -->
                        <div class="topbar-profile">
                            <!-- Thumb -->
                            <div class="user---thumb">
                                <img src="public/img/member-img/women.jpg" alt="">
                                <p><i class="fa fa-angle-down"></i></p>
                            </div>

                            <!-- Profile Data -->
                            <div class="profile-data">
                                <!-- Profile User Details -->
                                <div class="profile-user--details" style="background-image: url(.ublic/img/thumbnails-img/profile-bg.jpg);">
                                    <!-- Thumb -->
                                    <div class="profile---thumb-det">
                                        <img src="public/img/member-img/women.jpg" alt="">
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="profile---text-details">
                                        <h6>Samantha Sarah</h6>
                                        <a href="dashboard-1.html">mark.ste@gmail.com</a>
                                    </div>
                                </div>
                                <!-- Profile List Data -->
                                <a class="profile-list--data" href="view/user/show_userProfil.php">
                                    <!-- Profile icon -->
                                    <div class="profile--list-icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="notification--list-body-text profile">
                                        <h6 onclick="">My profile</h6>
                                    </div>
                                </a>
                                <!-- Profile List Data -->
                                <a class="profile-list--data" href="#">
                                    <!-- Profile icon -->
                                    <div class="profile--list-icon">
                                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="notification--list-body-text profile">
                                        <h6>Support</h6>
                                    </div>
                                </a>
                                <!-- Profile List Data -->
                                <a class="profile-list--data" href="model/Validate.php?aksi1=logO2">
                                    <!-- Profile icon -->
                                    <div class="profile--list-icon">
                                        <i class="fa fa-sign-out text-danger" aria-hidden="true"></i>
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="notification--list-body-text profile">
                                        <h6>Sign-out</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper wrapper-content">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <!-- Widget Content -->
                                <div class="widget-content-style rounded-0 two bg-gradient-primary zoom-effect mb-30">
                                    <div class="row">
                                        <div class="col-4">
                                            <!-- Icon -->
                                            <div class="widget-style-two-icon">
                                                <i class="icon-profile-male fa-5x"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 text-right">
                                            <!-- Text -->
                                            <div class="widget-style-two-text">
                                                <?php 
                                                // $huruf = 'x rpl 1|1';
                                                // echo $huruf;
                                                // $huruf = explode('|',$huruf);
                                                // print_r($huruf);
                                                ?>
                                                <p>Data Anggota</p>
                                                 <?php $dat = 0; foreach ($anggota->tampil_all () as $key ): ?>
                                                    <?php $dat++; ?>
                                                <?php endforeach ?>
                                                <h2 class="widget-content--text"><?php echo $dat ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <!-- Widget Content -->
                                <div class="widget-content-style lazur-bg bg-gradient-info zoom-effect mb-30">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="icon_genius fa-5x"></i>
                                        </div>
                                        <div class="col-8 text-right">
                                            <span> Data Kelas </span>
                                            <?php $dat = 0; foreach ($kelas->tampil_all () as $key ): ?>
                                                    <?php $dat++; ?>
                                                <?php endforeach ?>
                                            <h2 class="widget-content--text color-white"><?php echo $dat ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <!-- Widget Content -->
                                <div class="widget-content-style yellow-bg bg-gradient-danger zoom-effect mb-30">
                                    <div class="row">
                                        <div class="col-4">
                                            <i class="fa fa-user-o fa-5x"></i>
                                        </div>
                                        <div class="col-8 text-right">
                                            <span> Data Guru </span>
                                            <?php $dat = 0; foreach ($guru->tampil_all () as $key ): ?>
                                                    <?php $dat++; ?>
                                                <?php endforeach ?>
                                            <h2 class="widget-content--text color-white"><?php echo $dat ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery 2.2.4 -->
    <script src="public/assets/js/jquery/jquery.2.2.4.min.js"></script>
    <!-- Bootsrap js -->
    <script src="public/assets/js/bootstrap/popper.min.js"></script>
    <script src="public/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/plugins-js/menu-active.js"></script>

    <!-- Plugins js -->
    <script src="public/js/plugins-js/morrris-graph-js/morris-raphael.js"></script>
    <script src="public/js/plugins-js/morrris-graph-js/morris-demo.js"></script>
    <script src="public/js/plugins-js/morrris-graph-js/morris.js"></script>

    <!-- Data Table js -->
    <script src="public/js/plugins-js/data-table-js/data-table.bootstrap.min.js"></script>
    <script src="public/js/plugins-js/data-table-js/data-table.min.js"></script>
    <script src="public/js/plugins-js/data-table-js/data-table-active.js"></script>

    <!-- Active js -->
    <script src="public/js/active.js"></script>

</body>

</html>