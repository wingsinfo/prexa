<!-- all js here -->
<!-- jquery latest version -->
<script src="<?php echo base_url(); ?>cassets/js/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url(); ?>cassets/js/bootstrap.min.js"></script>
<!-- nivo slider js -->
<script src="<?php echo base_url(); ?>cassets/js/jquery.nivo.slider.pack.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo base_url(); ?>cassets/js/owl.carousel.min.js"></script>
<!-- owl.carousel js -->
<script src="<?php echo base_url(); ?>cassets/js/jquery-ui.min.js"></script>
<!-- meanmenu js -->
<script src="<?php echo base_url(); ?>cassets/js/jquery.meanmenu.js"></script>
<!-- Simple Lence JS -->
<script src="<?php echo base_url(); ?>cassets/js/jquery.simpleGallery.min.js"></script>
<script src="<?php echo base_url(); ?>cassets/js/jquery.simpleLens.min.js"></script>
<!-- wow js -->
<script src="<?php echo base_url(); ?>cassets/js/wow.min.js"></script>
<!-- plugins js -->
<script src="<?php echo base_url(); ?>cassets/js/plugins.js"></script>
<!-- main js -->
<script src="<?php echo base_url(); ?>cassets/js/main.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-82376897-2', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript">
    (function ($) {
        $.fn.mdl = function (options, callback) {
            /*
             | ---------------------------
             | value returned for confirm and prompt
             | ---------------------------
             */
            var retour = false;
            /*
             | ---------------------------
             | Calcul number of items for ids & z-index
             | ---------------------------
             */
            if ($(".mdl").length) {
                var n = $(".mdl").length + 1;
            } else {
                var n = 0;
            }
            /*
             | ---------------------------
             | default params
             | ---------------------------
             */
            var defauts =
            {
                'type': "modal", //dialog,confirm,prompt,modal
                'fullscreen': "true", //Largeur de la galerie
                'overlayClick': "false",
                'content': ''
            };


            /*
             | ---------------------------
             | //On fusionne nos deux objets ! =D
             | ---------------------------
             */

            var parametres = $.extend(defauts, options);


            /*
             | ---------------------------
             | add overlay if is not
             | ---------------------------
             */
            var overlay = $('<div id="mdl-overlay"></div>');
            if (!$("#mdl-overlay").length) {
                $(overlay).appendTo('body');
            }


            /*
             | ---------------------------
             | global returned objects
             | ---------------------------
             */
            return this.each(function () {

                //On stocke notre �l�ment dans une variable par commodit�
                var element = $(this);

                /*
                 | ---------------------------
                 | //default params
                 | ---------------------------
                 */
                var fullscreen = parametres.fullscreen;
                var type = parametres.type;
                var overlayClick = parametres.overlayClick;

                /*
                 | ---------------------------
                 | or by data
                 | ---------------------------
                 */
                if (
                    element.attr('data-type')
                ) {
                    type = element.data("type");
                }

                if (
                    element.attr('data-fullscreen')
                ) {
                    fullscreen = element.data("fullscreen");

                }

                if (
                    element.attr('data-overlayClick')
                ) {
                    overlayClick = element.data("overlayClick");
                }


                /*
                 | ---------------------------
                 | if modal use the modal exist else create one
                 | ---------------------------
                 */
                if (type == "modal") {

                    var cible = element.data("target");

                } else {

                    /*
                     | ---------------------------
                     | gestion z-index
                     | ---------------------------
                     */
                    var zindex = 100000 + n;

                    /*
                     | ---------------------------
                     | addmodal
                     | ---------------------------
                     */
                    var mymodal = $('<div class="mdl" id="mdl__' + n + '" style="z-index:' + zindex + ';"><div class="mdl-container"><div class="mdl-content"></div></div></div>');

                    $(mymodal).appendTo('body');

                    /*
                     | ---------------------------
                     | ok we have our id!
                     | ---------------------------
                     */
                    var cible = '#mdl__' + n;
                }


                /*
                 | ---------------------------
                 | confirm & prompt add buttons and result
                 | ---------------------------
                 */
                if (type == "confirm" || type == "prompt") {

                    /*
                     | ---------------------------
                     | add content
                     | ---------------------------
                     */
                    $(cible + " .mdl-content").html(parametres.content);

                    if (type == "prompt") {
                        $(cible + " .mdl-content").append("<input type='text' value='' id='response_mdl_" + n + "' >");
                    }

                    /*
                     | ---------------------------
                     | add buttons
                     | ---------------------------
                     */
                    if (type == "confirm") {
                        var btns = $('<ul class="mdl-buttons"><li><a href="#0" data-response="false">No</a></li><li><a href="#0" data-response="true">Yes</a></li></ul>');
                        $(btns).appendTo(cible + " .mdl-container");
                    }

                    if (type == "prompt") {

                        var btns = $('<ul class="mdl-buttons"><li><a href="#0" data-response="false" data-id="' + n + '">Annuler</a></li><li><a href="#0" data-response="true" data-id="' + n + '">Valider</a></li></ul>');
                        $(btns).appendTo(cible + " .mdl-container");
                    }


                    /*
                     | ---------------------------
                     | medium format
                     | ---------------------------
                     */
                    $(cible + " .mdl-container").addClass("medium");

                    /*
                     | ---------------------------
                     | on click event return response
                     | ---------------------------
                     */
                    $("body").on("click", cible + " .mdl-buttons a", function (event) {
                        event.preventDefault();
                        var response = false;

                        /*
                         | ---------------------------
                         | return true or false for confirm
                         | ---------------------------
                         */

                        response = $(this).data("response");


                        /*
                         | ---------------------------
                         | return value of input for prompt
                         | ---------------------------
                         */
                        if (type == "prompt") {
                            var id = $(this).data("id");
                            response = $("#response_mdl_" + id).val();
                        }

                        close(cible);


                        /*
                         | ---------------------------
                         | return response
                         | ---------------------------
                         */

                        if (response) {
                            callback.call(this, response);
                        }
                        // call the callback and apply the scope:


                    });

                }


                /*
                 | ---------------------------
                 | if fullscreen addclass fullscreen
                 | ---------------------------
                 */
                if (fullscreen) {
                    $(cible).addClass("mdl-fullscreen");
                }


                /*
                 | ---------------------------
                 | add close button
                 | ---------------------------
                 */
                $(cible).append('<div class="mdl-close" data-target="' + cible + '"></div>');

                /*
                 |
                 | on click event add open class css
                 | 
                 */
                element.click(function () {
                    open(cible);

                });


                /*
                 |
                 | on click event to close button add close class css
                 | 
                 */
                $("body").on("click", cible + " .mdl-close", function () {
                    close(cible);
                });


                /*
                 |
                 | close to but by overlay click
                 | 
                 */
                if (overlayClick) {
                    $("body").on("click", "#mdl-overlay", function () {

                        close(cible);

                    });
                }


            });

            function open(cible) {
                $(cible).addClass("open");
                $("#mdl-overlay").addClass("active");
                setTimeout(function () {
                    $(cible).addClass("animIn");
                    $("#mdl-overlay").addClass("animIn");
                }, 100);
            }

            /*
             |
             | close function
             | 
             */
            function close(cible) {


                if ($(cible).hasClass("open")) {

                    $(cible).removeClass("animIn");
                    $(cible).addClass("animOut");
                    if (size() == 1) {
                        $("#mdl-overlay").addClass("animOut");
                        $("#mdl-overlay").removeClass("animIn");
                    }

                    setTimeout(function () {

                        $(cible).removeClass("open");
                        $(cible).removeClass("animOut");
                        if (size() == 0) {
                            $("#mdl-overlay").removeClass("animIn");
                            $("#mdl-overlay").removeClass("active").removeClass("animOut");
                        }

                    }, 800);
                }


            }


            /*
             |
             | global size of modals
             | 
             */
            function size() {
                return $(".mdl.open").length;

            }


        };


    })(jQuery);


    /*
     |
     | waaaw it's very ugly that !!!!  ... I dont care...it work!
     | 
     */
    function mdl_open(cible) {
        $(cible).addClass("open");
        $("#mdl-overlay").addClass("active");
        setTimeout(function () {
            $(cible).addClass("animIn");
            $("#mdl-overlay").addClass("animIn");
        }, 100);
    }


    function mdl_close(cible) {

        if ($(cible).hasClass("open")) {

            $(cible).removeClass("animIn");
            $(cible).addClass("animOut");
            if ($(".mdl.open").length == 0) {
                $("#mdl-overlay").addClass("animOut");
            }

            setTimeout(function () {

                $(cible).removeClass("open");
                $(cible).removeClass("animOut");
                if ($(".mdl.open").length == 0) {
                    $("#mdl-overlay").removeClass("animIn");
                    $("#mdl-overlay").removeClass("active").removeClass("animOut");
                }

            }, 800);
        }

    }


</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#alrt').hide();
        $('#lgin').click(function () {
            $('#forget-popup').modal('hide');
            $('#login-popup').modal('show');
        });
        $('#fgt').click(function () {
            $('#login-popup').modal('hide');
            $('#forget-popup').modal('show');
        });
    });
    function quickview(id) {
        $.ajax({
            type: 'POST',
            data: {
                'pro': id,
            },
            url: '<?php echo base_url(); ?>Ecom/getpro',
            dataType: 'json',
            success: function (data) {
//                console.log(data);
                var a = document.getElementById('seall');
                $('#nm').html(data.prodata[0].product_name);
                $('#i').html("<img src='<?php echo base_url(); ?>Assets/images/web_img/Product/" + data.prodata[0].image + "' style='height:460px;'>");
                $('#np').html(data.prodata[0].mrp);
                $('#op').html(data.prodata[0].temp_rate);
                $('#d').html(data.prodata[0].sort_description);
                var id = data.prodata[0].tbl_product_id;
                a.href = "<?php echo base_url(); ?>Category/" + data.prodata[0].name + "/" + btoa(id);
                $('#productModal').modal('show');
            }
        });
    }
    function login() {
        <?php $_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
        var email = document.getElementById('lemail').value;
        var emailformet = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var pass = document.getElementById('lpass').value;
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
                        window.location.href = "<?php echo $_SESSION['url'] ?>";
                    } else if (data.success == 2) {
                        alert('Sorry Your Account Is not Active \n Please check Your Email To active Your Account');
                    } else {
                        alert('Invalid Username & password');
                    }
                }
            });
        }
    }
    function addwish(ps) {
        <?php if (isset($_SESSION['id'])) { ?>
        $.ajax({
            type: 'POST',
            data: {
                'pro': ps,
            },
            url: '<?php echo base_url(); ?>Wishlist/Add_data',
            dataType: 'json',
            success: function (data) {
                //                console.log(data);
                if (data.success == 1) {
                    alert('Added in wish list successfully');
                } else if (data.success == 2) {
                    alert('Product Already Added In wish List');
                } else {
                    alert('Something went Wrong Please try again later');
                }
            }
        });
        <?php } else { ?>
        $('#login-popup').modal('show');
        <?php } ?>
    }

    function addbag(ps) {
        <?php if (isset($_SESSION['id'])) { ?>
        $.ajax({
            type: 'POST',
            data: {
                'pro': ps,
            },
            url: '<?php echo base_url(); ?>Cart/Add_data',
            dataType: 'json',
            success: function (data) {
                //                console.log(data);
                if (data.success == 1) {
                    alert('Added in Bag successfully');
                    $('#crtcnt').html(data.cnt);
                } else {
                    alert('Something went Wrong Please try again later');
                }
            }
        });
        <?php } else { ?>
        $.ajax({
            type: 'POST',
            data: {
                'pro': ps,
            },
            url: '<?php echo base_url(); ?>Cart/add_ip_through_cart',
            dataType: 'json',
            success: function (data) {
//                                console.log(data);
//                return false;
                if (data.success == 1) {
                    alert('Added in Bag successfully');
                    $('#crtcnt').html(data.cnt);
                } else {
                    alert('Something went Wrong Please try again later');
                }
            }
        });
//        $('#login-popup').modal('show');
//        $('#productModal').modal('hide');
        <?php } ?>
    }

    function addbag1(ps) {
        <?php if (isset($_SESSION['id'])) { ?>
        $.ajax({
            type: 'POST',
            data: {
                'pro': ps,
            },
            url: '<?php echo base_url(); ?>Cart/Add_data',
            dataType: 'json',
            success: function (data) {
                //                console.log(data);
                if (data.success == 1) {
                    alert('Added in Bag successfully');
                } else {
                    alert('Something went Wrong Please try again later');
                }
            }
        });
        <?php } else { ?>
//        $.ajax({
//            type: 'POST',
//            data: {
//                'pro': ps,
//            },
//            url: '<?php //echo base_url(); ?>//Cart/add_ip_through_cart',
//            dataType: 'json',
//            success: function (data) {
//                console.log(data);
//                return false;
//                if (data.success == 1) {
//                    alert('Added in Bag successfully');
//                } else {
//                    alert('Something went Wrong Please try again later');
//                }
//            }
//        });
        $('#login-popup').modal('show');
        $('#productModal').modal('hide');
        <?php } ?>
    }

    var hide = function () {
        $('#alrt').hide();
        //setTimeout(hide, 5000);
    }


</script>