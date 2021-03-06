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
                        <a href=""><i class="icon-genius"></i><span>Kelas</span></a>
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
                            <li class="active"><a href="petugas-view.php"><i class="fa fa-eye"></i>Petugas</a></li>
                            <li><a href="createPetugas-view.php"><i class="fa fa-plus-circle"></i>Tambah Petugas</a></li>
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
                                <a class="profile-list--data" href="../..//Validate.php?aksi1=logO2">
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
                                    <!-- Ibox-content -->
                                    <div class="ibox-content">
                                        <form action="../../model/Validate.php?aksi1=tambahJabatan" method="post">
                                          <!-- Form Start -->
                                          <div class="form-group row"><label class="col-lg-2 col-form-label">Pembina</label>
                                            <select name="pembina" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Pembina">
                                                <?php foreach ($guru->tampil_all() as $dataG): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataG['nama'];  ?>"><?php echo $dataG['nama']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group row"><label class="col-lg-2 col-form-label">Pemimpin</label>
                                            <select name="pemimpin" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Pemimpin">
                                                <?php foreach ($kelas->tampil_kelasU() as $dataK): $cek = $_SESSION['kel'];?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Kompi 1</label>
                                        <select name="kompi_1" id="kompi_1" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Kompi">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Kompi 2</label>
                                        <select name="kompi_2" id="kompi_2" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Kompi">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Kompi 3</label>
                                        <select name="kompi_3" id="kompi_3" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Kompi">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Bendera 1</label>
                                        <select name="bendera1" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Bendera">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Bendera 2</label>
                                        <select name="bendera2" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Bendera">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Bendera 3</label>
                                        <select name="bendera3" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Bendera">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">UUD</label>
                                        <select name="uud" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select UUD">
                                            <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                                <?php if ($dataK['kelas']==$cek): ?>
                                                    <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Pancasila</label>
                                        <select name="pancasila" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Pancasila">
                                         <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                            <?php if ($dataK['kelas']==$cek): ?>
                                                <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Protokol</label>
                                    <select name="protokol" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Protokol">
                                        <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                            <?php if ($dataK['kelas']==$cek): ?>
                                                <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Ajudan</label>
                                    <select name="ajudan" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Ajudan">
                                        <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                            <?php if ($dataK['kelas']==$cek): ?>
                                                <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Dirigen</label>
                                    <select name="dirigen" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Dirigen">
                                        <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                            <?php if ($dataK['kelas']==$cek): ?>
                                                <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Doa</label>
                                    <select name="doa" class="selectpicker" data-style="btn-select-tag" data-live-search="true" title="Select Doa">
                                        <?php foreach ($kelas->tampil_kelasU() as $dataK):?>
                                            <?php if ($dataK['kelas']==$cek): ?>
                                                <option data-tokens="ketchup mustard" value="<?php echo $dataK['nama']; ?>" data-subtext="<?php echo $dataK['kelas']; ?>"><?php echo $dataK['nama']; ?></option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <!-- Line -->
                                <div class="form-group mb-0 row">
                                    <div class="col-12">
                                        <a href="petugas-view.php" style="color: silver">
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