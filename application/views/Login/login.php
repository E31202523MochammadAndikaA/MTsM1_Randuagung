<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/v2/assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	

    <link href="<?= base_url('assets/v2/assets/');?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/v2/assets/');?>phpvendor/fontawesome-free/css/all.min.css" rel="stylesheet"type="text/css">
    <link
        href="<?= base_url('assets/v2/assets/');?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/v2/assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin MTs Muhammadiyah 1 Randuagung</h1>
                                    </div>
                                    <form class="user" action="<?php echo base_url('Login/cek_log');?>" method ="POST">
                                        <div class="form-group">
                                            <input type="usernmae" class="form-control form-control-user"
                                                id="username" aria-describedby="username"
                                                placeholder="username" name="txt_user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="txt_pass">
                                        </div>

                                        <input href="index.html" type="submit" name="btn_log"value="Login"class="btn btn-primary btn-user btn-block" ></input>
                                        <!-- <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <a href="<?= base_url(); ?>Home/index" class="btn btn-primary btn-user btn-block">Kembali</a>
                                        
                                    </form>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url ('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url ('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src=" <?php ('vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url ('js/sb-admin-2.min.js')?>"></script>

</body>

</html>