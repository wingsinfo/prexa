<?php
/**
 * Created by PhpStorm.
 * User: Dreamworld Solutions
 * Date: 6/15/2016
 * Time: 4:15 PM
 */
?>
<?php $this->load->view('Client/Helper/hlink'); ?>
<?php $this->load->view('Client/Helper/header'); ?>
<!-- Slider Section -->
<div id="slider-section" class="slider-section">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $cnt = 0;
            foreach ($slider as $dt):
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?= $cnt; ?>" class="<?php
                if ($cnt == 0) {
                    echo "active";
                }
                ?>"></li>
                <?php
                $cnt++;
            endforeach;
            ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $cnt = 0;
            foreach ($slider as $dt):
                ?>
                <div class="item <?php if ($cnt == 0): ?>active<?php endif; ?>">
                    <img src="<?php echo base_url(); ?>Assets/images/web_img/Banner/<?= $dt['img']; ?>" alt="slide-1">
                    <?php if ($dt['title'] != "") { ?>
                        <div class="container">
                            <div class="slider-box">
                                <h3><?= $dt['title']; ?></h3>
                                <?php if (count($tbl_banner_adv[$dt['tbl_banner_id']]) > 0) { ?>
                                    <h2><?= $tbl_banner_adv[$dt['tbl_banner_id']][0]['title']; ?></h2>

                                    <p><?= $tbl_banner_adv[$dt['tbl_banner_id']][0]['description']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php
                $cnt++;
            endforeach;
            ?>
        </div>
        <!-- Controls -->
        <?php if (count($slider) > 1): ?>
            <a title="Previous" class="left carousel-control" href="#carousel-example-generic" role="button"
               data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a title="Next" class="right carousel-control" href="#carousel-example-generic" role="button"
               data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        <?php endif; ?>
    </div>
</div>
<!-- Slider Section /- -->

<!-- Category Section -->
<div id="category-section" class="category-section bottom-shadow">
    <!-- container -->
    <div class="container">
        <div class="col-md-3 categories-title col-sm-4">
            <h3>Special Offer’s and Discount</h3>


        </div>
        <div class="col-md-6 col-sm-4">
            <h4><?php
                if (count($totalproduct) > 0) {
                    if (count($totalproduct) <= 10) {
                        echo count($totalproduct);
                    } else {
                        echo (count($totalproduct) - 10) . "+";
                    }
                }
                ?> Collection</h4>
        </div>
        <div class="col-md-3 col-sm-4 categories-title">
            <h3>Free 15 Days Returns</h3>


        </div>
        <div class="category-box-main categories-slider">
            <!-- Owl Carousel -->
            <div id="categories-list" class="owl-carousel owl-theme our-partner">
                <?php foreach ($pro as $dt): ?>
                    <div class="item">
                        <div class="category-box">
                            <span class="sale">+<?= $dt['count']; ?></span>
                            <a title="<?= $dt['name']; ?>"
                               href="<?php echo base_url(); ?>Ecom/Comm/<?= base64_encode($dt['tbl_main_category_id']); ?>">
                                <?php
                                if ($dt['is_csv'] == 1) {
                                    $msg = $dt['image'];
                                } else {
                                    $msg = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
                                }
                                ?>
                                <img style="height: 250px;" src="<?php echo $msg; ?>"
                                     alt="cat-img"/>
                                <span><?= $dt['name']; ?></span>

                                <div class="cat-hover"></div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- container /- -->
</div>
<!-- Category Section /- -->

<!-- Feature Product -->
<Section id="featured-products" class="featured-products bottom-shadow">
    <!-- container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h3>Featured products</h3>

            <p>Nam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas tristique sit amet odio sit
                amet aliquet. Quisque a pharetra quam. Sed in ultrices diam, eget sodales ligula. Sed ut tincidunt
                lacus.</p>
        </div>
        <!-- Section Header /- -->

        <!--div class="category-box-main product-box-main" style="padding-bottom: 40px;"-->
            <?php foreach ($fpro as $dt): ?>
                <div class="col-md-3 col-sm-6 col-xs-6 main-product">
                    <div class="">
                        <!--span class="sale">sales</span-->
                        <!--a href="<?php echo base_url(); ?>Ecom/Sp/<?= base64_encode($dt['tbl_product_id']); ?>">
                            <?php
                            if ($dt['is_csv'] == 1) { ?>
                                <!--img style="height: 350px;" src="<?php echo $dt['image'] ?>" alt="featured-img"/>
                            <?php } else { ?>
                                <img style="height: 350px;"
                                     src="<?php echo base_url(); ?>Assets/images/web_img/Product/<?php echo $dt['image'] ?>"
                                     alt="featured-img"/>
                            <?php } ?>


                            <!--div class="product-box-inner">
                                <ul>
                                    <li><a title="Eye"
                                           href="<?php echo $msg ?>"><i
                                                class="fa fa-eye"></i></a>
                                    </li>
                                    <li><a title="Heart" href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a title="Heart Icon" href="<?php echo base_url(); ?>Ecom/Sp/<?= base64_encode($dt['tbl_product_id']); ?>"><i class="fa fa-delicious"></i></a></li>
                                </ul>
                                <a title="Add to cart" href="#" class="btn">Add to cart</a>
                            </div-->
                        <!--/a>
                    </div>
                    <a href="<?php echo base_url(); ?>Ecom/Sp/<?= base64_encode($dt['tbl_product_id']); ?>"
                       class="product-title"><?= $dt['product_name']; ?></a>
                    <ul class="star">
                        <li>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <span class="amount"><del>&#8377;<?= $dt['temp_rate']; ?></del> &#8377;<?= $dt['mrp']; ?></span>
                </div>
            <?php endforeach; ?>
        </div-->

    </div>
    <!-- container /- -->
</section>
<!-- Feature Product /- -->

<!-- Feature Product -->
<Section id="blog-section" class="blog-section" style="padding-bottom:0px;">
    <!-- container -->
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <!--h3>Latest From Our Blog</h3-->
        </div>
        <!-- Section Header /- -->

        <?php
        $cnt = 0;
        foreach ($blog as $dt): $i = $cnt + 1;
            ?>
            <?php if ($i == 1 || $i == 2): ?>
                <!--div class="col-md-6 col-sm-4 blog-content">
                    <article>
                        <div class="col-md-4 col-sm-4 col-xs-4 ow-left-padding">
                            <a class="post-thumbnail"><img
                                    src="<?php echo base_url(); ?>Assets/images/web_img/blog/<?= $dt['link']; ?>"
                                    alt="post-thumbnail"/></a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="#"><?= $dt['title']; ?></a></h2>
                            </header>
                            <footer class="entry-footer">
                                <span class="posted-on">
                                    <span class="sr-only">Posted on </span>
                                    <a rel="bookmark" href="#">
                                        <span class="entry-date"><?= $dt['date']; ?></span>
                                        <i class="fa fa-cal"></i>
                                    </a>
                                </span>

                                <span class="byline">
                                    <span class="author vcard">
                                        <span class="sr-only">Author </span>
                                        <a href="#" class="url fn n"><?= $dt['by']; ?>
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </span>
                                </span>
                            </footer>
                            <div class="entry-content">
                                <p><?= $dt['description']; ?></p>
                            </div>

                        </div>
                    </article>
                </div-->
            <?php endif; ?>
            <?php if ($i == 3 || $i == 4): ?>
                <!--div class="col-md-6 col-sm-4 blog-content">
                    <article>
                        <div class="col-md-4 col-sm-4 col-xs-4 ow-left-padding">
                            <a class="post-thumbnail"><img
                                    src="<?php echo base_url(); ?>Assets/images/blog/<?= $dt['link']; ?>"
                                    alt="post-thumbnail"/></a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="#"><?= $dt['title']; ?></a></h2>
                            </header>
                            <footer class="entry-footer">
                                <span class="posted-on">
                                    <span class="sr-only">Posted on </span>
                                    <a rel="bookmark" href="#">
                                        <span class="entry-date"><?= $dt['date']; ?></span>
                                        <i class="fa fa-cal"></i>
                                    </a>
                                </span>

                                <span class="byline">
                                    <span class="author vcard">
                                        <span class="sr-only">Author </span>
                                        <a href="#" class="url fn n"><?= $dt['by']; ?>
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </span>
                                </span>
                            </footer>
                            <div class="entry-content">
                                <p><?= $dt['description']; ?></p>
                            </div>

                        </div>
                    </article>
                </div-->
            <?php endif; ?>
        <?php endforeach; ?>


    </div>
</section>
<div class="pro-box">
    <div class="container">
        <div class="row">
            <div id="products" class="row list-group">
                <?php foreach ($fpro as $dt): ?>
                    <div class="item  col-xs-3 col-lg-3">
                        <div class="thumbnail">
                            <?php
                            if ($dt['is_csv'] == 1) { ?>
                                <img class="group list-group-image" src="<?php echo $dt['image'] ?>" alt="featured-img"/>
                            <?php } else { ?>
                                <img class="group list-group-image"
                                     src="<?php echo base_url(); ?>Assets/images/web_img/Product/<?php echo $dt['image'] ?>"
                                     alt="featured-img"/>
                            <?php } ?>
                            <div class="caption">
                                <h5 class="group inner list-group-item-heading">
                                    <?= $dt['product_name']; ?></h5>
                                <p class="group inner list-group-item-text">
                                   </p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <span class="amount"><del>&#8377;<?= $dt['temp_rate']; ?></del> &#8377;<?= $dt['mrp']; ?></span>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('Client/Helper/footer'); ?>
<?php $this->load->view('Client/Helper/flink'); ?>


