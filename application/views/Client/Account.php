<?php $this->load->view('Client/helper/headerlink.php'); ?>

<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->

<!-- shop page area start -->
<div class="shop-product-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="area-title bdr">
                    <h2>My Profile</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">

                </div>
                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="text" class="form-control" placeholder="Enter Old password here...">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" placeholder="Enter New Password here...">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
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
<script type="text/javascript">

    function addcart(p) {
        $.ajax({
            type: 'POST',
            data: {
                'pro': p,
            },
            url: '<?php echo base_url(); ?>Cart/Add_Bag',
            dataType: 'json',
            success: function (data) {
                if (data.success == 1) {
                    $('#' + p).fadeOut('fast');
                    alert('Added in Bag successfully');
                } else if (data.success == 2) {
                    $('#' + p).fadeOut('fast');
                    alert('Added in Bag successfully');
                } else {
                    alert('Something went Wrong Please try again later');
                }
            }
        });
    }

    function removewish(p) {
        $.ajax({
            type: 'POST',
            data: {
                'pro': p,
            },
            url: '<?php echo base_url(); ?>Wishlist/RemoveWish',
            dataType: 'json',
            success: function (data) {
                if (data.success == 1) {
                    $('#' + p).fadeOut('fast');
                    alert('Remove successfully');
                } else {
                    alert('Something went Wrong Please try again later');
                }
            }
        });
    }
</script>
</body>
</html>