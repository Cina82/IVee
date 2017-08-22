<?php $__env->startSection('contents'); ?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Faq Add
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <div class="box-body pad">
                <form method="POST" enctype="multipart/form-data" action="<?php echo e(URL::to('admin/faqs/post')); ?>">
                    
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                      <div class="col-md-12 form-group">  
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                      </div>

                      <div class="col-md-12 form-group">  
                        <label>Description</label>
                        <textarea name="description" class="form-control" id="editor1" required></textarea>
                      </div>  

                      <div class="form-group col-md-12">  
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    
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