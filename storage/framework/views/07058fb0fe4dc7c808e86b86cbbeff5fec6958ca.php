

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <h2 class="mb-4">Sign In</h2>
    <form action="<?php echo e(route('index.login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Audrey inventory\Inventory-System\resources\views/pages/index.blade.php ENDPATH**/ ?>