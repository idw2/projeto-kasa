<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from getbootstrap.com/examples/signin/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2015 14:03:48 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo $this->Html->url('/admin/img/logo_kasa_color.png'); ?>">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <?php echo $this->Html->css('Admin./login/getbootstrap.com/dist/css/bootstrap.min'); ?>

        <!-- Custom styles for this template -->
        <?php echo $this->Html->css('Admin./login/getbootstrap.com/examples/signin/signin'); ?>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <?php echo $this->Html->script('Admin./login/getbootstrap.com/assets/js/ie-emulation-modes-warning'); ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">

            <?php echo $this->element('Admin.flash'); ?>
            
            <?php echo $this->fetch('content'); ?>

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php echo $this->Html->script('Admin./login/getbootstrap.com/assets/js/ie10-viewport-bug-workaround'); ?>
    </body>

    <!-- Mirrored from getbootstrap.com/examples/signin/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2015 14:03:50 GMT -->
</html>
