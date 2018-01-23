<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo HTML::style('backend/bootstrap/css/bootstrap.min.css'); ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?php echo HTML::style('backend/dist/css/AdminLTE.min.css'); ?>

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <?php echo HTML::style('backend/dist/css/skins/_all-skins.min.css'); ?>

  <?php echo HTML::style('backend/plugins/iCheck/flat/blue.css'); ?>

  <?php echo HTML::style('backend/plugins/morris/morris.css'); ?>

  <?php echo HTML::style('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>

  <?php echo HTML::style('backend/plugins/datepicker/datepicker3.css'); ?>

  <?php echo HTML::style('backend/plugins/daterangepicker/daterangepicker.css'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
        <?php echo $__env->make('partials.backheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('partials.backsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->yieldContent('contents'); ?> 

        <?php echo $__env->make('partials.backfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php echo HTML::script('backend/plugins/jQuery/jquery-2.2.3.min.js'); ?>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<?php echo HTML::script('backend/bootstrap/js/bootstrap.min.js'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<?php echo HTML::script('backend/plugins/morris/morris.min.js'); ?>

<?php echo HTML::script('backend/plugins/sparkline/jquery.sparkline.min.js'); ?>

<?php echo HTML::script('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>

<?php echo HTML::script('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>

<?php echo HTML::script('backend/plugins/knob/jquery.knob.js'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<?php echo HTML::script('backend/plugins/daterangepicker/daterangepicker.js'); ?>

<?php echo HTML::script('backend/plugins/datepicker/bootstrap-datepicker.js'); ?>

<?php echo HTML::script('backend/plugins/slimScroll/jquery.slimscroll.min.js'); ?>

<?php echo HTML::script('backend/plugins/fastclick/fastclick.js'); ?>

<?php echo HTML::script('backend/dist/js/app.min.js'); ?>

<?php echo HTML::script('backend/dist/js/pages/dashboard.js'); ?>

<?php echo HTML::script('backend/dist/js/demo.js'); ?>


<?php echo HTML::script('backend/dist/jquery.dataTables.min.js'); ?>

<?php echo HTML::script('backend/dist/dataTables.bootstrap.min.js'); ?>

<?php echo HTML::script('backend/dist/dataTables.responsive.min.js'); ?>

<?php echo HTML::script('backend/dist/responsive.bootstrap.min.js'); ?>

  <style>
.dataTables_paginate.paging_simple_numbers
{
  text-align: right;
}
.pagination
{
  margin: 0px;
}
.dataTables_filter
{
  text-align: right;
}
</style>
</body>
</html>


