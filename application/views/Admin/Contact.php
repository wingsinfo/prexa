<?php $this->load->view('Admin/helper/hlink'); ?>
<?php $this->load->view('Admin/helper/top'); ?>
<?php $this->load->view('Admin/helper/sidebar'); ?>
<!--Page Container Start Here-->
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <h2>Contact view</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>DAta add Here...</h3>
                        </div>

                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-md-12 col-xs-12">
                                    <form method="post" action="<?php echo base_url(); ?>Admin/Contact/Add_data">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Title*</label>                                        	
                                            <input type="text" name="title" class="form-control" placeholder="Enter Title Here...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>mobile*</label>                                        	
                                            <input type="text" name="mobile" class="form-control" placeholder="Enter mobile Here...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Email*</label>                                        	
                                            <input type="text" name="email" class="form-control" placeholder="Enter Email Here...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Map-Link*</label>                                        	
                                            <input type="text" name="mlink" class="form-control" placeholder="Enter Map link Here...">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <label>Address*</label>                                        	
                                            <textarea class="form-control" name="address" placeholder="Enter Address Here..."></textarea>
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
                            <h3>Contact Details</h3>
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
                                                    <td>Sr. No</td>
                                                    <td>Title</td>
                                                    <td>Mobile</td>
                                                    <td>E-Mail</td>
                                                    <td>M-Link</td>
                                                    <td>Address</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $cnt = 0;
                                                foreach ($tbl_contact as $dt): $cnt++
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><?php echo $dt['title']; ?></td>
                                                        <td><?php echo $dt['mobile']; ?></td>
                                                        <td><?php echo $dt['email']; ?></td>
                                                        <td><?php echo $dt['mlink']; ?></td>
                                                        <td><?php echo $dt['address']; ?></td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs edit" id="edit"
                                                                    value="<?php echo $dt['tbl_contact_id']; ?>">Edit
                                                            </button>
                                                            |
                                                            <button class="btn btn-danger btn-xs del"
                                                                    value="<?php echo $dt['tbl_contact_id']; ?>"> Delete
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
                <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Contact/Update_data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Data</h4>
                    </div>
                    <input type="hidden" id="hid" name="id">
                    <div class="modal-body">
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Title*</label>
                            <input type="text" id="etitle" name="title" class="form-control" placeholder="Enter Title Here...">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>mobile*</label>
                            <input type="text" id="emobile" name="mobile" class="form-control" placeholder="Enter mobile Here...">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Email*</label>
                            <input type="text" id="eemail" name="email" class="form-control" placeholder="Enter Email Here...">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Map-Link*</label>
                            <input type="text" id="emlink" name="mlink" class="form-control" placeholder="Enter Map link Here...">
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Address*</label>
                            <textarea class="form-control" id="eaddress" name="address" placeholder="Enter Address Here..."></textarea>
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
<?php $this->load->view('Admin/helper/flink'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.edit').click(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>Helper/Edit_data',
                data: {'id': id, 'tbl': 'tbl_contact'},
                dataType: 'json',
                success: function (html, textStatus, jqXHR) {
                    $('#hid').val(html.data[0].tbl_contact_id);
                    $('#etitle').val(html.data[0].title);
                    $('#eaddress').val(html.data[0].address);
                    $('#emobile').val(html.data[0].mobile);
                    $('#eemail').val(html.data[0].email);
                    $('#emlink').val(html.data[0].mlink);
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
                    data: {'id': id, 'tbl': 'tbl_contact'},
                    dataType: 'html',
                    success: function (html, textStatus, jqXHR) {
                        window.location = '<?php echo base_url(); ?>Admin/Contact';
                    }
                });
            } else {
                return false
            }
        });
    });

</script>