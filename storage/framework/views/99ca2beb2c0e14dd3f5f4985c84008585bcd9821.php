<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="green">
            <h4 class="title">Edit Manager</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editManager">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="col-md-4">
					   <div class="form-group">
						   <label class="control-label">Name</label>
						   <input class="form-control" type="text" name="name" id="name"
						    value="<?php echo e($post->name); ?>">
						    <input type="hidden" name="id" value="<?php echo e($post->id); ?>">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-4">
					   <div class="form-group">
							<label class="control-label">First Name</label>
							<input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo e($post->first_name); ?>"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                   <div class="col-md-4">
					   <div class="form-group">
							<label class="control-label">Last Name</label>
							<input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo e($post->last_name); ?>"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Email</label>
						   <input class="form-control" type="text" name="email" id="email" value="<?php echo e($post->email); ?>">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Mobile No</label>
						   <input class="form-control" type="text" name="mobile" id="mobile" value="<?php echo e($post->mobile); ?>">
						   <span class="material-input"></span></div>
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
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>