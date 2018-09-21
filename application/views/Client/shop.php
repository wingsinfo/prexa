<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST</title>
    <meta name="google-site-verification" content="ybF3FW8k0V8h8oadAEDSSIAleo8qGaUcOTnOIcaYc-c" />

    <meta name="og_title" property="og:title" content="Online Shopping India | Buy Clothing and More Online at vastramela.com"/>

    <meta name="Keywords" content="online, shopping ,shop, india, brands, fashion, top, products, Online shopping, online store"/>

    <meta name="Description" content="Online Shopping in India for Women Clothing at vastramela.  wide range of original products with cash on delivery and free shipping options at vastramela.com"/>

    <link rel="canonical" href="http://vastramela.com"/>
    <meta name="og_url" property="og:url" content="http://vastramela.com"/>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/web_img/config/logo.png" >

    <meta name="keyphrases" content="buy saris online, buy designer salwar suits online, buy lehenga choli online, buy kurtis online, buy designer suits online, buy anarkali suits online, buy patiyala suits online, buy printed suits online, buy anarkali suits online, Online shopping store and shop "/>

    <!-- google fonts here -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/jquery.simpleGallery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/jquery.simpleLens.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/nivo-slider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>cassets/fonts/css/font-awesome.min.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url(); ?>cassets/js/modernizr-2.8.3.min.js"></script>

    <!-- fb_meta start-->
    <meta property="fb:app_id" content="" />
    <meta property="og:site_name" content="vastramela" />
    <meta property="fb:admins" content="" />
    <meta property="og:url" content="http://vastramela.com/Category/<?php echo trim(str_replace("-"," ",$this->uri->segment(2))); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="<?php echo trim(str_replace("-"," ",$this->uri->segment(2))); ?>" />
    <meta property="og:description" content="Online Shopping in India for Women Clothing at vastramela.  wide range of original products with cash on delivery and free shipping options at vastramela.com" />
    <!-- fb_meta end-->

    <!-- twitter_meta start -->
    <meta name="twitter:card" content="website"/>
    <meta name="twitter:site" content="http://vastramela.com/"/>
    <meta name="twitter:url" content="http://vastramela.com/Category/<?php echo trim(str_replace("-"," ",$this->uri->segment(2))); ?>"/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:title" content="<?php echo trim(str_replace("-"," ",$this->uri->segment(2))); ?>"/>
    <meta name="twitter:description" content="Online Shopping in India for Women Clothing at vastramela.  wide range of original products with cash on delivery and free shipping options at vastramela.com"/>
    <!-- twitter_meta end -->
</head>


<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->
<!-- shop page area start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shop-head">
                    <ul class="shop-head-menu">
                        <li><i class="fa fa-home"></i><a class="home" href="<?php echo base_url(); ?>"><span>Home</span></a>
                        </li>
                        <li><?php echo trim(str_replace("-"," ",$this->uri->segment(2))); ?></li>
                    </ul>
                </div><!-- shop head end -->
                <div class="shop-product-view">
                    <!-- Shop Product Tab Area -->
                    <div class="product-tab-area">
                        <!-- Tab Bar -->
<!--                        <div class="tab-bar">-->
<!--                            <div class="toolbar">-->
<!--                                <div class="sorter">-->
<!--                                    <div class="sort-by">-->
<!--                                        <label>Sort By</label>-->
<!--                                        <select>-->
<!--                                            <option value="position">Position</option>-->
<!--                                            <option value="name">Name</option>-->
<!--                                            <option value="price">Price</option>-->
<!--                                        </select>-->
<!--                                        <a href="#"><i class="fa fa-long-arrow-up"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- End Tab Bar -->
                        <!-- Tab Content -->
                        <div class="clearfix"></div>
                        <div class="tab-content">
                            <div id="shop-grid" class="tab-pane active" role="tabpanel">
                                <div class="row">
                                    <!-- single-product start -->
                                    <?php foreach ($products as $dt): ?>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 shop-single-item" >
                                            <div class="single-product" style="height: 390px;">
                                                <div class="product-details">
                                                    <div class="product-name">
                                                        <h3>
                                                            <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name'] ?>/<?= base64_encode($dt['tbl_product_id']); ?>"><?php echo $dt['product_name']; ?></a>
                                                        </h3>
                                                    </div>
                                                    <div class="price-box">
                                    <span class="old-price">
                                        <span class="fa fa-inr"></span><?php echo $dt['temp_rate']; ?>
                                    </span>
                                                        <span class="new-price">
                                        <span class="fa fa-inr"></span><?php echo $dt['mrp']; ?>
                                    </span>
                                                    </div>
                                                </div>
                                                <div class="product-img" style="width: 261px;">
                                                    <?php
                                                    if ($dt['is_csv'] == 1) {
                                                        $msg = $dt['image'];
                                                    } else {
                                                        $msg = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
                                                    }
                                                    ?>
                                                    <center>
                                                        <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name'] ?>/<?= base64_encode($dt['tbl_product_id']); ?>">
                                                            <img class="primary-img" src="<?php echo $msg; ?>"
                                                                 alt="<?php echo $dt['product_name']; ?>">
                                                        </a>
                                                    </center>
                                                    <center>
                                                        <div class="add-action">
                                                            <ul>
                                                                <li>
                                                                    <a data-toggle="tooltip"
                                                                       title="Add to Wishlist"
                                                                       onclick="addwish(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                                        <i class="fa fa-heart-o"></i>
                                                                    </a>
                                                                </li>
                                                                <!--                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-refresh"></i></a></li>-->
                                                                <li class="quickview">
                                                                    <a data-toggle="tooltip"
                                                                       title="Quick view"
                                                                       onclick="quickview(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="add-to-cart">
                                                    <center>
                                                        <a onclick="addbag(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">add
                                                            to Bag</a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <!-- single-product end -->

                                </div>
                            </div>

                        </div>
                        <!-- bottom toolbar start-->
                        <div class="tab-bar tab-bar-bottom blog-tab-bottom">
                            <div class="toolbar">
                                <div class="sorter">
<!--                                    <div class="sort-by">-->
<!--                                        <label>Sort By</label>-->
<!--                                        <select>-->
<!--                                            <option value="position">Position</option>-->
<!--                                            <option value="name">Name</option>-->
<!--                                            <option value="price">Price</option>-->
<!--                                        </select>-->
<!--                                        <a href="#"><i class="fa fa-long-arrow-up"></i></a>-->
<!--                                    </div>-->
                                </div>
                                <div class="pages">

                                    <ol>
                                        <?php if ($this->input->get('page') == "") {
                                            $iv = 1;
                                        } else {
                                            $iv = $this->input->get('page');
                                        } ?>
                                        <?php for ($i = 1; $i <= $pages; $i++): ?>
                                            <a <?php if ($iv == $i){ ?>class="current"<?php } ?>
                                               href="<?php base_url(); ?><?php echo $this->uri->segment(2); ?>?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Bar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop page area end -->
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