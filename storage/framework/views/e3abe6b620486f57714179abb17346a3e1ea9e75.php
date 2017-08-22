<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 	
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Create New Parking Type</h4>
        </div>
        <div class="card-content">
        <?php if(Session::has('message')): ?>
		<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
     	<?php endif; ?>
        	<form method="post" action="saveParkingType">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="col-md-8">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Parking Type</label>
						   <input class="form-control" type="text" name="parkingType" id="parkingType">
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