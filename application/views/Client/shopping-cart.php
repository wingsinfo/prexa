<?php $this->load->view('Client/helper/headerlink.php'); ?>


<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->

<!--Cart Main Area Start-->
<div class="cart-main-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="heading-title">Shopping cart</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- table start -->
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-remove">Remove</th>
                                <th class="product-thumbnail">Images</th>
                                <th class="product-name">Product name</th>
                                <th class="real-product-price">unit price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">subTotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($tbl_shoping_cart) > 0) { ?>
                                <?php
                                $tot = 0;
                                foreach ($tbl_shoping_cart as $dt):
                                    ?>
                                    <tr>
                                        <td class="product-remove">
                                            <a onclick="RemoveCart(<?php echo "'" . base64_encode($dt['tbl_shoping_cart_id']) . "'" ?>)">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                        <td><img
                                                src="<?php echo base_url(); ?>Assets/images/web_img/Product/<?php echo $dt['image'] ?>"
                                                alt="<?php echo $dt['product_name'] ?>"
                                                style="height: 100px;width: 100px"/></td>
                                        <td><?php echo $dt['product_name']; ?></td>
                                        <td><?php echo $dt['mrp']; ?></td>
                                        <td><input type="number" value="<?php echo $dt['qty']; ?>" max="50" min="1"
                                                   id="cg<?php echo $dt['tbl_shoping_cart_id'] ?>"
                                                   onclick="cg(<?php echo "'" . base64_encode($dt['tbl_shoping_cart_id']) . "'" ?>)">
                                        </td>
                                        <td><?php
                                            $tot += $dt['qty'] * $dt['mrp'];
                                            echo $dt['qty'] * $dt['mrp'];
                                            ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php
                            } else {
                                echo "<tr><td colspan='6'>Sorry No Data Found Continue Shopping</td></tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                        <div class="cart-s-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                                    <div class="buttons-cart">
                                        <a href="<?php echo base_url(); ?>">Continue Shopping</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                    <div class="buttons-cart button-cart-right">
                                        <span class="shopping-btn">
                                            <a onclick="clr()">clear shopping cart</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- table end -->
            </div>
        </div>
        <!-- place selection start -->
        <?php if (count($tbl_shoping_cart) > 0) { ?>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div class=" place-section">
                        <div class="rate-subtotal">
                            <h4>Subtotal <span><span class="fa fa-inr"></span><span
                                        id="st"><?php echo $tot; ?></span></span></h4>
                            <h2>Grand Total <span><span class="fa fa-inr"></span><span
                                        id="gt"><?php echo $tot; ?></span></span></h2>
                            <a class="check-cart-btn" href="<?php echo base_url();?>Checkout">Proceed to checkout</a>
                            <p>checkout with maltiple Address</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--Cart Main Area End-->

<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->
<!-- quickview product -->
<?php $this->load->view('Client/helper/quickview.php') ?>

<!-- END quickview product -->

<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>
<script type="text/javascript">
    function clr() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Cart/remove',
            dataType: 'json',
            success: function (data) {
                window.location.href = "<?php echo base_url(); ?>Cart";
            }
        });
    }

    function RemoveCart(p) {
        $.ajax({
            type: 'POST',
            data: {
                'pro': p
            },
            url: '<?php echo base_url(); ?>Cart/remove1',
            dataType: 'json',
            success: function (data) {
//                alert('Remove From cart Sucessfully');
                window.location.href = "<?php echo base_url(); ?>Cart";
            }
        });
    }


    $(document).ready(function () {
        $('#cg').change(function () {
            var val = $(this).val();
//            alert(val);
        });
    });
</script>
</body>
</html>