<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Page</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editPage">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" value="<?php echo e($post->name); ?>"> 
							<input type="hidden" name="id" value="<?php echo e($post->id); ?>">
							<span class="material-input"></span>
					   </div>
	                   </div>
	                   <div class="col-md-6">
					   <div class="form-group">
							<label class="control-label">Meta Title</label>
							<input class="form-control" type="text" name="metaTitle" id="metaTitle" value="<?php echo e($post->metaTitle); ?>"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Meta Description</label>
						   <input class="form-control" type="text" name="metaDescription" id="metaDescription" value="<?php echo e($post->metaDescription); ?>">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group">
						   <label class="control-label">Meta Value</label>
						   <input class="form-control" type="text" name="metaValue" id="metaValue" value="<?php echo e($post->metaValue); ?>">
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