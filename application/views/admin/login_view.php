<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">

    <!-- Title Page-->
    <title>LOGIN</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url() ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>public/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= base_url() ?>images/UTT.png">
                            </a>
                            <div class="text-danger"><?= $this->session->flashdata('inval_username_password'); ?></div>
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url() ?>Admin/checkLogin" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Nhập Username" value="<?= set_value('username') ?>">
                                    <div class="text-danger"><?= form_error('username') ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Nhập Password" value="<?= set_value('password') ?>">
                                     <div class="text-danger"><?= form_error('password') ?></div>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>
                            </form>
                            <hr>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="<?= base_url() ?>Admin/registerView">Create An Account!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url() ?>public/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url() ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url() ?>public/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url() ?>public/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url() ?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url() ?>public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url() ?>public/js/main.js"></script>

</body>

</html>
<!-- end document-->