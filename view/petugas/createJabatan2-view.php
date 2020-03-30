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
                     <li class="treeview">
                        <a href=""><i class="fa fa-user-o"></i><span>Guru</span></a>
                        <ul class="treeview-menu">
                            <li><a href="../guru/guru-view.php"><i class="fa fa-eye"></i>Guru</a></li>
                            <li><a href="../guru/createGuru-view.php"><i class="fa fa-plus-circle"></i>Tambah Guru</a></li>
                        </ul>           
                    </li>
                    <li class="treeview active">
                        <a href=""><i class="fa fa-group"></i><span>Petugas</span></a>
                        <ul class="treeview-menu">
                            <li><a href="petugas-view.php"><i class="fa fa-eye"></i>Petugas</a></li>
                            <li class="active"><a href="createPetugas-view.php"><i class="fa fa-plus-circle"></i>Tambah Petugas</a></li>
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
                                        <h5>Tambah Petugas</h5>
                                    </div>
                                    <?php 
                                    echo $_SESSION['kel']; 
                                    $tampil_kelasU = $kelas->tampil_kelasU($_SESSION['kel_id']);
                                    $tampil_guru = $guru->tampil_all();
                                    $tampil_jabatan = $jabatan->tampil_data(@$_GET['tgl']);
                                    // echo '<pre>';
                                    // print_r($tampil_jabatan[0]);
                                    // echo '</pre>';

                                    // die();
                                    ?>
                                    <!-- Ibox Content -->
                                    <div class="ibox-content">
                                        <!-- Table Responsive -->
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center; width: 5%">No.</th>
                                                        <th>Jabatan</th>
                                                        <th style="text-align: center; width: 30%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                <td>1</td>
                                                <td>Pembina</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Create</a>
                                                    <?php include 'createJabatan3-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pemimpin</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Pemimpin">Create</a>
                                                    <?php include 'createJabatan3-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Kompi 1</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Kompi1">Create</a>
                                                    <?php include 'kompi1-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Kompi 2</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Kompi2">Create</a>
                                                    <?php include 'kompi2-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Kompi 3</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Kompi3">Create</a>
                                                    <?php include 'kompi3-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Bendera 1</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Bendera1">Create</a>
                                                    <?php include 'bendera1-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Bendera 2</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Bendera2">Create</a>
                                                    <?php include 'bendera2-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Bendera 3</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Bendera3">Create</a>
                                                    <?php include 'bendera3-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>UUD</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#uud">Create</a>
                                                    <?php include 'uud-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Pancasila</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Pancasila">Create</a>
                                                    <?php include 'pancasila-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Protokol</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Protokol">Create</a>
                                                    <?php include 'protokol-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Ajudan</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Ajudan">Create</a>
                                                    <?php include 'ajudan-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Dirigen</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Dirigen">Create</a>
                                                    <?php include 'dirigen-view.php' ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Doa</td>
                                                <td align="center">
                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#Doa">Create</a>
                                                    <?php include 'doa-view.php' ?>
                                                </td>
                                            </tr>
                                                </tbody>
                                            </table>
                                            <td>
                                                <a href="petugas-view.php" class="btn btn-primary">Selesai</a>
                                            </td>
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
</div>

<?php require_once '../partials/js.php'; ?>

</body>

</html>
