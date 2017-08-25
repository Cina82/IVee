<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 	
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Page</h4>
        </div>
        <div class="card-content">
        <?php if(Session::has('message')): ?>
		<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
     	<?php endif; ?>
        	<form method="post" action="savePage">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('Name') ? ' has-error' : ''); ?>">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" required="required"> 
							<span class="material-input"></span>
					  	</div>
	                  	</div>
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('metaTitle') ? ' has-error' : ''); ?>">
							<label class="control-label">Meta Title</label>
							<input class="form-control" type="text" name="metaTitle" id="metaTitle" required="required"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('metaDescription') ? ' has-error' : ''); ?>">
						   <label class="control-label">Meta Description</label>
						   <input class="form-control" type="text" name="metaDescription" id="metaDescription" required="required">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('metaValue') ? ' has-error' : ''); ?>">
						   <label class="control-label">Meta Value</label>
						   <input class="form-control" type="text" name="metaValue" id="metaValue" required="required">
						   <span class="material-input"></span></div>
	                   </div>
	                </div>
	                
	                <button type="submit" class="btn btn-primary pull-right">Save<div class="ripple-container"></div>
					</button>
					    
	        	
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