<?php $__env->startSection('contents'); ?>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Faqs
      </h1>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <div class="box-body pad">
                  <div class="col-md-12 text-right">
                    <a class="btn btn-primary" href="<?php echo e(URL::to('admin/faqs/post')); ?>">Add</a>
                    <hr>
                  </div>
                  <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Title</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($f->title); ?></td>
                          <td>
                            <a href="<?php echo e(URL::to('admin/faqs/put')); ?>/<?php echo e($f->id); ?>">
                              <i class="fa fa-pencil-square" aria-hidden="true" style="font-size: 18px; color: green;"></i>
                            </a>
                            <a href="<?php echo e(URL::to('admin/faqs/delete')); ?>/<?php echo e($f->id); ?>">
                              <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px; color: red;"></i>
                            </a>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>    
                  </div>
              </div>
          </div>
      </div>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>