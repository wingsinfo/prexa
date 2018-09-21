<?php $this->load->view('Client/helper/headerlink.php'); ?>


<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->
<!-- Checkout area -->
<?php if (isset($_SESSION['id']) != "") { ?>
    <div class="order_view">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <?php if (count($order) > 0) { ?>
                    <?php
                    foreach ($order as $dt):
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-color"
                             id="<?php echo $dt['tbl_order_id']; ?>">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h4><b>Order No:</b>&nbsp;<?php echo "VMORD" . $dt['tbl_order_id'] ?></h4>
                                <h6><b>Order Date:</b>&nbsp;<?php echo date("d F Y", strtotime($dt['dat'])) ?>
                                </h6>
                                <img src="<?php echo base_url() ?>Assets/images/web_img/Product/<?php echo $dt['image']; ?>"
                                     alt="order" class="img-thumbnail" style="height: 150px;width: 130px;">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h4><b>Billing Address:</b></h4>
                                <p><?php echo $dt['name']; ?></p>
                                <p><?php echo $dt['address']; ?></p>
                                <p><?php echo $dt['city'] . "," . $dt['state'] . "," . $dt['country']; ?></p>
                                <p><?php echo $dt['phone_no']; ?></p>
                                <?php if ($dt['status'] == 1) { ?>
                                    <h5><b>Status:&nbsp; </b>
                                        <span style="color: red"
                                              id="lbl<?php echo $dt['tbl_order_id'] ?>">Order Canceled</span>
                                    </h5>
                                <?php } else { ?>
                                    <h5><b>Status:&nbsp; </b>
                                        <span style="color: green"
                                              id="lbl<?php echo $dt['tbl_order_id'] ?>">Order Placed</span>
                                    </h5>
                                <?php } ?>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <h5><b>Price:</b>&nbsp;<?php echo $dt['price']; ?></h5>
                                <h5><b>Quantity:</b>&nbsp;<?php echo $dt['qty']; ?></h5>
                                <h5><b>Total:</b>&nbsp;<?php echo($dt['price'] * $dt['qty']); ?></h5>
                                <?php if ($dt['dat']) { ?>
                                    <?php if ($dt['status'] == 0) { ?>
                                        <form method="post" action="Order/cancleOrder/<?php echo base64_encode($dt['tbl_order_id']); ?>">
                                        <button id="btn<?php echo $dt['tbl_order_id']; ?>"
                                                class="btn btn-danger">
                                                <!--onclick="cancleOrder(<?php /*echo $dt['tbl_order_id']; */?>)"-->

                                            <i class=""></i>Cancel
                                        </button>
                                        </form>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                    <?php endforeach; ?>
                    <?php
                } else { ?>
                    <div class="table-content">
                        <center>
                            <h2>Sorry No Data Found <a href="<?php echo base_url(); ?>" style="text-decoration: none;">Continue
                                    Shopping</a></h2>;
                        </center>
                    </div>
                <?php }
                ?>

            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="order_view">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <center>
                    <h2>No Order Found Continue Shopping <br> OR <br> Login To show Your Order </h2>
                </center>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<!-- end discount area -->
<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->


<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#bhayankar').hide();
        $('#ckreg').click(function () {
            var email = document.getElementById('ckreml').value;
            var mobile = document.getElementById('ckrmno').value;
            var password = document.getElementById('ckrpsss').value;
            var emailformet = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var pass = document.getElementById('lpass').value;
            var pat1 = /^\d{10}$/;
            var p2 = [7 - 9]
            if (email.trim() == "") {
                $('#bhayankar').html('Please Enter Email Address');
                $('#bhayankar').addClass('danger');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else if (!email.match(emailformet)) {
                $('#bhayankar').html('Invalid Email');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else if (mobile.trim() == "") {
                $('#bhayankar').html('Please Enter Mobile No');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else if (!mobile.match(pat1)) {
                $('#bhayankar').html('Mobile No length must be 10');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else if (mobile.charAt(0) != "9" || mobile.charAt(0) != "8" || mobile.charAt(0) != "7") {
                $('#bhayankar').html('Mobile No length must be Start with 9,8 or 7');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else if (password.trim() == "") {
                $('#bhayankar').html('Please Enter Password');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else if (password.length <= "6") {
                $('#bhayankar').html('Password length must be grater then 6');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } else {
                $.ajax({
                    type: 'POST',
                    data: {
                        'email': email,
                        'password': password,
                        'mobile': mobile,
                    },
                    url: '<?php echo base_url(); ?>Checkout/Add_data',
                    dataType: 'json',
                    success: function (data) {
                        if (data.success != "") {
                            $('#bhayankar').html(data.msg);
                            $('#bhayankar').show();
                            setTimeout(hide, 5000);
                        }
                    }
                });

            }
        });
        $('#cklogin').click(function () {
            var email = document.getElementById('crlemail').value;
            var emailformet = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var pass = document.getElementById('crlpass').value;
            if (email.trim() == "") {
                alert('Please Enter Email Address');
                return false;
//            $('#alrt').html('Please Enter Email Address');
//            $('#alrt').show();
//            setTimeout(hide, 5000);
            } else if (!email.match(emailformet)) {
                alert('Invalid Email');
                return false;
//            $('#alrt').html('Invalid Email');
//            $('#alrt').show();
//            setTimeout(hide, 5000);
            } else if (pass.trim() == "") {
                alert('Please Enter Password');
                return false;
//            $('#alrt').html('Please Enter Password');
//            $('#alrt').show();
//            setTimeout(hide, 5000);
            } else {
                $.ajax({
                    type: 'POST',
                    data: {
                        'username': email,
                        'password': pass,
                    },
                    url: '<?php echo base_url(); ?>Helper/checklogin',
                    dataType: 'json',
                    success: function (data) {
                        if (data.success == 1) {
                            window.location.href = "<?php echo base_url(); ?>Checkout";
                        } else if (data.success == 2) {
                            alert('Sorry Your Account Is not Active \n Please check Your Email To active Your Account');
                        } else {
                            alert('Invalid Username & password');
                        }
                    }
                });
            }
        });
        $('#chksm').click(function () {
            if (document.getElementById('chksm').checked) {
                $('#sadd').hide();
            } else {
                $('#sadd').show();
            }
        });
    });
    var hide = function () {
        $('#bhayankar').hide();
    }

    function cancleOrder(d) {
//        $("btn" + d).addClass('disable');
        $.ajax({
            type: 'POST',
            data: {
                'id': btoa(d),
            },
            url: '<?php echo base_url() . "Order/cancleOrder"; ?>',
            dataType: 'json',
            success: function (data) {
                if (data.success == '1') {
                    $("btn" + d).hide();
                    $("lbl" + d).html("Order Canceled");
                } else {
                    alert('Sorry Something went wrong');
                }
            }
        });
    }

    function setdefault(id) {
        $.ajax({
            type: 'POST',
            data: {
                'upid': id,
            },
            url: '<?php echo base_url(); ?>Checkout/setdefault',
            dataType: 'json',
            success: function (data) {
                if (data.success == 1) {
                    $(".rdo").removeAttr('Checked');
                } else {
                    alert('Sorry Something went wrong');
                }
            }
        });
    }
</script>
