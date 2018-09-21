<?php $this->load->view('Admin/helper/hlink');?>
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
            <div class="row">
                <div class="col-md-6">
                    <h2>Slider Adv</h2>
                </div>
                <div class="col-md-6">
                    <ul class="list-page-breadcrumb">
                        <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                        <li class="active-page">Slider Adv</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Add Haha Here...</h3>
                        </div>
                        
                    </div>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-md-12 col-xs-12">
                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>Admin/Banner_adv/Add_data">
                                    	<div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                        	<label>Title*</label>                                        	
                                            <input type="text" name="title" class="form-control" placeholder="Enter Title Here...">
                                        </div>
                                       
                                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                                        	<label>Banner selection*</label>                                        	
                                            <select class="form-control" name="bid">
                                            	<?php  foreach ($tbl_banner as $dt): ?>
                                                <option value="<?php echo $dt['tbl_banner_id']; ?>"><?php echo $dt['title'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        	<label>Description*</label>                                        	
                                            <textarea class="form-control" name="desc" placeholder="Enter the Description"></textarea>
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
                                                    <th>Description</th>
                                                    <th>Action</th>
                                           		 </tr>
                                            </thead>
                                            <tbody>
                                                <?php $cnt=0; foreach ($tbl_banner_adv as $dt): $cnt++; ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $dt['title']; ?></td>
                                                    <td><?php echo $dt['description']; ?></td>
                                                    <td>
                                                        <button class="btn btn-success btn-xs edit" id="edit"
                                                                value="<?php echo $dt['tbl_banner_adv_id']; ?>">Edit
                                                        </button>
                                                        |
                                                        <button class="btn btn-danger btn-xs del"
                                                                value="<?php echo $dt['tbl_banner_adv_id']; ?>"> Delete
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
                <form method="post" enctype="multipart/form-data" action="<?php base_url(); ?>Admin/Banner_adv/Update_data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Data</h4>
                    </div>
                    <input type="hidden" id="hid" name="id">
                    <div class="modal-body">
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                             <label>Title*</label>
                             <input id="etitle" type="text" name="title" class="form-control" placeholder="Enter Title Here...">
						</div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-9 col-xs-12">
                        <label>Banner selection*</label>
                        <select class="form-control" name="bid" id="ebid">
                            <?php  foreach ($tbl_banner as $dt): ?>
                            <option value="<?php echo $dt['tbl_banner_id']; ?>"><?php echo $dt['title'] ?></option>
                            <?php endforeach; ?>
                          </select>
                      </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Description*</label>
                        <textarea class="form-control" id="edescription" name="desc" placeholder="Enter the Description"></textarea>
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
<?php $this->load->view('Admin/helper/flink');?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.edit').click(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?php  echo base_url(); ?>Helper/Edit_data',
                data: {'id': id, 'tbl': 'tbl_banner_adv'},
                dataType: 'json',
                success: function (html, textStatus, jqXHR) {
                    $('#hid').val(html.data[0].tbl_banner_adv_id);
                    $('#ebid').val(html.data[0].tbl_banner_id);
                    $('#etitle').val(html.data[0].title);
                    $('#edescription').val(html.data[0].description);
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
                    url: '<?php  echo base_url(); ?>Helper/Delete_data',
                    data: {'id': id, 'tbl': 'tbl_banner_adv'},
                    dataType: 'html',
                    success: function (html, textStatus, jqXHR) {
                        window.location = '<?php echo base_url(); ?>Admin/Banner_adv';
                    }
                });
            } else {
                return false
            }
        });
    });

</script>