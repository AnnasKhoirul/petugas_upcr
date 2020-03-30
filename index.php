<?php 

    require_once 'init.php';
    // if (!isset($_SESSION["login"])) {
    //     header("location:view/auth/login-view.php");
    // }

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

    <!-- Swiper Stylesheet -->
    <link rel="stylesheet" href="public/css/plugins/slider-css/carousel-swiper.css">



</head>

<body>

    <div class="page-wrapper">
         <!-- ###### Layout Container Area ###### -->
        </div>
        <!-- Page Top Bar Area -->
        <div class="page-top-bar-area d-flex align-items-center justify-content-between">      
            <div class="logo-trigger-search-area d-flex align-items-center">
                <div class="logo-trigger-area d-flex align-items-center">
                            <!-- Trigger -->
                            <div class="logo-bar">
                                <span class="big-logo">
                            <img src="public/img/core-img/logo4.png" alt="">
                        </span>
                            </div>
                        </div>
                <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="view/petugas-view.php">Petugas</a>
                                </li>
                            </ul>

            </div>

            <!-- User Meta -->
                    <div class="user-meta-data d-flex align-items-center">
                        <!-- Notifications -->
                        <ul>
                            <li class="nav-item">
                                    <a href="view/auth/login-view.php"><i class="fa fa-sign-in fa-2x"></i></a>
                                </li>
                        </ul>
                        
                    </div>
        </div>

        <!-- Wrapper -->
                <div class="wrapper wrapper-content">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12">

                                <!-- Ibox -->
                                <div class="ibox-home bg-boxshadow">
                                                                    <!-- Carousel Example -->
                                <div id="carousel-examp" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-examp" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-examp" data-slide-to="1"></li>
                                        <li data-target="#carousel-examp" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Carousel Inner -->
                                    <div class="carousel-inner">
                                        <!-- Carousel Item -->
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="public/img/thumbnails-img/slider.jpg" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                
                                            </div>
                                        </div>
                                        <!-- Carousel Item -->
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="public/img/thumbnails-img/slider1.jpg" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                
                                            </div>
                                        </div>
                                        <!-- Carousel Item -->
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="public/img/thumbnails-img/slider3.jpg" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                    <div class="ibox-title mb-30" style="padding-top: 30px">
                                        <h5><marquee>Data Petugas Upacara Hari ini</marquee></h5>
                                    </div>
                                    <!-- Ibox Content -->
                                    <div class="ibox-content">
                                        <!-- Table Responsive -->
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center; width: 5%">No.</th>
                                                        <th>Nama Upacara</th>
                                                        <th>Tanggal</th>
                                                        <th>Kelas</th>
                                                        <th>Detail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($petugas->tampil_dataP()==true): $no = 1;?>
                                                        <?php foreach ($petugas->tampil_dataP() as $data):?>
                                                            <?php 
                                                            // var_dump($data);
                                                                $tanggal = date("Y-m-d"); 
                                                                if ($data['tanggal'] == $tanggal) {
                                                                    ?>
                                                            <tr class="gradeX">
                                                                <td><?php echo $no++; ?></td>
                                                                <td><?php echo $data['nama_upcr'] ?></td>
                                                                <td><?php echo $data['tanggal']; ?></td>
                                                                <td><?php echo $data['kelas']; ?></td>
                                                                <td align="center">
                                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter<?php echo $data['id'] ?>">Detail</a>
                                                                    <?php include 'view/petugas/jabatan-view.php' ?>
                                                                </td>
                                                            </tr>
                                                                    <?php 
                                                                }
                                                             ?>
                                                            <?php endforeach ?>
                                                        <?php else: ?>
                                                        <tr class="gradeX">
                                                                        <td colspan="5" align="center"><strong>Hari Ini Tidak Ada Upacara</strong></td>
                                                                    </tr>    
                                                        <?php endif ?>
                                                    </tbody>
                                                </table>
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

    <!-- Carousel js -->
    <script src="public/js/plugins-js/slider-js/carousel-swiper.js"></script>
    <script src="public/js/plugins-js/slider-js/carousel-ui.js"></script>

    <!-- Active js -->
    <script src="public/js/active.js"></script>

</body>

</html>