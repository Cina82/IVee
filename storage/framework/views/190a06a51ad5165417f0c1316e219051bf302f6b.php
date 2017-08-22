<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 	
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Organiser</h4>
        </div>
        <div class="card-content">
        <?php if(Session::has('message')): ?>
		<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
     	<?php endif; ?>
        	<form method="post" action="saveOrganiser">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="col-md-4">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Name</label>
						   <input class="form-control" type="text" name="name" id="name">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-4">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<label class="control-label">First Name</label>
							<input class="form-control" type="text" name="first_name" id="first_name"> 
							<span class="material-input"></span>
							<input type="hidden" name="role_id" value="2">
					   </div>
	                   </div>
	                   <div class="col-md-4">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<label class="control-label">Last Name</label>
							<input class="form-control" type="text" name="last_name" id="last_name"> 
							<span class="material-input"></span>
					   </div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Email</label>
						   <input class="form-control" type="email" name="email" id="email">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6">
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Mobile No</label>
						   <input class="form-control" type="text" name="mobile" id="mobile">
						   <span class="material-input"></span></div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Password</label>
						   <input class="form-control" type="password" name="password" id="password">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6"> 
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Conform Password</label>
						   <input class="form-control" type="password" name="conform_password" id="conform_password">
						   <span class="material-input"></span></div>
	                   </div>
	                </div>
	                <div class="col-md-12">
	                <div class="col-md-6"> 
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Number of Manager Create</label>
						   <input class="form-control" type="text" name="noManagerCreate" id="noManagerCreate">
						   <span class="material-input"></span></div>
	                   </div>
	                   <div class="col-md-6"> 
					    <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
						   <label class="control-label">Number of Parking Create</label>
						   <input class="form-control" type="text" name="noParkingCreate" id="noParkingCreate">
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