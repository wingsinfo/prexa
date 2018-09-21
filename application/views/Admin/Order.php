<?php $this->load->view('Admin/helper/hlink'); ?>
<?php $this->load->view('Admin/helper/top') ?>
<?php $this->load->view('Admin/helper/sidebar') ?>
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <h2>Order</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <p>Order Detail</p>
                        </div>

                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-md-12 col-xs-12">
                                    <div class="tabbable-panel">
                                        <div class="tabbable-line">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_default_1">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                        <div class="clearfix">&nbsp;</div>
                                                        <table class="example table table-responsive table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td>Sr. No.</td>
                                                                    <td>Order NO</td>
                                                                    <td>Product Name</td>
                                                                    <td>Image</td>
                                                                    <td>Name</td>
                                                                    <td>Address</td>
                                                                    <td>City</td>
                                                                    <td>State</td>
                                                                    <td>Pincode</td>
                                                                    <td>Phone No</td>
                                                                    <td>Qty</td>
                                                                    <td>Price</td>
                                                                    <td>Date</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_default_2">

                                                </div>
                                                <div class="tab-pane" id="tab_default_3">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                        <div class="clearfix">&nbsp;</div>

                                                        <div class="clearfix">&nbsp;
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Footer Start Here -->
        <?php $this->load->view('Admin/helper/footer') ?>
        <!--Footer End Here -->
        <!-- Modal -->
</section>
<?php $this->load->view('Admin/helper/right-sidebar') ?>
<?php $this->load->view('Admin/helper/flink'); ?>
<script type="text/javascript">
    var tbl;
    var add = 1;
    $(document).ready(function () {
        //Initialize tooltips
        tbl = $('.example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url(); ?>Admin/Order/getData",
                type: "post", // method  , by default get
                error: function () {  // error handling
                    $(".example-error").html("");
                    $(".example").html('<tbody class="simple-table1-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
                    $(".example_processing").css("display", "none");
                }
            }
        });


    });

</script>