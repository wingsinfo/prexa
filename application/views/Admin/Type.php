<?php $this->load->view('Admin/helper/hlink'); ?>
<!--Topbar Start Here-->
<?php $this->load->view('Admin/helper/top') ?>
<!--Topbar End Here-->
<!--Leftbar Start Here-->
<?php $this->load->view('Admin/helper/sidebar') ?>
<!--Leftbar End Here-->
<!--Page Container Start Here-->
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <h2>Type</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Add Data Here...</h3>
                        </div>

                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-md-12 col-xs-12">
                                    <form method="post" enctype="multipart/form-data"
                                          action="<?php echo base_url(); ?>Admin/Type/Add_data">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Title*</label>
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="Enter Title Here...">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Product Type selection*</label>
                                            <select class="form-control" name="ptid">
                                                <?php foreach ($tbl_product_type as $dt): ?>
                                                    <option
                                                        value="<?php echo $dt['tbl_product_type_id']; ?>"><?php echo $dt['name'] ?></option>
                                                    <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <input type="submit" name="submit" value="submit" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Banner Details</h3>
                        </div>
                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-md-12 col-xs-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr.no</th>
                                                    <th>Title</th>
                                                    <th>Product Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $cnt = 0;
                                                foreach ($tbl_type as $dt): $cnt++;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php echo $dt['name']; ?></td>
                                                        <?php foreach ($pro[$dt['tbl_product_type_id']] as $dts): ?>
                                                            <td><?= $dts['name']; ?></td>
    <?php endforeach; ?>
                                                        <td>
                                                            <button class="btn btn-success btn-xs edit" id="edit"
                                                                    value="<?php echo $dt['tbl_type_id']; ?>">Edit
                                                            </button>
                                                            |
                                                            <button class="btn btn-danger btn-xs del"
                                                                    value="<?php echo $dt['tbl_type_id']; ?>"> Delete
                                                            </button>
                                                        </td>
                                                    </tr>
<?php endforeach; ?>
                                            </tbody>
                                        </table>
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

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Type/Update_data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Data</h4>
                    </div>
                    <input type="hidden" id="hid" name="id">

                    <div class="modal-body">
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Title*</label>
                            <input id="etitle" type="text" name="name" class="form-control"
                                   placeholder="Enter Title Here...">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Product Type selection*</label>
                            <select class="form-control" name="ptid" id="ebid">
<?php foreach ($tbl_product_type as $dt): ?>
                                    <option
                                        value="<?php echo $dt['tbl_product_type_id']; ?>"><?php echo $dt['name'] ?></option>
<?php endforeach; ?>
                            </select>
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
    <!--Footer End Here -->
</section>
<!--Page Container End Here-->
<!--Rightbar Start Here-->
<?php $this->load->view('Admin/helper/right-sidebar') ?>
<!--Rightbar End Here-->
<?php $this->load->view('Admin/helper/flink'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.edit').click(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>Helper/Edit_data',
                data: {'id': id, 'tbl': 'tbl_type'},
                dataType: 'json',
                success: function (html, textStatus, jqXHR) {
                    $('#hid').val(html.data[0].tbl_type_id);
                    $('#ebid').val(html.data[0].tbl_product_type_id);
                    $('#etitle').val(html.data[0].name);
                    $('#myModal').modal('show');
                }
            });

        });

        $('.del').click(function () {
            var id = $(this).val();
            var x = confirm('Are You Sure You Went To Delete? ');
            if (x) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>Helper/Delete_data',
                    data: {'id': id, 'tbl': 'tbl_type'},
                    dataType: 'html',
                    success: function (html, textStatus, jqXHR) {
                        window.location = '<?php echo base_url(); ?>Admin/Type';
                    }
                });
            } else {
                return false
            }
        });
    });

</script>