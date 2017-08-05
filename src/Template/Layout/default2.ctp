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
    
    
    
    
    <?= $this->Html->meta(
    'favicon.png',
    'favicon.png',
    ['type' => 'icon']
    ); ?>
        
    <!-- ========== STYLESHEETS ========== -->
    <?= $this->Html->css('bootstrap.min.css') ?>    
    <?= $this->Html->css('bootstrap-select.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('responsive.css') ?>    
    <?= $this->Html->css('/fonts/font-awesome.min.css') ?>
    <?= $this->Html->css('/fonts/flaticon.css') ?>
    
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">
</head>

<body>
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
    <?= $this->Html->script('jquery.validate.js'); ?>
    <?= $this->Html->script('form.validate.js'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
    <?= $this->Html->script('bootstrap-select.min.js'); ?>
    <?= $this->Html->script('jquery.smoothState.js'); ?>
    <?= $this->Html->script('morphext.min.js'); ?>
    <?= $this->Html->script('wow.min.js'); ?>
    <?= $this->Html->script('jPushMenu.js'); ?>
    <?= $this->Html->script('main.js'); ?>
    

</body>
</html>