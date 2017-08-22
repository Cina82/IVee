<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php if(trim($__env->yieldContent('template_title'))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?> <?php echo e(config('app.name', Lang::get('titles.app'))); ?></title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php echo HTML::style('frontend/css/style.css'); ?>

        <?php echo HTML::style('frontend/css/colors/green.css'); ?>

        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        

        <style type="text/css">
            <?php echo $__env->yieldContent('template_fastload_css'); ?>

            <?php if(Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0)): ?>
                .user-avatar-nav {
                    background: url(<?php echo e(Gravatar::get(Auth::user()->email)); ?>) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            <?php endif; ?>

        </style>

        
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>

        <?php if(Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null'): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e($theme->link); ?>">
        <?php endif; ?>

        <?php echo $__env->yieldContent('head'); ?>

    </head>
    <body>
        <div id="wrapper">
            <?php echo $__env->make('partials.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <?php echo $__env->yieldContent('content'); ?>

        

        
        <?php echo HTML::script('//maps.googleapis.com/maps/api/js?key='.env("GOOGLEMAPS_API_KEY").'&libraries=places&dummy=.js', array('type' => 'text/javascript')); ?>


        <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        <?php echo HTML::script('frontend/scripts/jquery-2.1.3.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/custom.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.superfish.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.themepunch.tools.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.themepunch.revolution.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.themepunch.showbizpro.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.flexslider-min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/chosen.jquery.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.magnific-popup.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/waypoints.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.counterup.min.js'); ?>    
        <?php echo HTML::script('frontend/scripts/jquery.jpanelmenu.js'); ?>    
        <?php echo HTML::script('frontend/scripts/stacktable.js'); ?>    
        <?php echo HTML::script('frontend/scripts/headroom.min.js'); ?>    
    </div>
        <?php echo $__env->yieldContent('footer_scripts'); ?>
    </body>
</html>