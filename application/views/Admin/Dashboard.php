<?php $this->load->view('Admin/helper/hlink'); ?>
<!--Topbar Start Here-->
<?php $this->load->view('Admin/helper/top'); ?>
<!--Topbar End Here-->

<!--Leftbar Start Here-->
<?php $this->load->view('Admin/helper/sidebar.php') ?>
<!--Leftbar End Here-->
<!--Page Container Start Here-->
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            <h2>Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="stats-widget stats-widget">
                    <div class="widget-header">
                        <h3>Today's Stats</h3>
                        <p>Total earnings and items sales today</p>
                    </div>
                    <div class="widget-stats-list">
                        <ul>
                            <li><label>Earning:</label> $400 USD</li>
                            <li><label>Items Sold:</label> 20 Items </li>
                            <li><label>Last Hour Sales:</label> $34 USD </li>
                        </ul>
                    </div>
                    <div class="w_bg_teal stats-chart-container">
                        <div id="widget-stats-chart" class="stats-chart">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="widget-wrap stats-widget">
                    <div class="widget-header">
                        <h3>Monthly Stats</h3>
                        <p>Monthly earnings and items sales</p>
                    </div>
                    <div class="widget-stats-list">
                        <ul>
                            <li><label>Earning:</label> $5,000 USD</li>
                            <li><label>Items Sold:</label> 400 Items </li>
                            <li><label>Last Month Earning:</label> $2,434 USD </li>
                        </ul>
                    </div>
                    <div class="w_bg_deep_purple stats-chart-container">
                        <div id="widget-monthly-chart" class="stats-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="widget-wrap stats-widget">
                    <div class="widget-header">
                        <h3>Alltime Stats</h3>
                        <p>All earnings and items sales</p>
                    </div>
                    <div class="widget-stats-list">
                        <ul>
                            <li><label>Earning:</label> $98,300 USD</li>
                            <li><label>Items Sold:</label> 8,296 Items </li>
                            <li><label>Last Year Earning:</label> $78,034 USD </li>
                        </ul>
                    </div>
                    <div class="w_bg_cyan stats-chart-container">
                        <div id="widget-alltime-chart" class="stats-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--Footer Start Here -->
    <footer class="footer-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-left">
                        <span>© 2015</span>
<!--                        <span>© 2015 <a href="http://themeforest.net/user/westilian">westilian</a></span>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End Here -->
</section>
<!--Page Container End Here-->
<!--Rightbar Start Here-->

<!--Rightbar End Here-->
<script src="js/jquery.js"></script>
<?php $this->load->view('Admin/helper/flink'); ?>