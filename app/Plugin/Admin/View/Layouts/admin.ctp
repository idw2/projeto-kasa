<html lang="en"><head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->
        <?php echo $this->Html->css('Admin./startbootstrap-sb-admin-1.0.3/css/bootstrap.min'); ?>

        <!-- Custom CSS -->
        <?php echo $this->Html->css('Admin./startbootstrap-sb-admin-1.0.3/css/sb-admin'); ?>

        <!-- CSS -->
        <?php echo $this->Html->css('/app/webroot/css/uploadfile.css'); ?>


        <!-- Custom Fonts -->
        <?php echo $this->Html->css('Admin./startbootstrap-sb-admin-1.0.3/font-awesome/css/font-awesome.min'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php echo $this->element('Admin.navbar'); ?>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php echo $this->element('Admin.head'); ?>

                    <!-- /.row -->

                    <?php echo $this->element('Admin.flash'); ?>
                    <!-- /.row -->


                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <?php echo $this->Html->script('jQuery-2.1.3.min'); ?>

        <!-- Bootstrap Core JavaScript -->
        <?php echo $this->Html->script('Admin./startbootstrap-sb-admin-1.0.3/js/bootstrap.min'); ?>

        <?php echo $this->Html->script('ckeditor_standard/ckeditor'); ?>
        <?php echo $this->Html->script('jquery.uploadfile'); ?>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->base; ?>/js/jquery-latitude-longitude-picker-gmaps-master/css/jquery-gmaps-latlon-picker.css"/>
        <script src="<?php echo $this->base; ?>/js/jquery-latitude-longitude-picker-gmaps-master/js/jquery-gmaps-latlon-picker.js"></script>

        <?php echo $this->Html->script('default'); ?>


        <script>
            jQuery(document).ready(function ($) {

                if ($(".update-laguage").hasClass("update-laguage")) {
                    $(".update-laguage").each(function (i) {
                        $(this).click(function () {
                            updateLanguage($(this).attr("data-base"), $(this).attr("data-language"));
                        });
                    });
                }

            });

            function updateLanguage(base, language) {

                jQuery.ajax({
                    type: 'post',
                    data: "language=" + language,
                    url: base + '/website/webpages/updateLanguage/' + language,
                    success: function (data) {
                        window.location.reload();
                    }
                });
            }
        </script>

        <!-- Morris Charts JavaScript -->    
        <?php #echo $this->Html->script('Admin./startbootstrap-sb-admin-1.0.3/js/plugins/morris/raphael.min'); ?>
        <?php #echo $this->Html->script('Admin./startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris.min'); ?>
        <?php #echo $this->Html->script('Admin./startbootstrap-sb-admin-1.0.3/js/plugins/morris/morris-data'); ?>




    </body></html>