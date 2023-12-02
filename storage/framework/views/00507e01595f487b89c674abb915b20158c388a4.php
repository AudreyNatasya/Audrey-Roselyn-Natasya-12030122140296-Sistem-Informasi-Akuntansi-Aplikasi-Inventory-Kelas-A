

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <h1 class="text-decoration-underline">List of Borrowers</h1>
    <a href="<?php echo e(route('borrower.showAdd')); ?>" class="btn btn-primary mt-3">Add New Borrower</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Borrower Name</th>
                <th scope="col">Status</th>
                <th scope="col">Borrow Date</th>
                <th scope="col">Staff Id</th>
                <th scope="col">Item</th>
                <th scope="col">Department</th>
                <th scope="col">Authorized By</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $borrowers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $borrower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($borrower->id); ?></th>
                <td><?php echo e($borrower->name); ?></td>
                <td>
                    <?php if($borrower->status == 1): ?>
                    <span class="bg-success btn text-white">Active</span>
                    <?php else: ?>

                    <span class="bg-warning btn">Returned</span>
                    <?php endif; ?>
                </td>
                <td><?php echo e($borrower->created_at->format('d-M-Y')); ?></td>
                <td><?php echo e($borrower->staff_id); ?></td>
                <td><?php echo e($borrower->item->name); ?></td>
                <td><?php echo e($borrower->department->name); ?></td>
                <td><?php echo e($borrower->user->name); ?></td>
                <td>
                    <a href="<?php echo e(route('borrower.destroy', ['id' => $borrower->id])); ?>" class="btn btn-danger">Delete</a>
                    <a href="<?php echo e(route('borrower.showEdit', ['id' => $borrower->id])); ?>" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Audrey inventory\Inventory-System\resources\views/pages/borrower/index.blade.php ENDPATH**/ ?>