<?php $__env->startSection('css'); ?>
        

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">

 <div class="col-md-12">
 
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Edit Service</h4>
        </div>
        <div class="card-content">
	        <form method="post" action="editService" enctype="multipart/form-data">
	        	<?php echo e(csrf_field()); ?>

	            <div class="row">
	           
					<div class="col-md-12">
	                   <div class="form-group <?php echo e($errors->has('Name') ? ' has-error' : ''); ?>">
							<label class="control-label">Name</label>
							<input class="form-control" type="text" name="name" id="name" value="<?php echo e($post->name); ?>" required>
							<input type="hidden" name="id" value="<?php echo e($post->id); ?>"> 
							<span class="material-input"></span>
					  	</div>
	                </div>
	                <div class="col-md-12">
	                	<div class="col-md-6">
	                		 <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
	                		 	<select name="category" id="category" class="selectpicker" onchange="subCategoryOption(this.value)" required>
                                <option selected >Select Category</option>
                                <?php $__currentLoopData = $ary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($rows->id == $post->categoryId): ?>
                                <option value ="<?php echo e($rows->id); ?>" selected><?php echo e($rows->name); ?></option>
                                <?php else: ?>
                                <option value ="<?php echo e($rows->id); ?>"><?php echo e($rows->name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              </div>
	                	</div>
	                	<div class="col-md-6">
	                		 <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
	                		 	<select name="subCategory" id="subCategory" class="form-control" required>
                                <option selected >Select Category</option>
                                <?php $__currentLoopData = $subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($sub->id == $post->subCategoryId): ?>
                                <option value ="<?php echo e($sub->id); ?>" selected><?php echo e($sub->name); ?></option>
                                <?php else: ?>
                                <option value ="<?php echo e($sub->id); ?>"><?php echo e($sub->name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              </div>
	                	</div>
	                </div>
	                <div class="col-md-12">
	                <div class="col-md-6">
						   <div class="form-group<?php echo e($errors->has('Priority') ? ' has-error' : ''); ?>">
								<label class="control-label">Priority</label>
								<input class="form-control" type="text" name="priority" id="Priority" value="<?php echo e($post->priority); ?>" onkeydown='return ((event.which >= 48 && event.which <= 57) || (event.which >= 96 && event.which <= 105)) 
   									|| event.which == 8 || event.which == 46' required> 
								<span class="material-input"></span>
						   </div>
	                   </div>
	                	<div class="col-md-6">
						 	<?php if($post->status == 1): ?>
		                	<div class="checkbox">
								<label>
									<input type="checkbox" name="status" id="status" value="1" checked>
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
						<div class="col-md-12">
							<div class="col-md-3">
	                		<label>Service Image</label>
	                		<input type="file" name="image" id="image" class="" onchange="readURL(this);" value="">
	                		</div>
	                		<div class="col-md-3">
	                		<img id="blah" src="<?php echo e(URL::to('public/thumbtack_image')); ?>/<?php echo e($post->image); ?>" alt="your image" style="width: 100px; height: 100px;"  />
						</div>
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
<script>
       function subCategoryOption(id)
        {
			$.ajax({
        		'url':'subCategoryOption'+id,
                'success':function(data){
                $("#subCategory").html(data);
               },
              });
        }
 	</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src="http://demos.creative-tim.com/material-kit-pro/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
                var reader = new FileReader();
				reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
				reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>