<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>TEST</title>
		<meta name="description" content="online shopping surat, girls shopping site, woman clothing surat,woman clothing india, online shopping india">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/web_img/config/logo.png" >

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
    <?php foreach ($pro as $dt): ?>
        <?php
        if ($dt['is_csv'] == 1) {
            $url = $dt['image'];
        } else {
            $url = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
        }
        ?>
        <!-- fb_meta start-->
        <meta property="fb:app_id" content="" />
        <meta property="og:site_name" content="vastramela" />
        <meta property="fb:admins" content="" />
        <meta property="og:url" content="http://vastramela.com/Category/<?php echo $dt['name'] ?>/<?php echo base64_encode($dt['tbl_product_id']); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo $url ?>" />
        <meta property="og:title" content="<?php  echo $dt['product_name']; ?>" />
        <meta property="og:description" content="<?php echo preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', ' ', $dt['sort_description']); ?>" />
        <!-- fb_meta end-->

        <!-- twitter_meta start -->
        <meta name="twitter:card" content="website"/>
        <meta name="twitter:site" content="http://vastramela.com/"/>
        <meta name="twitter:url" content="http://vastramela.com/Category/<?php echo $dt['name'] ?>/<?php echo base64_encode($dt['tbl_product_id']); ?>"/>
        <meta name="twitter:image" content="<?php echo $url ?>"/>
        <meta name="twitter:title" content="<?php  echo $dt['product_name']; ?>"/>
        <meta name="twitter:description" content="<?php echo preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', ' ', $dt['sort_description']); ?>"/>
        <!-- twitter_meta end -->
    <?php endforeach; ?>
</head>
<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->

<div class="single-page-area shop-product-area">
    <div class="container">
        <div class="row">
            <div class="shop-head">
                <ul class="shop-head-menu ">
                    <li><i class="fa fa-home"></i><a class="home" href="<?php echo base_url(); ?>"><span>Home</span></a>
                    </li>
                    <li><?php echo $pro[0]['product_name']?></li>
                </ul>
            </div>
            <!-- shop head end -->
        </div>
    </div>
    <!-- Single Product details Area -->
    <div class="single-product-detaisl-area">
        <!-- Single Product View Area -->
        <div class="single-product-view-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <!-- Single Product View -->
                        <div class="single-procuct-view">
                            <!-- Simple Lence Gallery Container -->
                            <div class="simpleLens-gallery-container" id="p-view">
                                <div class="simpleLens-container tab-content">
                                    <?php foreach ($pro as $dt): ?>
                                        <div class="tab-pane active" id="p-view-<?php echo $dt['tbl_product_id']; ?>">
                                            <?php
                                            if ($dt['is_csv'] == 1) {
                                                $url = $dt['image'];
                                            } else {
                                                $url = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
                                            }
                                            ?>
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lens-image="<?php echo $url; ?>">
                                                    <img src="<?php echo $url; ?>" class="simpleLens-big-image"
                                                         alt="productd">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php foreach ($productsimg as $dt): ?>
                                        <div class="tab-pane" id="p-view-<?php echo $dt['tbl_addpro_img_id']; ?>">
                                            <?php
                                            if ($dt['is_csv'] == 1) {
                                                $url = $dt['img'];
                                            } else {
                                                $url = base_url() . "Assets/images/web_img/Product/" . $dt['img'];
                                            }
                                            ?>
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lens-image="<?php echo $url; ?>">
                                                    <img src="<?php echo $url; ?>" class="simpleLens-big-image"
                                                         alt="productd">
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Simple Lence Thumbnail -->
                                <div class="simpleLens-thumbnails-container text-center">
                                    <div id="single-product" class="owl-carousel custom-carousel">
                                        <?php foreach ($pro as $dt): ?>
                                            <?php
                                            if ($dt['is_csv'] == 1) {
                                                $url = $dt['image'];
                                            } else {
                                                $url = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
                                            }
                                            ?>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="active">
                                                    <a onclick="clss(<?php echo $dt['tbl_product_id']; ?>)" role="tab"
                                                       data-toggle="tab">
                                                        <img src="<?php echo $url; ?>" alt="productd"
                                                             style="height: 100px;width: 100px">
                                                    </a>
                                                </li>
                                            </ul>
                                        <?php endforeach; ?>
                                        <?php foreach ($productsimg as $dt): ?>
                                            <?php
                                            if ($dt['is_csv'] == 1) {
                                                $url = $dt['img'];
                                            } else {
                                                $url = base_url() . "Assets/images/web_img/Product/" . $dt['img'];
                                            }
                                            ?>
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li>
                                                    <a onclick="clss(<?php echo $dt['tbl_addpro_img_id']; ?>)"
                                                       role="tab" data-toggle="tab">
                                                        <img src="<?php echo $url; ?>" alt="productd"
                                                             style="height: 100px;width: 100px">
                                                    </a>
                                                </li>
                                            </ul>
                                        <?php endforeach; ?>
                                    </div>
                                </div><!-- End Simple Lence Thumbnail -->
                            </div><!-- End Simple Lence Gallery Container -->
                        </div><!-- End Single Product View -->
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
                        <div class="product-details shop-review ">
                            <div class="product-name">
                                <h3><a href="#"><?php
                                        foreach ($pro as $dt) {
                                            echo $dt['product_name'];
                                        }
                                        ?></a></h3>
                            </div>
                            <div class="ratings no-rating sin-rating">
                                <!--                                <ul>-->
                                <!--                                    <li><i class="fa fa-star-o"></i></li>-->
                                <!--                                    <li><i class="fa fa-star-o"></i></li>-->
                                <!--                                    <li><i class="fa fa-star-o"></i></li>-->
                                <!--                                    <li><i class="fa fa-star-o"></i></li>-->
                                <!--                                    <li><i class="fa fa-star-o"></i></li>-->
                                <!--                                </ul>-->
                                <!--                                <p class="rating-links">-->
                                <!--                                    <a href="#">1 Review(s)</a>-->
                                <!--                                    <span class="separator">|</span>-->
                                <!--                                    <a href="#" class="add-to-review">Add Your Review</a>-->
                                <!--                                </p>-->
                            </div>
                            <div class="price-box">
                                <span class="old-price">
                                    <span class="fa fa-inr"></span><?php
                                    foreach ($pro as $dt) {
                                        echo $dt['temp_rate'];
                                    }
                                    ?>
                                </span>
                                <span class="new-price">
                                    <span class="fa fa-inr"></span><?php
                                    foreach ($pro as $dt) {
                                        echo $dt['mrp'];
                                    }
                                    ?>
                                </span>
                            </div>
                            <p class="availability in-stock">Availability: <span>In stock</span></p>
                            <div class="product-reveiw">
                                <p><?php
                                    foreach ($pro as $dt) {
                                        echo $dt['sort_description'];
                                    }
                                    ?></p>

                            </div>
                            <?php foreach ($variant as $dt): ?>
                                <div class="product-reveiw">
                                    <label>Color</label>
                                    <p><?php echo $dt['color'] ?></p>
                                    <label>Materials</label>
                                    <p><?php echo $dt['materials'] ?></p>
                                </div>
                            <?php endforeach; ?>

                            <div class="add-to-cart cart-sin-product">
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="qty-button">
                                            <input type="text" class="input-text qty" title="Qty" value="1"
                                                   maxlength="12" id="qty" name="qty">

                                            <div class="box-icon button-plus">
                                                <input type="button" class="qty-increase "
                                                       onClick="var qty_el = document.getElementById('qty');
                                                               var qty = qty_el.value;
                                                               if (!isNaN(qty))
                                                                   qty_el.value++;
                                                               return false;"
                                                       value="+">
                                            </div>
                                            <div class="box-icon button-minus">
                                                <input type="button" class="qty-decrease"
                                                       onClick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if (!isNaN(qty) & amp; & amp; qty & gt; 0) qty_el.value--; return false;"
                                                       value="-">
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button
                                                onclick="AddCart(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)"
                                                type="button">Add to Bag
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Add to cart end -->
                            <div class="sin-product-icons fix">
                                <div class="add-action">
                                    <ul>
                                        <li>
                                            <a onclick="addwish(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)"><i
                                                    class="fa fa-heart-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- social-markting end -->
                            <!--                            <div class="social-button-img">-->
                            <!--                                <a href="#">-->
                            <!--                                    <img src="img/logo/social.png" alt="">-->
                            <!--                                </a>-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product View Area -->
    </div>
    <!-- End Single details Area -->
    <!-- Single Description Tab -->
    <!--    <div class="single-product-description">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-description-tab custom-tab">
                         tab bar 
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
                            <li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
                            <li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
                        </ul>
                         Tab Content 
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-des">
                                <p><?php
    foreach ($pro as $dt) {
        echo $dt['long_description'];
    }
    ?></p>
                            </div>
                            <div class="tab-pane" id="product-rev">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-rev-left">
                                            <p class="product-action">
                                                <a href="http://bootexperts.com/">BootExperts</a> <b>Review by</b>
                                                <span>BootExperts</span>
                                            </p>
                                            <div class="product-ratting">
                                                <table class="">
                                                    <tr>
                                                        <td>Quality</td>
                                                        <td>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Price</td>
                                                        <td>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Value</td>
                                                        <td>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <p>BootExperts <span class="posted">(Posted on 20/02/2016)</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-rev-right">
                                            <h3>You're reviewing: Proin lectus ipsum</h3>
                                            <h3><b>How do you rate this product? <span>*</span></b></h3>
                                            <div class="product-rev-right-table table-responsive">
                                                <table>
                                                    <thead>
                                                    <tr class="first last">
                                                        <th>&nbsp;</th>
                                                        <th><span class="nobr">1 star</span></th>
                                                        <th><span class="nobr">2 stars</span></th>
                                                        <th><span class="nobr">3 stars</span></th>
                                                        <th><span class="nobr">4 stars</span></th>
                                                        <th><span class="nobr">5 stars</span></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th>Quality</th>
                                                        <th><input type="radio" class="radio" name="ratings[1]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[1]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[1]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[1]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[1]"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Price</th>
                                                        <th><input type="radio" class="radio" name="ratings[2]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[2]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[2]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[2]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[2]"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Value</th>
                                                        <th><input type="radio" class="radio" name="ratings[3]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[3]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[3]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[3]"></th>
                                                        <th><input type="radio" class="radio" name="ratings[3]"></th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="porduct-rev-right-form">
                                                <form action="#" class="form-horizontal product-form">
                                                    <div class="form-goroup">
                                                        <label>Nickname <sup>*</sup></label>
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    <div class="form-goroup">
                                                        <label>Summary of Your Review <sup>*</sup></label>
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    <div class="form-goroup">
                                                        <label>Review <sup>*</sup></label>
                                                        <textarea class="form-control" rows="5"
                                                                  required="required"></textarea>
                                                    </div>
                                                    <div class="form-goroup form-group-button">
                                                        <button class="btn custom-button" value="submit">Submit Review
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product-tag">
                                <h2>Other people marked this product with these tags:</h2>
                                <p class="product-action">
                                    <a href="http://bootexperts.com/">Laptop </a> <span>(1)</span>
                                </p>
                                <form action="#" class="product-form">
                                    <label>Add Your Tags:</label>
                                    <input type="text" class="form-control" required="required">
                                    <button class="btn custom-button" value="submit">Add Tags</button>
                                </form>
                                <p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Single Description Tab -->

</div>
<!-- Single Product Area end -->

<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->
<!-- quickview product -->
<?php $this->load->view('Client/helper/quickview.php') ?>

<!-- END quickview product -->

<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>
<script type="text/javascript">
    function clss(id) {
//        alert(id);
        $('.tab-pane').removeClass('active');
        $('#p-view-' + id).addClass('active');
    }

    function AddCart(p) {
        var qty = document.getElementById('qty').value;
<?php if (isset($_SESSION['id'])) { ?>
            $.ajax({
                type: 'POST',
                data: {
                    'pro': p,
                    'qty': qty
                },
                url: '<?php echo base_url(); ?>Cart/Add_data1',
                dataType: 'json',
                success: function (data) {
                    if (data.success == 1) {
                        alert('Added in wish list successfully');
                        $('#crtcnt').html(data.cnt);
                    } else if (data.success == 2) {
                        alert('Product Already Added In Cart');
                    } else {
                        alert('Something went Wrong Please try again later');
                    }
                }
            });
<?php } else { ?>
            $.ajax({
                type: 'POST',
                data: {
                    'pro': p,
                    'qty': qty
                },
                url: '<?php echo base_url(); ?>Cart/Add_data_through_ip',
                dataType: 'json',
                success: function (data) {
                    if (data.success == 1) {
                        alert('Added in Bag successfully');
                        $('#crtcnt').html(data.cnt);
                    } else {
                        alert('Something went Wrong Please try again later');
                    }
                }
            });
            //        $('#login-popup').modal('show');
            //        $('#productModal').modal('hide');
<?php } ?>
    }
</script>
</body>
</html>
