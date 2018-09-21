<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="http://quickoninfotech.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header-area start -->
<!-- Header-area start -->
<header>
    <div class="header-area">
        <!-- header-top start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="top-left-item hidden-xs">
                            <div class="top-menu">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>">
                                <a href="" title="Admin Template" style="font-size: 35px;"> LOGO</a>
                                <!--<img src="<?php echo base_url(); ?>Assets/images/logo.png" alt="Logo">-->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="header-right">
                            <div class="header-right-link">

                            </div>
                            <div class="header-right-link">
                                <!-- wishlist start -->
                                <div class="top-menu wishlist">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo base_url(); ?>cassets/img/icons/ac-links.png" alt="Account">
                                                </a>
                                                <ul>
                                                    <?php if (isset($_SESSION['id'])) { ?>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Account">MyAccount</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Order">MyOrder</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Wishlist">MyWishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Cart">MyCart</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>checkout">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Helper/Logout1">Log
                                                                Out</a>
                                                        </li>
                                                    <?php } else { ?>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#login-popup">Log
                                                                In</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url(); ?>Register">Register</a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- wishlist end -->
                            </div>
                            <div class="header-right-link">
                                <!-- cart item start -->
                                <div class="cart-item">
                                    <div class="cart-item-title">
                                        <a href="<?php echo base_url(); ?>Cart">
                                            <img src="<?php echo base_url(); ?>cassets/img/icons/card2.png"
                                                 alt="Cartimage">
                                            <span class="total-cart" id="crtcnt">
                                                <?php echo count($cart); ?>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- cart item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <!-- header-bottom start -->
        <div class="header-bottom hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!-- main-menu start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">home</a></li>
                                    <?php foreach ($mc as $dt): ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>">
                                                <?php echo trim(str_replace("-"," ",$dt['name'])); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                    <li><a href="<?php echo base_url(); ?>Contactus">contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom end -->
    </div>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 hidden-lg hidden-md hidden-sm">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>">home</a></li>
                                <?php foreach ($mc as $dt): ?>
                                    <li>
                                        <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>">
                                            <?php echo trim(str_replace("-"," ",$dt['name'])); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                <li><a href="<?php echo base_url(); ?>Contactus">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>

