<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Zante Hotel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    
    <?= $this->Html->css('img/favicon-apple.png') ?>
    <?= $this->Html->css('img/favicon.png') ?>
        
    <!-- ========== STYLESHEETS ========== -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('revolution/css/layers.css') ?>
    <?= $this->Html->css('revolution/css/settings.css') ?>
    <?= $this->Html->css('revolution/css/navigation.css') ?>
    
    <?= $this->Html->css('bootstrap-select.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('famfamfam-flags.css') ?>
    <?= $this->Html->css('magnific-popup.css') ?>
    
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    
    <?= $this->Html->css('fonts/font-awesome.min.css') ?>
    <?= $this->Html->css('fonts/flaticon.css') ?>
    
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        <!-- ========== HEADER ========== -->
        <?= $this->element('header2') ?>
        <?= $this->fetch('content') ?>
        <!-- ========== FOOTER ========== -->
        <?= $this->element('footer') ?>
    </div>
    
    <!-- ========== BACK TO TOP ========== -->
    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>
     
    <!-- ========== JAVASCRIPT ========== -->
    <?= $this->Html->script('jquery.min.js'); ?>
    <?php //$this->Html->script('jquery.validate.js'); ?>
    <?php //$this->Html->script('form.validate.js'); ?>
    <?php // $this->Html->script('http://maps.googleapis.com/maps/api/js?key=AIzaSyAMwlCs4nq-MpgGjRDKIWTWzrIJaLb_CEw&libraries=places'); ?>
    
    <?= $this->Html->script('bootstrap.min.js'); ?>
    <?= $this->Html->script('bootstrap-datepicker.min.js'); ?>
    <?= $this->Html->script('bootstrap-select.min.js'); ?>
    <?= $this->Html->script('jquery.smoothState.js'); ?>
    
    <?= $this->Html->script('moment.min.js'); ?>
    <?= $this->Html->script('morphext.min.js'); ?>
    <?= $this->Html->script('wow.min.js'); ?>
    <?= $this->Html->script('jquery.easing.min.js'); ?>
    
    <?= $this->Html->script('owl.carousel.min.js'); ?>
    <?= $this->Html->script('owl.carousel.thumbs.min.js'); ?>
    <?= $this->Html->script('jquery.magnific-popup.min.js'); ?>
    <?= $this->Html->script('jPushMenu.js'); ?>
    
    <?= $this->Html->script('isotope.pkgd.min.js'); ?>
    <?= $this->Html->script('countUp.min.js'); ?>
    <?= $this->Html->script('jquery.countdown.min.js'); ?>
    <?= $this->Html->script('main.js'); ?>
    
    
    <!-- 
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAMwlCs4nq-MpgGjRDKIWTWzrIJaLb_CEw&libraries=places"></script>
    <script type="text/javascript" src="js/form.validate.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.smoothState.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/morphext.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.thumbs.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jPushMenu.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/countUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    -->

    <!-- ========== REVOLUTION SLIDER ========== -->
    <?= $this->Html->script('revolution/js/jquery.themepunch.tools.min.js'); ?>
    <?= $this->Html->script('revolution/js/jquery.themepunch.revolution.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.actions.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.carousel.min.js'); ?>
    
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.kenburn.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.migration.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.navigation.min.js'); ?>
    
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.parallax.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>
    <?= $this->Html->script('revolution/js/extensions/revolution.extension.video.min.js'); ?>
    
    <!--
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> 
    -->

</body>
</html>