<?php
require_once '../../init.php';
if (isset($_SESSION["login"])) {
    header("location:../../dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    
    <?php include '../partials/css.php'; ?>

</head>
<body>

    <div class="page-wrapper bg-img" style="background-image: url(../../public/img/thumbnails-img/bg-5.jpg);">
        <!-- Wrapper -->
        <div class="wrapper wrapper-content---">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Middle Box -->
                        <div class="middle-box bg-boxshadow text-center">
                            <h6 class="mb-50">Login to your Account</h6>

                            <!-- Form -->
                            <form action="../../model/Validate.php?aksi1=log" method="post">
                                <!-- Form Group -->
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                                </div>

                                <!-- Form Group -->
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                </div>

                                <button type="submit" class="btn btn-primary register">Login</button>
                            </form>
                            <a class="forgot_pass" href="#"><small>Forgot password?</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../partials/js.php'; ?>

</body>
</html>