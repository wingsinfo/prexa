<aside class="leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container">
            <div class="user-profile clearfix">
                <div class="admin-user-info">
                    <ul>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">admin@admin.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li><a href="<?php echo base_url(); ?>Helper/Logout"><i class="zmdi zmdi-power"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-account"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-key"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-settings"></i>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="list-accordion tree-style">
            <li class="list-title">Menus</li>
            <li class="active-page active current">
                <a href="<?php echo base_url();?>Admin/Dashboard" class="active active-page"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">DashBoard</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Configration</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>Admin/Config">Manage Site Configration</a></li>
                    <li><a href="<?php echo base_url();?>Admin/About">Manage About</a></li>
                    <li><a href="<?php echo base_url();?>Admin/Banner">Manage Banner</a></li>
<!--                    <li><a href="<?php echo base_url();?>Admin/Banner_adv">Manage Banner Adv</a></li>-->
                    <li><a href="<?php echo base_url();?>Admin/Blog">Manage Blog</a></li>
                    <li><a href="<?php echo base_url();?>Admin/Contact">Manage Contact</a></li>
                    <li><a href="<?php echo base_url();?>Admin/Social_media">Manage Social Link</a></li>
                </ul>
            </li>
            <li class="list-title">Product</li>
            <li>
                <a href="#"><i class=""></i><span class="list-label">Product</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>Admin/Category">Manage Category</a></li>
                    <li><a href="<?php echo base_url();?>Admin/Product_type">Manage Product Type</a></li>
                    <li><a href="<?php echo base_url();?>Admin/Type">Sub Type</a></li>
                    <li><a href="<?php echo base_url();?>Admin/Product">Add Product</a></li>
                </ul>
            </li>
            <li class="list-title">Customer</li>
            <li>
                <a href="#"><i class="zmdi zmdi-grid"></i><span class="list-label">Customer</span></a>
                <ul>
                    <li><a href="<?php echo base_url();?>Admin/Customer_act">Account Configration</a></li>
                    <!--<li><a href="foo-tables.html">Customer Details</a></li>-->
                    <li><a href="<?php echo base_url();?>Admin/Order">Order Details</a></li>
                </ul>
            </li>
            <li class="list-title">Report</li>
            <li>
                <a href="#"><i class="zmdi zmdi-grid"></i><span class="list-label">All Reports</span></a>
                <ul>

                </ul>
            </li>
        </ul>
    </div>
</aside>