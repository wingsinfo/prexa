<footer xmlns="http://www.w3.org/1999/html">
    <div class="footer-area">
        <!--footer-top-area start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!-- single-footer-service start -->
                            <div class="single-footer-service">
                                <div class="footer-service-icon">
                                    <img class="box-icon" src="<?php echo base_url(); ?>cassets/img/icons/ft-img1.png"
                                         alt="">
                                </div>
                                <div class="footer-service-text">
                                    <h2>free shipping worldwide</h2>
                                    <p>On order over 499 - 7 days a week</p>
                                </div>
                            </div>
                            <!-- single-footer-service end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!-- single-footer-service start -->
                            <div class="single-footer-service">
                                <div class="footer-service-icon">
                                    <img class="box-icon" src="<?php echo base_url(); ?>cassets/img/icons//ft-img2.png"
                                         alt="">
                                </div>
                                <div class="footer-service-text">
                                    <h2>24/7 custome r service</h2>
                                    <p>Call us 24/7 at 000 - 123 - 456</p>
                                </div>
                            </div>
                            <!-- single-footer-service end -->
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
                            <!-- single-footer-service start -->
                            <div class="single-footer-service">
                                <div class="footer-service-icon">
                                    <img class="box-icon" src="<?php echo base_url(); ?>cassets/img/icons/ft-img3.png"
                                         alt="">
                                </div>
                                <div class="footer-service-text">
                                    <h2>money back guaratee!</h2>
                                    <p>Send within 30 days</p>
                                </div>
                            </div>
                            <!-- single-footer-service end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-top-area end -->
        <!--footer-middle-area start -->
        <div class="footer-middle-area">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                            <!-- middle-footer-text start-->
                            <div class="footer-middle-text">
                                <div class="footer-logo">
                                    <a href="" title="Admin Template" style="font-size: 35px;"> LOGO</a>
                                    <!--<a href="#"><img src="<?php echo base_url(); ?>Assets/images/logo.png" alt="Logo"></a>-->
                                </div>
                                <div class="middle-text">
                                    <p>Online Product Sale</p>
                                    <ul class="footer-icon">
                                        <?php foreach ($sm as $dt): ?>
                                            <li>
                                                <a href="<?php echo $dt['link']; ?>">
                                                    <i class="<?php echo $dt['icon']; ?>"></i>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- middle-footer-text end-->
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                            <!-- middle-footer-text start-->
                            <div class="middle-footer-text">
                                <h3>contact us</h3>
                                <?php foreach ($contact as $dt): ?>
                                    <div class="footer-address">
                                        <ul>
                                            <li><i class="fa fa-map-marker"> </i> <?php echo $dt['address']; ?></li>
                                            <li><i class="fa fa-phone"> </i> <?php echo $dt['mobile']; ?></li>
                                            <li><i class="fa fa-envelope-o"> </i> <?php echo $dt['email']; ?></li>
                                        </ul>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- middle-footer-text end-->
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <!-- middle-footer-text start-->
                            <div class="middle-footer-text">
                                <h3>information</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>Aboutus">About Us </a></li>
                                        <li><a href="<?php echo base_url(); ?>Contactus">Contact Us </a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms And Condition</a></li>
                                        <li><a href="<?php echo base_url(); ?>Product">Store</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- middle-footer-text end-->
                        </div>
                        <div class="col-lg-2 col-md-2 hidden-sm col-xs-12">
                            <!-- middle-footer-text start-->
                            <div class="middle-footer-text">
                                <h3>collections</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <?php
                                        $i = 0;
                                        foreach ($mc as $dt):
                                            ?>
    <?php if ($i < 4) { ?>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>"><?php echo $dt['name']; ?></a>
                                                </li>
                                                <?php
                                                $i++;
                                            }
                                            ?>
<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- middle-footer-text end-->
                        </div>
                        <div class="col-lg-2 col-md-2 hidden-sm col-xs-12">
                            <!-- middle-footer-text start-->
                            <div class="middle-footer-text">
                                <h3>my account</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url() ?>Account">My Account</a></li>
                                        <li><a href="<?php echo base_url() ?>Order">Order History</a></li>
                                        <li><a href="<?php echo base_url() ?>Wishlist">Wish List</a></li>
<!--                                        <li><a href="<?php echo base_url() ?>">News Letter</a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <!-- middle-footer-text end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-middle-area end -->
        <!--footer-bottom-area start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-copyright">
                            <address>Copyright &copy; All Rights Reserved || Develop By: TEST</address>c
<!--                            <address>Copyright &copy; <a href="<?php echo base_url(); ?>">Vastra Mela </a>All Rights
                                Reserved || Develop By: <a href="http://quickoninfotech.com/" target="_blank">Quickon Infotech </a>
                            </address>-->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="payment-history">
                            <ul>
<!--                                <li><a href="#"><img src="--><?php //echo base_url();    ?><!--cassets/img/footer/payment.png"-->
                                <!--                                                     alt="payment"></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-bottom-area end -->
    </div>
</footer>
<style>
    .account-box
    {
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        -khtml-border-radius: 2px;
        -o-border-radius: 2px;
        z-index: 3;
        font-size: 13px !important;
        font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
        background-color: #ffffff;
        padding: 20px;
    }

    .forgotLnk
    {
        margin-top: 10px;
        display: block;
    }

    .purple-bg
    {
        background-color: #f3652a;
        color: #fff;
    }
    .or-box
    {
        position: relative;
        border-top: 1px solid #dfdfdf;
        padding-top: 20px;
        margin-top:20px;
    }
    .or
    {
        color: #666666;
        background-color: #ffffff;
        position: absolute;
        text-align: center;
        top: -8px;
        width: 40px;
        left: 90px;
    }
    .account-box .btn:hover
    {
        color: #fff;
    }
</style>

<div class="modal fade" id="login-popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Login</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="alert-danger">
                            <span id="alrt"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="account-box">
                            <form class="form-signin" method="post">
                                <div class="form-group">
                                    <input type="email" id="lemail" class="form-control" placeholder="Email" required autofocus/>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="lpass" class="form-control" placeholder="Password" required/>
                                </div>
                                <button class="btn btn-lg btn-block purple-bg" onclick="login()" type="button">
                                    Sign in
                                </button>
                            </form>
                            <a class="forgotLnk" href="">I can't access my account</a>
                            <div class="or-box row-block">
                                <div class="row">
                                    <div class="col-md-12 row-block">
                                        <a href="<?php echo base_url(); ?>Register" class="btn btn-primary btn-block">Create
                                            New
                                            Account</a>
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





<!--footer-area end -->

<div class="mdl" id="demo-1">
    <div class="mdl-container">

        <div class="col-lg-5 col-md-5 lp">
            <span>Login</span><br>
                <span style="font-size:15px;font-family:roboto, 'Rockwell Condensed', 'Roboto Light', leelawadee, 'weblySleek UI Light'">Get access to your Orders, Wishlist and Recommendations</span>
        </div>
        <div class="col-lg-7 col-md-7 fm">
            <form >
                <div class="form-group">
                    <label>Mobile No*</label>
                    <input type="text" class="" placeholder="Enter Mobile No..">
                </div>
                <div class="form-group">
                    <label>Password*</label>
                    <input type="password" class="" placeholder="Enter Password..">
                </div>
                <div class="form-group">
                    <input type="button" class="mdl_button" value="Login"> 
                </div>
            </form>
            <div class="mdl_registe_detail">
                <span class="pull-left"><a href="">Register</a></span>
                <span class="pull-right"><a href="">Forgot Password</a></span>
            </div>   
            <!--            <div class="clearfix">&nbsp;</div>
                        <span style="padding-left: 45%; font-size: 19px;">OR </span>  
                        <div class="clearfix">&nbsp;</div>      
                        <div class="social_button col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="button pull-left" style="width:140px;"><i class="fa fa-facebook"></i>&nbsp;Facebook</button>
                            <button class="button1 pull-right" style="width:140px;"><i class="fa fa-google"></i>&nbsp;Google</button>
                        </div>-->
        </div>

    </div>
</div>
