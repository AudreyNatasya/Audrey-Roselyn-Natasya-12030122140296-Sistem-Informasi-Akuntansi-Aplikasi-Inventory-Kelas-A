

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('inc.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Dashboard</h1>
            <p class="col-md-8 fs-4">
                Welcome to Inventory Management System
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Audrey inventory\Inventory-System\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>