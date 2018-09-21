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
            <h2>Social Media</h2>
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
                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/Social_media/Add_data">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Icon selection*</label>
                                            <select class="form-control" name="icon">
                                                <option value="fa fa-facebook">Facebook</option>
                                                <option value="fa fa-twitter">Twitter</option>
                                                <option value="fa fa-google">Google</option>
                                                <option value="fa fa-insta">Insta</option>
                                                <option value="fa fa-facebook"></option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                            <label>Link*</label>
                                            <input type="text" name="link" class="form-control" placeholder="Enter Title Here...">
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
                                                    <th>Link</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $cnt = 0;
                                                foreach ($tbl_social_media as $dt): $cnt++; ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><i class="<?php echo $dt['icon']; ?>"></i></td>
                                                        <td><?php echo $dt['link']; ?></td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs edit" id="edit"
                                                                    value="<?php echo $dt['tbl_social_media_id']; ?>">Edit
                                                            </button>
                                                            |
                                                            <button class="btn btn-danger btn-xs del"
                                                                    value="<?php echo $dt['tbl_social_media_id']; ?>"> Delete
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
                <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Social_media/Update_data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Data</h4>
                    </div>
                    <input type="hidden" id="hid" name="id">
                    <div class="modal-body">
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Icon selection*</label>
                            <select class="form-control" id="eicon" name="icon">
                                <option value="fa fa-facebook">Facebook</option>
                                <option value="fa fa-twitter">Twitter</option>
                                <option value="fa fa-google">Google</option>
                                <option value="fa fa-insta">Insta</option>
                                <option value="fa fa-facebook"></option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                            <label>Link*</label>
                            <input type="text" id="elink" name="link" class="form-control" placeholder="Enter Title Here...">
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
                data: {'id': id, 'tbl': 'tbl_social_media'},
                dataType: 'json',
                success: function (html, textStatus, jqXHR) {
                    $('#hid').val(html.data[0].tbl_social_media_id);
                    $('#eicon').val(html.data[0].icon);
                    $('#elink').val(html.data[0].link);
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
                    data: {'id': id, 'tbl': 'tbl_social_media'},
                    dataType: 'html',
                    success: function (html, textStatus, jqXHR) {
                        window.location = '<?php echo base_url(); ?>Admin/Social_media';
                    }
                });
            } else {
                return false
            }
        });
    });

</script>