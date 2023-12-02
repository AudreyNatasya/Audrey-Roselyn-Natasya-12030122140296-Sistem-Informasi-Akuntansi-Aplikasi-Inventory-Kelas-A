

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <h1 class="text-decoration-underline">List of Suppliers</h1>
    <a href="<?php echo e(route('supplier.showAdd')); ?>" class="btn btn-primary mt-3">Add new supplier</a>
    <table class="table mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Person in charge</th>
                <th scope="col">Contact</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($supplier->id); ?></th>
                <td><?php echo e($supplier->name); ?></td>
                <td><?php echo e($supplier->incharge_name); ?></td>
                <td><?php echo e($supplier->contact_number); ?></td>
                <td>
                    <a href="<?php echo e(route('supplier.destroy', ['id'=>$supplier->id])); ?>" class="btn btn-danger">Delete</a>
                    <a href="<?php echo e(route('supplier.showEdit', ['id'=>$supplier->id])); ?>" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Audrey inventory\Inventory-System\resources\views/pages/supplier/index.blade.php ENDPATH**/ ?>