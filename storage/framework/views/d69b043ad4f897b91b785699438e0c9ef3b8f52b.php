<?php $__env->startSection('css'); ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">
 <div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="blue">
            <h4 class="title">Assing Parking & manager</h4>
        </div>

            <div class="card-content table-responsive">
                <form method="post" action="saveAssignParking">
                <?php echo e(csrf_field()); ?>

                <div class="col-md-12">
                <div class="col-md-6">
                    <select name="parking" class="form-control" id="parking">
                    <option>Select Parking</option>
                    <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($rows->id); ?>"><?php echo e($rows->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-6" id="manager">
                   

                    </select>
                </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Assign Manager<div class="ripple-container"></div>
                </button>
                <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(document).ready(function(){
    $("#parking").on('change', function postinput(){
        var parking_id = $(this).val(); // this.value
        $.ajax({ 
            url: '<?php echo e(URL::to('addManager')); ?>'+parking_id,
            type: 'get',
            success: function (response){
                $('#manager').html(response);
            }
        })
    });
}); 
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>