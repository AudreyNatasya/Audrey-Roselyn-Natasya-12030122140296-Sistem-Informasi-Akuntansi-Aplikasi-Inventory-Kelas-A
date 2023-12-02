

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <h1 class="text-decoration-underline">List of Departments</h1>
    <a href="<?php echo e(route('department.showAdd')); ?>" class="btn btn-primary mt-3">Add new department</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Department Name</th>
                <th scope="col">Location</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($department->id); ?></th>
                <td><?php echo e($department->name); ?></td>
                <td>Level <?php echo e($department->location); ?></td>
                <td>
                    <a href="<?php echo e(route('department.destroy', ['id' => $department->id])); ?>"
                        class="btn btn-danger">Delete</a>
                    <a href="<?php echo e(route('department.showEdit', ['id' => $department->id])); ?>"
                        class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Audrey inventory\Inventory-System\resources\views/pages/department/index.blade.php ENDPATH**/ ?>