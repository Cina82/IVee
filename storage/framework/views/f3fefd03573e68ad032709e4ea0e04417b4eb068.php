<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../admin/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../admin/assets/img/favicon.png" />
     -->
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Thumbtack-Panel</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(URL::to('public/admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!--  Mate rial Dashboard CSS    -->
    <link href="<?php echo e(URL::to('public/admin/assets/css/material-dashboard.css')); ?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo e(URL::to('public/admin/assets/css/demo.css')); ?>" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    <?php echo $__env->yieldContent('css'); ?> 

</head>    

<body>
<div class="wrapper">
        <?php echo $__env->make('partials.backsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

         <div class="main-panel">

        <?php echo $__env->make('partials.backheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       
        <?php echo $__env->yieldContent('contents'); ?> 

        <?php echo $__env->make('partials.backfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      

</body>
        <?php echo $__env->yieldContent('javascript'); ?>         
</html>


