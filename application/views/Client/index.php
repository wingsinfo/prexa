<?php $this->load->view('Client/helper/headerlink.php'); ?>


<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->

<!-- slider-area start -->
<div class="slider-area">
    <!-- slider start -->
    <div class="slider">
        <div id="topSlider" class="nivoSlider nevo-slider">
            <?php foreach ($slider as $dt): ?>
                <img src="<?php echo base_url(); ?>Assets/images/web_img/Banner/<?php echo $dt['img']; ?>"
                     alt="main slider" title="#htmlcaption<?php echo base64_decode($dt['tbl_banner_id']) ?>"/>
                 <?php endforeach; ?>

        </div>
        <?php foreach ($slider as $dt): ?>
            <div id="htmlcaption<?php echo base64_decode($dt['tbl_banner_id']); ?>"
                 class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- slider end -->
</div>

<!-- banner-area start -->
<div class="banner-area fix">
    <div class="container">
        <div class="row">
            <!-- product-carousel start -->
            <div class="feature-product product-carousel derection-key">
                <!-- single-product start -->
                <?php foreach ($pro as $dt): ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-product">
                            <div class="product-details">
                                <div class="product-name">
                                    <h3>
                                        <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>"><?php echo trim(str_replace("-"," ",$dt['name'])); ?></a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product-img" style="width: 261px;">
                                <span class="sale-text"><?php
                                    if ($dt['count'] > 0) {
                                        if ($dt['count'] <= 10) {
                                            echo $dt['count'];
                                        } else {
                                            echo ($dt['count'] - 10) . "+";
                                        }
                                    }
                                    ?></span>
                                <?php
                                if ($dt['is_csv'] == 1) {
                                    $msg = $dt['image'];
                                } else {
                                    $msg = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
                                }
                                ?>
                                <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>">
                                    <img class="primary-img" src="<?php echo $msg; ?>" alt="<?php echo $dt['name']; ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- product-carousel end -->
        </div>
    </div>
</div>
<!-- banner-area end -->
<div class="feature-product-area">
    <div class="container">
        <div class="row">
            <div class="feature-headline section-heading text-center">
                <h2>featured product</h2>
            </div>
            <!-- product-carousel start -->
            <div class="feature-product product-carousel derection-key">
                <!-- single-product start -->
                <?php foreach ($fpro as $dt): ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-product" style="height: 390px;">
                            <div class="product-details">
                                <div class="product-name">
                                    <h3>
                                        <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>/<?= base64_encode($dt['tbl_product_id']); ?>"><?php echo $dt['product_name']; ?></a>
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
                                    <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>/<?= base64_encode($dt['tbl_product_id']); ?>">
                                        <img class="primary-img" src="<?php echo $msg; ?>"
                                             alt="<?php echo $dt['product_name']; ?>">
                                    </a>
                                </center>
                                <center>
                                    <div class="add-action">
                                        <ul>
                                            <li>
                                                <a style="cursor: pointer" data-toggle="tooltip" title="Add to Wishlist"
                                                   onclick="addwish(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <!--                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-refresh"></i></a></li>-->
                                            <li class="quickview">
                                                <a style="cursor: pointer" data-toggle="tooltip" title="Quick view"
                                                   onclick="quickview(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </center>
                            </div>
                            <div class="add-to-cart">
                                <a style="cursor: pointer"
                                   onclick="addbag(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">add
                                    to Bag</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- product-carousel end -->
        </div>
        <div class="row">
            <div class="feature-headline section-heading text-center">
                <h2>Best Sale product</h2>
            </div>
            <!-- product-carousel start -->
            <div class="feature-product product-carousel derection-key">
                <!-- single-product start -->
                <?php foreach ($fpro2 as $dt): ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="single-product" style="height: 390px;">
                            <div class="product-details">
                                <div class="product-name">
                                    <h3>
                                        <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>/<?= base64_encode($dt['tbl_product_id']); ?>"><?php echo $dt['product_name']; ?></a>
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
                                    <a href="<?php echo base_url(); ?>Category/<?php echo $dt['name']; ?>/<?= base64_encode($dt['tbl_product_id']); ?>">
                                        <img class="primary-img" src="<?php echo $msg; ?>"
                                             alt="<?php echo $dt['product_name']; ?>">
                                    </a>
                                </center>
                                <div class="add-action">
                                    <center>
                                        <ul>
                                            <li>
                                                <a style="cursor: pointer" data-toggle="tooltip" title="Add to Wishlist"
                                                   onclick="addwish(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </li>
                                            <!--                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-refresh"></i></a></li>-->
                                            <li class="quickview">
                                                <a style="cursor: pointer" data-toggle="tooltip" title="Quick view"
                                                   onclick="quickview(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a style="cursor: pointer"
                                   onclick="addbag(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">add
                                    to Bag</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- product-carousel end -->
        </div>
    </div>
</div>

<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->
<!-- quickview product -->
<?php $this->load->view('Client/helper/quickview.php') ?>

<!-- END quickview product -->

<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>
<script type="text/javascript">
    $('#btn-1').mdl({
        type: 'modal',
        fullscreen: false,
        overlayClick: true
    });
</script>
</body>
</html>