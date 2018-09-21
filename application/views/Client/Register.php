<?php $this->load->view('Client/helper/headerlink.php'); ?>

<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->
<!-- shop page area start -->
<div class="shop-product-area" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="ship-product-area ">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 table-content">
                    <div class="area-title bdr">
                        <h2>Register</h2>
                    </div>
                    <div>
                        <?php if (isset($_GET['alert'])) { ?>
                            <?php if ($_GET['alert'] == 1) { ?>
                                <p style="color: green">Register Successfully Please Check Your Email To Activate Your Account</p>
                            <?php } elseif ($_GET['alert'] == 3) { ?>
                                <p style="color: red">Please Fill All Data</p>
                            <?php } elseif ($_GET['alert'] == 4) { ?>
                                <p style="color: red">Email Or Mobile No Already Registered With Us</p>
                            <?php } elseif ($_GET['alert'] == 5) { ?>
                                <p style="color: green">Your Account Activate Successfully Please Login Now</p>
                            <?php } elseif ($_GET['alert'] == 6) { ?>
                                <p style="color: red">Sorry Your Activation Link Expired</p>
                            <?php } else { ?>
                                <p style="color: red">Sorry Something Went Wrong Please Try Again later</p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="register-form">
                        <form action="<?php echo base_url(); ?>Register/Add_data" method="post">
                            <div class="form-group">
                                <label>Mobile No:</label>
                                <input type="number" maxlength="10" name="mobile" class="form-control"
                                       placeholder="Mobile number" required>
                            </div>
                            <div class="form-group">
                                <label>Email Id:</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Id" required>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="password"
                                       required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
                <!--                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                <!--                    <div class="area-title bdr">-->
                <!--                        <h2>Login</h2>-->
                <!--                    </div>-->
                <!--                    <div class="register-form">-->
                <!--                        <div class="form-group">-->
                <!--                            <label>Email Id:</label>-->
                <!--                            <input type="text" class="form-control" placeholder="Email Id">-->
                <!--                        </div>-->
                <!--                        <div class="form-group">-->
                <!--                            <label>Password:</label>-->
                <!--                            <input type="password" class="form-control" placeholder="password">-->
                <!--                        </div>-->
                <!--                        <div class="form-group">-->
                <!--                            <input type="submit" class="btn btn-primary" value="Login" onclick="login()">-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12">
                    <img src="<?php echo base_url();?>cassets/img/RgBG.jpg" style="height: 387px;" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop page area end -->


<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->
<!-- quickview product -->
<?php $this->load->view('Client/helper/quickview.php') ?>

<!-- END quickview product -->

<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>
</body>
</html>