<?php $__env->startSection('css'); ?>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.material.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contents'); ?>
 <div class="content">
 <div class="col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="orange">
            <h4 class="title">Admin</h4>
        </div>
            <?php if(Session::has('message')): ?>
                <div class="col-md-12">
                <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
                </div>
            <?php endif; ?>
            <div style="padding-right: 15px;" class="text-right">
                <a href="<?php echo e(URL::to('newOrganiser')); ?>" class="btn btn-warning">Create New Admin</a>
            </div>

            <div class="card-content table-responsive">
                <table class="mdl-data-table" id="example" border="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Action</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($posts->name); ?></td>
                        <td><?php echo e($posts->email); ?></td>
                        <td><?php echo e($posts->mobile); ?></td>
                        <td class="td-actions text-right"><a href="editOrganiser<?php echo e($posts->id); ?>" class="btn btn-primary btn-simple btn-xs" rel="tooltip" title="Edit Organiser"><i class="material-icons">edit</i>Edit</a></td>

                        <td class="td-actions text-right"><a href="deleteOrganiser<?php echo e($posts->id); ?>" class="btn btn-primary btn-simple btn-xs" rel="tooltip" title="Delete Organiser"><i class="material-icons">close</i>Delete</a></td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>

            </div>
        </div>
    </div>
                
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.material.min.js"></script>
        <script type="text/javascript">
       $(document).ready(function() {
       $('#example').DataTable( {
        columnDefs: [{
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }]
            });
            });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>