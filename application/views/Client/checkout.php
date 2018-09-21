<?php $this->load->view('Client/helper/headerlink.php'); ?>


<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->
<!-- Checkout area -->
<?php if (isset($_SESSION['id']) != "") { ?>
    <div class="order_view">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-content table-responsive">
                    <table>
                        <thead>
                            <tr>
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
                                        <td><img
                                                src="<?php echo base_url(); ?>Assets/images/web_img/Product/<?php echo $dt['image'] ?>"
                                                alt="<?php echo $dt['product_name'] ?>"
                                                style="height: 100px;width: 100px"/></td>
                                        <td><?php echo $dt['product_name']; ?></td>
                                        <td><?php echo $dt['mrp']; ?></td>
                                        <td><?php echo $dt['qty']; ?></td>
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
                </div>

                <?php if (count($tbl_shoping_cart) > 0) { ?>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                            <div class=" place-section">
                                <div class="rate-subtotal">
                                    <h4>Subtotal <span><span class="fa fa-inr"></span><span
                                                id="st"><?php echo $tot; ?></span></span></h4>
                                    <h2>Grand Total <span><span class="fa fa-inr"></span><span
                                                id="gt"><?php echo $tot; ?></span></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<div class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <!-- Payment Method -->
                <div class="payment-method">
                    <!-- Panel Default -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <?php if (isset($_SESSION['id']) == "") { ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <form class="checkout-form product-form">
                                            <h2>Register with us for future convenience:</h2>
                                            <div class="checkout-form-inner field fix">

                                                <div><span class="alert alert-dismissable" id="bhayankar"></span>
                                                </div>
                                                <div class="input-box">
                                                    <label>Email Address <sup>*</sup></label>
                                                    <input type="email" required="required"
                                                           class="border-color form-control" id="ckreml">
                                                </div>
                                                <div class="input-box">
                                                    <label>Mobile No <sup>*</sup></label>
                                                    <input type="number" class="border-color form-control" id="ckrmno" required="required">
                                                </div>
                                                <div class="input-box">
                                                    <label>Password <sup>*</sup></label>
                                                    <input type="password" required="required"
                                                           class="border-color form-control"  id="ckrpsss">
                                                </div>
                                            </div>
                                            <div class="user-bottom fix">
                                                <button class="btn custom-button" id="ckreg" type="button">continue
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <form class="checkout-form product-form">
                                            <h2>Login</h2>
                                            <div class="submit-review field fix">
                                                <p class="title"><b>Already registered?</b></p>
                                                <p>Please log in below</p>
                                                <div class="account-form">
                                                    <div class="input-box">
                                                        <label>Email Address <sup>*</sup></label>
                                                        <input type="text" required="required"
                                                               class="border-color form-control"  id="crlemail">
                                                    </div>
                                                    <div class="input-box">
                                                        <label>Password <sup>*</sup></label>
                                                        <input type="password" required="required"
                                                               class="border-color form-control"  id="crlpass">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-bottom fix">
                                                <a href="#">Forgot Your Password?</a>
                                                <button class="btn custom-button" id="cklogin" type="button">login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <?php if (count($tbl_shoping_cart) > 0) { ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                            <div>
                                                <a href="#" data-toggle="modal" data-target="#address-popup">
                                                    <button type="button" class="btn btn-success btn-sm">Add New Address
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="clearfix">&nbsp;</div>
                                            <div class="clearfix">&nbsp;</div>
                                            <h3><b>Address</b></h3>
                                            <?php foreach ($add as $dt): ?>
                                                <div class="col-lg-4 col-md-4">
                                                    <b>name:</b>&nbsp; <?php echo $dt['name'] ?><br>
                                                    <b>address:</b>&nbsp; <?php echo $dt['address'] ?><br>
                                                    <b>state:</b>&nbsp; <?php echo $dt['state'] ?><br>
                                                    <b>city:</b>&nbsp; <?php echo $dt['city'] ?><br>
                                                    <b>pincode:</b>&nbsp; <?php echo $dt['pincode'] ?><br>
                                                    <b>mobile:</b>&nbsp; <?php echo $dt['phone_no'] ?><br>
                                                    <input type="radio" name="address" class="rdo"
                                                           id="adds<?php echo $dt['tbl_customer_address_id'] ?>"
                                                           onclick="setdefault(<?php echo $dt['tbl_customer_address_id'] ?>);" <?php
                                                           if ($dt['is_default'] == 1) {
                                                               echo "checked";
                                                           }
                                                           ?>>
                                                    <b>Select Address</b>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                            <form method="post" action="<?php base_url(); ?>Checkout/chkout">
                                                <h3><b>Payment Type</b></h3>
                                                <div>
                                                    <input type="radio" name="payment" value="0" checked >&nbsp;COD
                                                </div>
                                                <div class="button-check">
                                                    <div class="">
                                                        <button type="submit"
                                                                class="btn right-btn custom-button">
                                                            Continue
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div><!-- End Panel Default -->
                <!-- Panel Default -->
            </div>
            <!-- End Panel Gropup -->
        </div>
        <!-- End Payment Method -->
    </div>
</div>
<div class="modal fade" id="address-popup" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Address</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="alert-danger">
                            <span id="alrt"></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="account-box">
                            <form class="form-signin" method="post">
                                <div class="form-group ">
                                    <input type="text" id="aname" class="form-control" placeholder="Full Name" required autofocus/>
                                </div>
                                <div class="form-group ">
                                    <textarea id="aadds" class="form-control" placeholder="Address" required autofocus/></textarea>
                                </div>
                                <div class="form-group ">
                                    <input type="text" id="astat" class="form-control" placeholder="State" required autofocus/>
                                </div>
                                <div class="form-group ">
                                    <input type="text" id="acity" class="form-control" placeholder="City" required autofocus/>
                                </div>
                                <div class="form-group ">
                                    <input type="number" id="apin" class="form-control" placeholder="Pincode" required autofocus/>
                                </div>
                                <div class="form-group ">
                                    <input type="number" id="amob" class="form-control" placeholder="Mobile" required autofocus/>
                                </div>
                                <button class="btn btn-lg btn-block purple-bg" onclick="address()" type="button">
                                    Add
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
            }
//            else if (mobile.charAt(0) != "9" || mobile.charAt(0) != "8" || mobile.charAt(0) != "7") {
//                $('#bhayankar').html('Mobile No length must be Start with 9,8 or 7');
//                $('#bhayankar').show();
//                setTimeout(hide, 5000);
//            } 
            else if (password.trim() == "") {
                $('#bhayankar').html('Please Enter Password');
                $('#bhayankar').show();
                setTimeout(hide, 5000);
            } 
//            else if (password.length <= "6") {
//                $('#bhayankar').html('Password length must be grater then 6');
//                $('#bhayankar').show();
//                setTimeout(hide, 5000);
//            } 
            else {
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

//            alert('check');
            } else {
                $('#sadd').show();
//                alert('un-check');
            }
        });
    });
    var hide = function () {
        $('#bhayankar').hide();
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

    function address() {
        var name = document.getElementById('aname').value;
        var address = document.getElementById('aadds').value;
        var state = document.getElementById('astat').value;
        var city = document.getElementById('acity').value;
        var pincode = document.getElementById('apin').value;
        var mobile = document.getElementById('amob').value;
        var pat1 = /^\d{10}$/;
        var pat2 = /^\d{6}$/;
        var p2 = [7 - 9]
        if (name.trim() == "") {
            alert('Please Enter Name');
            return false;
        } else if (address.trim() == "") {
            alert('Please Enter Address');
            return false;
        } else if (state.trim() == "") {
            alert('Please Enter State');
            return false;
        } else if (city.trim() == "") {
            alert('Please Enter City');
            return false;
        } else if (pincode.trim() == "") {
            alert('Please Enter Pincode');
            return false;
        } else if (!pincode.match(pat2)) {
            alert('Invalid Pincode ,pincode must be have 6 digit');
            return false;
        } else if (mobile.trim() == "") {
            alert('Please Enter Mobile No');
            return false;
        } else if (!mobile.match(pat1)) {
            alert('Mobile No Have 10 digit');
            return false;
        } else if (mobile.charAt(0) != 9 && mobile.charAt(0) != 8 && mobile.charAt(0) != 7) {
            alert('Mobile No Start With 9,8 or 7');
            return false;
        } else {
            $.ajax({
                type: 'POST',
                data: {
                    'name': name,
                    'add': address,
                    'state': state,
                    'city': city,
                    'pin': pincode,
                    'pno': mobile
                },
                url: '<?php echo base_url(); ?>Checkout/address',
                dataType: 'json',
                success: function (data) {
                    if (data.success == 1) {
                        window.location.href = "<?php echo base_url(); ?>Checkout"
                    } else {
                        alert('Sorry Something went wrong');
                    }
                }
            });
        }
    }
</script>
