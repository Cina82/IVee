
    <p>Select multiple manager press ctrl and click</p
    <select name="manager[]" multiple class="form-control" id="manager"> 
    <option selected>select multiple manager</option>
    <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($posts->id); ?>"><?php echo e($posts->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

                