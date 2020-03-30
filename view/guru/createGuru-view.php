<?php 

require_once '../../init.php';
require_once '../../model/Checked.php';

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

    <?php require_once '../partials/css.php'; ?>

</head>

<body>

    <div class="page-wrapper">

        <!-- ###### Layout Container Area ###### -->
        <div class="layout-container-area">

            <!-- Side Menu Area -->
            <div class="side-menu-area">

                <div class="logo-bar">
                    <!-- logo -->
                    <div class="logo">
                        <span class="big-logo">
                            <img src="../../public/img/core-img/logo3.png" alt="">
                        </span>
                        <span class="small-logo">
                            <img src="../../public/img/core-img/logo2.png" alt="">
                        </span>
                    </div>
                </div>

                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="../../dashboard.php"><i class="icon_drive"></i><span>Dashboard</span></a>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="icon-profile-male"></i><span>Anggota</span></a>
                        <ul class="treeview-menu">
                            <li><a href="../anggota/anggota-view.php"><i class="fa fa-eye"></i>Anggota</a></li>
                            <li><a href="../anggota/createAnggota-view.php"><i class="fa fa-plus-circle"></i>Tambah Anggota</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href=""><i class="icon_genius"></i><span>Kelas</span></a>
                        <ul class="treeview-menu">
                            <li><a href="../kelas/kelas-view.php"><i class="fa fa-eye"></i>Kelas</a></li>
                            <li><a href="../kelas/createKelas-view.php"><i class="fa fa-plus-circle"></i>Tambah Kelas</a></li>
                        </ul>           
                    </li>
                    <li class="treeview active">
                        <a href=""><i class="fa fa-user-o"></i><span>Guru</span></a>
                        <ul class="treeview-menu">
                            <li><a href="guru-view.php"><i class="fa fa-eye"></i>Guru</a></li>
                            <li class="active"><a href="createGuru-view.php"><i class="fa fa-plus-circle"></i>Tambah Guru</a></li>
                        </ul>           
                    </li>
                    <li class="treeview">
                        <a href=""><i class="fa fa-group"></i><span>Petugas</span></a>
                        <ul class="treeview-menu">
                            <li><a href="../petugas/petugas-view.php"><i class="fa fa-eye"></i>Petugas</a></li>
                            <li><a href="../petugas/createPetugas-view.php"><i class="fa fa-plus-circle"></i>Tambah Petugas</a></li>
                        </ul>           
                    </li>
                    <li class="treeview">
                        <a href=""><i class="icon-profile-male"></i><span>Admin</span></a>
                        <ul class="treeview-menu">
                            <li><a href="../admin/admin-view.php"><i class="fa fa-eye"></i>Admin</a></li>
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
                                <img src="../../public/img/member-img/women.jpg" alt="">
                                <p><i class="fa fa-angle-down"></i></p>
                            </div>

                            <!-- Profile Data -->
                            <div class="profile-data">
                                <!-- Profile User Details -->
                                <div class="profile-user--details" style="background-image: url(.ublic/img/thumbnails-img/profile-bg.jpg);">
                                    <!-- Thumb -->
                                    <div class="profile---thumb-det">
                                        <img src="../../public/img/member-img/women.jpg" alt="">
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
                                <a class="profile-list--data" href="../../model/Validate.php?aksi1=logO2">
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

                <!-- Ibox -->
                <div class="wrapper wrapper-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox bg-boxshadow mb-30">
                                    <!-- Title -->
                                    <div class="ibox-title basic-form mb-30">
                                        <h5>Tambah Guru</h5>
                                    </div>
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <form action="../../model/Validate.php?aksi1=tambahGuru" method="post">
                                          <!-- Form Start -->
                                        <div class="form-group row"><label class="col-lg-2 col-form-label">Kode Guru</label>
                                            <div class="col-lg-10">
                                              <input value="" type="text" class="form-control" name="kd_guru" placeholder="Kode Guru" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label class="col-lg-2 col-form-label">Nama</label>
                                            <div class="col-lg-10">
                                              <input value="" type="text" class="form-control" name="nama" placeholder="Nama" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label class="col-lg-2 col-form-label">Gender</label>
                                            <div class="col-lg-10">
                                                <select name="gender" class="selectpicker" data-style="btn-select-tag" selected="choice" title="Select Gender">
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label class="col-lg-2 col-form-label">Alamat</label>
                                            <div class="col-lg-10">
                                              <input value="" type="text" class="form-control" name="alamat" placeholder="Alamat" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row"><label class="col-lg-2 col-form-label">No HP</label>
                                            <div class="col-lg-10">
                                              <input value="" type="number" class="form-control" name="no_hp" placeholder="No HP" required="">
                                            </div>
                                        </div>
                                      <!-- Line -->
                                      <div class="ap-line-dashed"></div>

                                      <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <a href="guru-view.php" style="color: silver">
                                                <button class="btn btn-white btn-sm mr-10" type="button">Cancel</button>
                                            </a>
                                            <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php require_once '../partials/js.php'; ?>

</body>

</html>