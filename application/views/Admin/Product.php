<?php $this->load->view('Admin/helper/hlink'); ?>
<?php $this->load->view('Admin/helper/top') ?>
<?php $this->load->view('Admin/helper/sidebar') ?>
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <h2>Product</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <p>Add Data Here...</p>
                        </div>

                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-md-12 col-xs-12">
                                    <div class="tabbable-panel">
                                        <div class="tabbable-line">
                                            <ul class="nav nav-tabs ">
                                                <li class="active">
                                                    <a href="#tab_default_1" data-toggle="tab">
                                                        Product Details </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_default_2" data-toggle="tab">
                                                        ADD Product </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_default_3" data-toggle="tab">
                                                        ADD Product CSV </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_default_1">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                        <div class="clearfix">&nbsp;</div>
                                                        <table class="example table table-responsive table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td>Sr. No.</td>
                                                                    <td>Image</td>
                                                                    <td>Category</td>
                                                                    <td>Product Name</td>
                                                                    <td>Price</td>
                                                                    <td>Starck</td>
                                                                    <td>Stock</td>
                                                                    <td>Action</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_default_2">
                                                    <div class="wizard">
                                                        <div class="wizard-inner">
                                                            <div class="connecting-line"></div>
                                                            <ul class="nav nav-tabs" role="tablist">

                                                                <li role="presentation" class="active">
                                                                    <a href="#step1" data-toggle="tab" aria-controls="step1"
                                                                       role="tab" title="Product Add">
                                                                        <span class="round-tab">
                                                                            <i class="glyphicon glyphicon-folder-open"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li role="presentation" class="disabled">
                                                                    <a href="#step2" data-toggle="tab" aria-controls="step2"
                                                                       role="tab" title="Type Add">
                                                                        <span class="round-tab">
                                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li role="presentation" class="disabled">
                                                                    <a href="#step3" data-toggle="tab" aria-controls="step3"
                                                                       role="tab" title="Image Add">
                                                                        <span class="round-tab">
                                                                            <i class="glyphicon glyphicon-picture"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                        </div>

                                                        <form role="form" method="post" action="<?= base_url(); ?>Admin/Product/Add_data" enctype="multipart/form-data">
                                                            <div class="tab-content"
                                                                 style="border:  1px solid #e0e0e0;border-top: 0px;">
                                                                <div class="tab-pane active" role="tabpanel" id="step1">
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>Category*</label>
                                                                        <select class="form-control" name="tmcid">
                                                                            <?php foreach ($cat as $dt): ?>
                                                                                <option value="<?= $dt['tbl_main_category_id']; ?>"><?= $dt['name']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>Product Name*</label>
                                                                        <input type="text" name="pn"
                                                                               class="form-control"
                                                                               placeholder="Enter mobile Here...">
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>MRP*</label>
                                                                        <input type="text" name="mrp" class="form-control"
                                                                               placeholder="Enter MRP  Here...">
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>RP*</label>
                                                                        <input type="text" name="rp" class="form-control"
                                                                               placeholder="Enter RP  Here...">
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>Weight*</label>
                                                                        <input type="text" name="weight"
                                                                               class="form-control"
                                                                               placeholder="Enter weight Here...">
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>stock*</label>
                                                                        <input type="text" name="stock"
                                                                               class="form-control"
                                                                               placeholder="Enter stock Here...">
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>sort Desc*</label>
                                                                        <textarea class="form-control"
                                                                                  name="sd" placeholder="Enter sort Desc Here..."></textarea>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>Long Desc*</label>
                                                                        <textarea class="form-control"
                                                                                  name="ld" placeholder="Enter long desc Here..."></textarea>
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>Temp Value*</label>
                                                                        <input type="text" name="temp_rate"
                                                                               class="form-control"
                                                                               placeholder="Enter Temp Value Here...">
                                                                    </div>
                                                                    <div
                                                                        class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                        <label>Image*</label>
                                                                        <input type="file" class="form-control" name="img">
                                                                    </div>
                                                                    <ul class="list-inline pull-right">
                                                                        <li>
                                                                            <button type="button"
                                                                                    class="btn btn-primary next-step">Save
                                                                                and continue
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane" role="tabpanel" id="step2">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <?php
                                                                        $cnt = 0;
                                                                        foreach ($pt as $dt):
                                                                            ?>
                                                                            <div class="checkdata"
                                                                                 style="border:1px solid #e0e0e0;padding:5px;margin-bottom: 5px;">
                                                                                <label class="alert alert-success col-lg-12"><?= $dt['name']; ?></label>

                                                                                <div class="form-group">
                                                                                    <?php foreach ($t[$dt['tbl_product_type_id']] as $dts): ?>
                                                                                        <input type="checkbox" value="<?= $dts['tbl_type_id']; ?>" name="type[]"
                                                                                               style="margin-right: 7px;"><?= $dts['name']; ?>
                                                                                           <?php endforeach; ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php endforeach; ?>
                                                                    </div>
                                                                    <div class="clearfix">&nbsp;</div>
                                                                    <ul class="list-inline pull-right">
                                                                        <li>
                                                                            <button type="button"
                                                                                    class="btn btn-default prev-step">
                                                                                Previous
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <button type="button"
                                                                                    class="btn btn-primary next-step">Save
                                                                                and continue
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="tab-pane" role="tabpanel" id="step3">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                                                            <center>
                                                                                <div class="form-group">
                                                                                    <label>Images Upload*</label>
                                                                                    <input type="file" name="imgs[]" class="form-control">
                                                                                    <input type="button" class="plus btn btn-success pull-right"
                                                                                           style="margin-right: -100px;margin-top: -40px;" value="Add New">
                                                                                </div>
                                                                                <div class="addnewimg"></div>
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="list-inline pull-right">
                                                                        <li>
                                                                            <button type="button"
                                                                                    class="btn btn-default prev-step">
                                                                                Previous
                                                                            </button>
                                                                        </li>
                                                                        <li>
                                                                            <button type="submit"
                                                                                    class="btn btn-primary btn-info-full next-step">
                                                                                Save and continue
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_default_3">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                        <div class="clearfix">&nbsp;</div>
                                                        <form action="<?= base_url(); ?>Admin/Product/Upload_csv" method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <div class="col-lg-6">
                                                                    <label for="Upload CSV">Upload CSV</label>
                                                                    <input type="file" name="csv" class="form-control col-md-3 col-lg-3">
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label for="download">Upload File</label>
                                                                    <input type="submit" class="btn btn-primary form-control" value="Upload"></a>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label for="download">Download Sample File</label>
                                                                    <a style="text-decoration: none" href="<?= base_url(); ?>Assets/simple.csv" download="BulkProductUpload.csv"><input type="button" class="btn btn-success form-control" value="Download"></a>
                                                                </div>
                                                            </div>
                                                        </form>
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
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Product/Update_data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Data</h4>
                        </div>
                        <input type="hidden" id="hid" name="id">

                        <div class="modal-body">
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Category*</label>
                                <select class="form-control" name="tmcid" id="tmcid">
                                    <?php foreach ($cat as $dt): ?>
                                        <option value="<?= $dt['tbl_main_category_id']; ?>"><?= $dt['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Product Name*</label>
                                <input type="text" name="pn"
                                       class="form-control" id="eproduct_name"
                                       placeholder="Enter mobile Here...">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>MRP*</label>
                                <input type="text" name="mrp" id="emrp" class="form-control"
                                       placeholder="Enter MRP  Here...">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>RP*</label>
                                <input type="text" id="erp" name="rp" class="form-control"
                                       placeholder="Enter RP  Here...">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Weight*</label>
                                <input type="text" name="weight" id="eweight"
                                       class="form-control"
                                       placeholder="Enter weight Here...">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>stock*</label>
                                <input type="text" name="stock" id="estock"
                                       class="form-control"
                                       placeholder="Enter stock Here...">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>sort Desc*</label>
                                <textarea class="form-control" id="esort_description"
                                          name="sd" placeholder="Enter sort Desc Here..."></textarea>
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Long Desc*</label>
                                <textarea class="form-control" id="elong_description"
                                          name="ld" placeholder="Enter long desc Here..."></textarea>
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Temp Value*</label>
                                <input type="text" name="temp_rate"
                                       class="form-control" id="etemp_rate"
                                       placeholder="Enter Temp Value Here...">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Image*</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div
                                class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                <label>Current Image*</label>

                                <div id="imgtag"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Product/Update_type">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Type</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="hid1" name="id">
                            <?php
                            $cnt = 0;
                            foreach ($pt as $dt):
                                ?>
                                <div class="checkdata form-group"
                                     style="border:1px solid #e0e0e0;padding:5px;margin-bottom: 5px;">
                                    <label class="alert alert-success col-lg-12"><?= $dt['name']; ?></label>

                                    <div class="form-group">
                                        <?php foreach ($t[$dt['tbl_product_type_id']] as $dts): ?>
                                            <input type="checkbox" value="<?= $dts['tbl_type_id']; ?>"
                                                   id="ch<?= $dts['tbl_type_id']; ?>" name="type[]"
                                                   style="margin-right: 7px;"><?= $dts['name']; ?>
                                               <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="myModal2" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Product/Update_img">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Image</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="hid2" name="id">

                            <div id="imginput" class="form-group"></div>
                            <div class="addnewimgs" id="addnewimgs"></div>
                            <div id="imgbox" class="form-group"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Save</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<?php $this->load->view('Admin/helper/right-sidebar') ?>
<?php $this->load->view('Admin/helper/flink'); ?>
<script type="text/javascript">
    var tbl;
    var add = 1;
    function getimg(pid) {
        var id = pid;
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Admin/Product/Edit_type',
            data: {'id': id, 'tbl': 'tbl_addpro_img'},
            dataType: 'json',
            success: function (html, textStatus, jqXHR) {
                $('#hid2').val(pid);
                add = html.data.length;
                $('#imginput').html('');
                $('#imgbox').html('');
                if (add < 10) {
                    $('#imginput').append('<input type="file" name="imgs[]" class="form-control" style="width: 84%"><input type="button" onclick="pluss();" class="btn btn-success pull-right" style="margin-top: -39px;" value="Add New"></div>')
                }
                for (i = 0; i <= html.data.length - 1; i++) {
                    $('#imgbox').append('<div class="col-md-3 col-lg-3 form-group"><img src="<?= base_url(); ?>Assets/images/web_img/Product/' + html.data[i].img + '" height="100" width="100"></div>');
                }
                $('#myModal2').modal('show');
            }
        });
    }
    function pluss() {
        if (add <= 8) {
            add = add + 1;
            $('.addnewimgs').append('<div id="rem' + add + '" class="form-group rem' + add + '"><input type="file" name="imgs[]" class="form-control" style="width: 84%"><input type="button" onclick="rem(' + add + ');" class="rem btn btn-danger pull-right" style="margin-top: -39px;"  value="Remove"> </div></div>');
        } else {
            alert("Limit Over");
        }
    }
    function gettype(pid) {
        var id = pid;
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Admin/Product/Edit_type',
            data: {'id': id, 'tbl': 'tbl_addpro_type'},
            dataType: 'json',
            success: function (html, textStatus, jqXHR) {
                $('#hid1').val(pid);
                for (i = 0; i <= html.data.length - 1; i++) {
                    $('#ch' + html.data[i].tbl_type_id).prop('checked', 'checked')
                }
                $('#myModal1').modal('show');
            }
        });
    }
    function getdata(pid) {
        var id = pid;
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Helper/Edit_data',
            data: {'id': id, 'tbl': 'tbl_product'},
            dataType: 'json',
            success: function (html, textStatus, jqXHR) {
                $('#hid').val(html.data[0].tbl_product_id);
                $('#tmcid').val(html.data[0].tbl_main_category_id);
                $('#eproduct_name').val(html.data[0].product_name);
                $('#imgtag').html('<img src="<?php echo base_url(); ?>Assets/images/web_img/Product/' + html.data[0].image + '" height="100" width="100">');
                $('#esort_description').val(html.data[0].sort_description);
                $('#elong_description').val(html.data[0].long_description);
                $('#emrp').val(html.data[0].mrp);
                $('#erp').val(html.data[0].rp);
                $('#eweight').val(html.data[0].weight);
                $('#estock').val(html.data[0].stock);
                $('#etemp_rate').val(html.data[0].temp_rate);
                $('#myModal').modal('show');
            }
        });
    }
    function deletes(pid) {
        var id = pid;
        var x = confirm('Are You Sure You Went To Delete? ');
        if (x) {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>Helper/Delete_data',
                data: {'id': id, 'tbl': 'tbl_product'},
                dataType: 'html',
                success: function (html, textStatus, jqXHR) {
                    tbl.draw();
                }
            });
        } else {
            return false
        }
    }
    function rem(id) {
        console.log(add);
        add = add - 1;
        $('#rem' + id).remove();
    }
    $(document).ready(function () {
        //Initialize tooltips
        tbl = $('.example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url(); ?>Admin/Product/Get_product",
                type: "post", // method  , by default get
                error: function () {  // error handling
                    $(".example-error").html("");
                    $(".example").html('<tbody class="simple-table1-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
                    $(".example_processing").css("display", "none");
                }
            }
        });
        $('.plus').click(function () {
            if (add <= 9) {
                add = add + 1;
                $('.addnewimg').append('<div id="rem' + add + '" class="form-group rem' + add + '"><input type="file" name="imgs[]" class="form-control"><input type="button" onclick="rem(' + add + ');" class="rem btn btn-danger pull-right" style="margin-right: -100px;margin-top: -40px;"  value="Remove"> </div></div>');
            } else {
                alert("Limit Over");
            }
        });

        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });
    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

</script>