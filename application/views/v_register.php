<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>
            MasakYuk - Login
        </title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->
        <!--begin::Base Styles -->
        <link href="<?=base_url()?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Base Styles -->
        <link rel="shortcut icon" href="<?=base_url()?>/assets/demo/default/media/img/logo/favicon.ico" />
    </head>
    <!-- end::Head -->
    <!-- end::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(<?=base_url()?>/assets/img/bg-login.jpg);">
                <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
                    <div class="m-login__container" style="border-radius: 40px; padding-top: 50px; background: #fff;">
                        <div class="m-login__signin">
                            <div class="m-login__head">
                            <center>
                                <a href="#">
                                    <img src="<?=base_url()?>/assets/img/logo-hover.png" style="width: 100px;">
                                </a>
                                </center>
                                <h3 style="font-family: Montserrat; font-size: 35px;color: #222; font-weight: bold" class="m-login__title">
                                    Sign Up
                                </h3>
                                <h3 style="font-family: Montserrat; font-size: 12px;color: #222; font-weight: bold" class="m-login__title">
                                    Daftarkan diri anda!
                                </h3>
                                
                            </div>
                            <?php 
                            if($this->session->flashdata('pesan')!=null){
                                echo "<center><div class='alert alert-success' style='font-size:14px;'>".$this->session->flashdata('pesan')."</div></center>";}?>
                            <form class="m-login__form m-form" action="<?php echo base_url('index.php/register/simpan'); ?>" method="post">
                                <div class="form-group m-form__group">
                                    <center><input class="form-control m-input" type="text" placeholder="Nama" name="nama"></center>
                                </div>
                                <div class="form-group m-form__group">
                                    <center><input class="form-control m-input" type="email" placeholder="Email" name="email"></center>
                                </div>
                                <div class="form-group m-form__group">
                                    <center><input class="form-control m-input" type="text" placeholder="Username" name="username"></center>
                                </div>
                                <div class="form-group m-form__group">
                                    <center><input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password"></center>
                                </div>
                                <div class="m-login__form-action">
                                    <input type="submit" name="daftar" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" value="Sign Up">
                                </div>
                            </form>
                            
                        </div>
                        <div class="m-login__account">                                            
                            <a href="<?php echo base_url('index.php/login'); ?>" class="m-link m-link--light m-login__account-link">
                                Kembali
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        <!--begin::Base Scripts -->
        <script src="<?=base_url()?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
        <script src="<?=base_url()?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Base Scripts -->   
        <!--begin::Page Snippets -->
        <script src="<?=base_url()?>/assets/snippets/pages/user/login.js" type="text/javascript"></script>
        <!--end::Page Snippets -->
    </body>
    <!-- end::Body -->
</html>
