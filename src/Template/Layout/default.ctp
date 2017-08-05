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
    <link rel="apple-touch-icon-precomposed" href="img/favicon-apple.png" />
    <link rel="icon" href="img/favicon.png">

    <!-- ========== STYLESHEETS ========== --> 
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('/revolution/css/layers.css') ?>
    <?= $this->Html->css('/revolution/css/settings.css') ?>
    <?= $this->Html->css('/revolution/css/navigation.css') ?>
    
    <?= $this->Html->css('bootstrap-select.min.css') ?>
    <?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('famfamfam-flags.css') ?>
    <?= $this->Html->css('magnific-popup.css') ?>
    
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    
    <?= $this->Html->css('/fonts/font-awesome.min.css') ?>
    <?= $this->Html->css('/fonts/flaticon.css') ?>
    <!-- ========== ICON FONTS ========== -->
    
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
        <?= $this->element('header') ?>
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
    <?= $this->Html->script('jquery.validate.js'); ?>
    <?= $this->Html->script('form.validate.js'); ?>
    <?= $this->Html->script('http://maps.googleapis.com/maps/api/js?key=AIzaSyAMwlCs4nq-MpgGjRDKIWTWzrIJaLb_CEw&libraries=places'); ?>
    
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

    <!-- ========== REVOLUTION SLIDER ========== -->
    <?= $this->Html->script('/revolution/js/jquery.themepunch.tools.min.js'); ?>
    <?= $this->Html->script('/revolution/js/jquery.themepunch.revolution.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.actions.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.carousel.min.js'); ?>
    
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.kenburn.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.migration.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.navigation.min.js'); ?>
    
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.parallax.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>
    <?= $this->Html->script('/revolution/js/extensions/revolution.extension.video.min.js'); ?>

</body>
</html>