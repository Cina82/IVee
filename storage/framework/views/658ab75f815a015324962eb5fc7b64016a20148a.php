<?php $__env->startSection('css'); ?>
        
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 	
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Create New Professional User</h4>
        </div>
        <div class="card-content">
        <?php if(Session::has('message')): ?>
		<p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
     	<?php endif; ?>
        	<form method="post" action="saveProfessionalUser">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	            	<div class="col-md-12">
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<label class="control-label">First Name</label>
							<input class="form-control" type="text" name="firstName" id="firstName"> 
							<span class="material-input"></span>
							<input type="hidden" name="role_id" value="3">
					   </div>
	                   </div>
	                   <div class="col-md-6">
					   <div class="form-group label-floating is-empty <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
							<label class="control-label">Family Name</label>
							<input class="form-control" type="text" name="familyName" id="familyName"> 
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
						   <input class="form-control" type="text" name="mobile" id="mobile" onKeyUp="numericFilter(this);">
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
<script type="text/javascript">
   function numericFilter(txb) {
   txb.value = txb.value.replace(/[^\0-9]/ig, "");
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>