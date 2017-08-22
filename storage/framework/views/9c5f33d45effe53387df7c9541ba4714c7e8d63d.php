<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Category</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editSubCategory">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	           
					<div class="col-md-12">
					<div class="col-md-6">
						<div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
	                		 	<select name="proCategory" id="proCategory" class="selectpicker" required>
                                <option selected>Select Pro Category</option>
                                <?php $__currentLoopData = $ary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($post->mainCategoryId == $rows->id): ?>
                                <option value ="<?php echo e($rows->id); ?>" selected><?php echo e($rows->name); ?>

                                <?php else: ?>
                                <option value ="<?php echo e($rows->id); ?>"><?php echo e($rows->name); ?>

                                <?php endif; ?>
                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
					</div>
					<div class="col-md-6">
	                   <div class="form-group">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" value="<?php echo e($post->name); ?>" required> 
							<input type="hidden" name="id" value="<?php echo e($post->id); ?>">
							<span class="material-input"></span>
					   </div>
					   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Priority</label>
						   <input class="form-control" type="text" name="priority" id="priority" value="<?php echo e($post->priority); ?>" onkeydown='return ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required>
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6" style="margin-top: 58px">
	                   		<?php if($post->status == 1): ?>
	                   		<div class="checkbox">
	                   		<label>
							<input type="checkbox" name="status" id="status" value="1" checked >
									Status
							</label>
							</div>
							<?php else: ?>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="status" id="status" value="1">
									Status
							</label>
							</div>
							<?php endif; ?>
					   </div>
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
        <script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>