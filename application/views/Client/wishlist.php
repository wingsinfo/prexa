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
                    <h2>My Wishlist</h2>
                </div>
                <div class="table-area wishlist-area">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr class="c-head">
                                <th>Product Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Cart</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($tbl_wishlist) > 0) { ?>
                                <?php foreach ($tbl_wishlist as $dt): ?>
                                    <tr id="<?php echo base64_encode($dt['tbl_product_id']) ?>">
                                        <td><img
                                                src="<?php echo base_url(); ?>Assets/images/web_img/Product/<?php echo $dt['image'] ?>"
                                                style="width: 100px;height: 100px;"
                                                alt="<?php echo $dt['product_name']; ?>"></td>
                                        <td><?php echo $dt['product_name']; ?></td>
                                        <td><?php echo $dt['mrp']; ?></td>

                                        <td class=" c-wish">
                                            <a class="c_button"
                                               onclick="addcart(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)"
                                               title="Continue Shopinng">
                                                <span>Add To Bag</span>
                                            </a>
                                        </td>
                                        <td class="trash-btn">
                                            <a class="btn-remove"
                                               onclick="removewish(<?php echo "'" . base64_encode($dt['tbl_product_id']) . "'"; ?>)">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php
                            } else {
                                echo "<tr><td colspan='6'>Sorry No Data Found Continue Shopping</td></tr>";
                            }
                            ?>
                            </tbody>
                        </table>
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