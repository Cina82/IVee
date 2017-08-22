<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Edit Parking</h4>
        </div>
        <div class="card-content">
            <form method="post" action="editParking">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-md-12">
                       <div class="col-md-6">
                       <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                           <label class="control-label">Name</label>
                           <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
                           <input class="form-control" type="text" name="name" id="name" value="<?php echo e($post->name); ?>">
                           <span class="material-input"></span></div>
                       </div>
                       <div class="col-md-6">
                       <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="control-label">City</label>
                            <input class="form-control" type="text" name="city" id="city" value="<?php echo e($post->city); ?>"> 
                            <span class="material-input"></span>
                       </div>
                       </div>
                      </div>
                      <div class="col-md-12">
                           <div class="col-md-6">
                            <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="control-label">Location</label>
                            <input class="form-control" type="text" name="location" id="location" value="<?php echo e($post->location); ?>"> 
                            <span class="material-input"></span>
                       </div>
                       </div>
                       <div class="col-md-6">
                              <div class="form-group ">
                                <select name="parkingType" id="parkingType" class="form-control" required>
                                <option selected>Select Parking Type</option>
                                <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($rows->id == $post->parking_type): ?>
                                  <option value ="<?php echo e($rows->id); ?>" selected ><?php echo e($rows->parkingType); ?></option>
                                  <?php else: ?>
                                  <option value ="<?php echo e($rows->id); ?>"><?php echo e($rows->parkingType); ?></option>
                                  <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              </div>
                      </div>
                      </div>
                       <div class="col-md-12">
                       
                        <!-- <div class="col-md-6">
                        <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                           <label class="control-label">Parking Type</label>
                           <input class="form-control" type="text" name="parking_type" id="parking_type">
                           <span class="material-input"></span></div>
                       </div>
                       </div>
                         -->                 
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Edit<div class="ripple-container"></div>
                        </button>
                        <div class="clearfix"></div>
                
            </form>
        </div>
                            
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>