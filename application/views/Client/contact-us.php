<?php $this->load->view('Client/helper/headerlink.php'); ?>


<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->

<!-- shop page area start -->
<div class="contact-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shop-head furniture-head">
                    <ul class="shop-head-menu ">
                        <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Map area -->
                        <div class="map-area">
                            <div id="googleMap" style="width:100%;height:410px;"></div>
                        </div><!-- End Map area -->
                    </div>
                </div>
                <div class="row">
                    <!-- contact info -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-info">
                            <h3>Contact info</h3>
                            <ul>
                                <?php foreach ($contact as $dt): ?>
                                    <li>
                                        <i class="fa fa-map-marker"></i> <strong>Address</strong>
                                        <?php echo $dt['address'] ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i> <strong>Phone</strong>
                                        <?php echo $dt['mobile'] ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile"></i> <strong>Email</strong>
                                        <a href="#"><?php echo $dt['email'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div><!-- End contact info -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                            <div class="row">
                                <form action="<?php echo base_url(); ?>" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="name" type="text" placeholder="Name (required)"/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="email" type="email" placeholder="Email (required)"/>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <input name="subject" type="text" placeholder="Subject"/>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                                  placeholder="Message"></textarea>
                                        <input type="submit" value="Submit Form"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->
<!--footer-area start -->
<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->
<!-- quickview product -->
<?php $this->load->view('Client/helper/quickview.php') ?>

<!-- END quickview product -->

<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(23.81033, 90.41252)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);


        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            icon: 'img/logo/map-marker.png',
            map: map
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>