<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Admin</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/material-design-iconic-font.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/animate.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/layout.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/components.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/widgets.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/pages.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap-extend.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/common.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/responsive.css">
    </head>
    <body class="login-page" >
        <!--Page Container Start Here-->
        <section class="login-container" >
            <div class="container" >
                <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                    <div class="login-form-container">
                        <form action="<?php echo base_url(); ?>Cp/Login" method="post" class="j-forms" id="forms-login" novalidate>

                            <div class="login-form-header">
                                <div class="logo">
                                    <a href="" title="Admin Template" style="font-size: 35px;"> LOGO</a>
                                    <!--<a href="<?php base_url(); ?>Cp" title="Admin Template"><img src="<?php base_url(); ?>Assets/images/logo.png" style="height: 100px;width: 350px" alt="logo"></a>-->
                                </div>
                            </div>
                            <div class="login-form-content">



                                <!-- start login -->
                                <div class="unit">
                                    <div class="input login-input">
                                        <label class="icon-left" for="login">
                                            <i class="zmdi zmdi-account"></i>
                                        </label>
                                        <input class="form-control login-frm-input"  type="text" id="login" name="username" placeholder="Username / Email">
                                    </div>
                                </div>
                                <!-- end login -->

                                <!-- start password -->
                                <div class="unit">
                                    <div class="input login-input">
                                        <label class="icon-left" for="password">
                                            <i class="zmdi zmdi-key"></i>
                                        </label>
                                        <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
                                        <span class="hint">
                                            <a href="#" class="link">Forgot password?</a>
                                        </span>
                                    </div>
                                </div>
                                <!-- end password -->


                                <!-- start keep logged -->
                                <div class="unit">
                                    <label class="checkbox">
                                        <input type="checkbox" name="logged" value="true" checked="">
                                        <i></i>
                                        Keep me logged in
                                    </label>
                                </div>
                                <!-- end keep logged -->

                                <!-- start response from server -->
                                <div class="response"></div>
                                <!-- end response from server -->



                            </div>
                            <div class="login-form-footer">
                                <button type="submit" class="btn-block btn btn-primary">Sign in</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--Footer Start Here -->
            <footer class="login-page-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                            <div class="footer-content">
                                <span class="footer-meta"><a href="">TEST</a></span>
                                <!--<span class="footer-meta"><a href=""></a></span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--Footer End Here -->
        </section>
        <!--Page Container End Here-->
        <script src="<?php echo base_url(); ?>Assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/jquery-migrate.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/jRespond.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/hammerjs.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/jquery.hammer.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/smoothscroll.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/smart-resize.js"></script>

        <script src="<?php echo base_url(); ?>Assets/js/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/jquery.form.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/j-forms.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/login-validation.js"></script>
    </body>
</html>