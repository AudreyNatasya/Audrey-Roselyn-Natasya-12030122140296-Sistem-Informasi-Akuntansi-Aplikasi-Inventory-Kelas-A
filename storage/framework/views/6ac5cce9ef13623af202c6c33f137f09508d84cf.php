

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <h1 class="text-decoration-underline">Edit Department</h1>
    <a href="<?php echo e(route('department')); ?>" class="btn btn-secondary mt-3">Back</a>

    <div class="border border-dark mt-3 p-3">
        <form action="<?php echo e(route('department.update', ['id'=>request()->route('id')])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Department Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo e($department->name); ?>" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <select class="form-select" name="location" required>
                    <?php for($i = 1; $i < 7; $i++): ?> <option value="<?php echo e($i); ?>" <?php echo e($i==$department->location ? 'selected' : ''); ?>>Level <?php echo e($i); ?>

                        </option>
                        <?php endfor; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Audrey inventory\Inventory-System\resources\views/pages/department/edit.blade.php ENDPATH**/ ?>