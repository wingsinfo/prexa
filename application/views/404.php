<?php $this->load->view('Client/helper/headerlink.php'); ?>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header-area start -->
<?php $this->load->view('Client/helper/header.php'); ?>
<!-- Header-area end -->
        <style>
            body {
                background-color: white;
            }

            #aa-error .aa-error-area a {
                border: 1px solid #ccc;
                display: inline-block;
                font-size: 16px;
                font-weight: bold;
                letter-spacing: 0.5px;
                margin-top: 30px;
                padding: 10px 15px;
                text-transform: uppercase;
                transition: all 0.5s ease 0s;
            }
            #aa-error .aa-error-area {
                display: inline;
                float: left;
                margin-top: 50px;
                padding: 100px 100px 130px;
                text-align: center;
                width: 100%;
            }
            #aa-error .aa-error-area {
                border: 5px solid #f3652a;
            }
            #aa-error .aa-error-area h2 {
                display: inline-block;
                font-size: 150px;
                line-height: 150px;
                margin-bottom: 30px;
                text-shadow: 0 2px 2px #ddd;
                color:#f3652a;
            }
            #aa-error .aa-error-area h2 {
                border-bottom: 3px solid #f3652a;
            }
            #aa-error .aa-error-area span {
                color: #000;
                display: block;
                font-size: 30px;
                font-weight: bold;
                margin-bottom: 20px;
                text-shadow: 1px 1px 3px #ddd;
            }
        </style>
    </head>

<section class="contactSec">
    <section id="aa-error">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h2>404</h2>
                        <span>Sorry! Page Not Found</span>
                        <p>The page you are looking for might have been removed, had its name changed, or unavailable.</p>
                        <a href="<?php echo base_url(); ?>"> Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!--footer-area start -->
<?php $this->load->view('Client/helper/footer.php') ?>
<!--footer-area end -->
<!-- quickview product -->
<?php $this->load->view('Client/helper/quickview.php') ?>

<!-- END quickview product -->

<!-- all js here -->
<?php $this->load->view('Client/helper/footerlink.php') ?>
</body>
</html>
