<?php $__env->startSection('contents'); ?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Us
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <div class="box-body pad">
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('admin/contact_us')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <textarea id="editor1" name="contactus" rows="10" cols="80"><?php echo e($p->contents); ?></textarea>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-group">  
                      <br>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
          </div>

      </div>
    </section>
</div>
<script>
  CKEDITOR.replace('editor1');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>