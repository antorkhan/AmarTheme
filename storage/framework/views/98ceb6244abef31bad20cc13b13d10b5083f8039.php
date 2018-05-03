<?php $__env->startSection('content'); ?>
    <?php if(isset(Auth::user()->email)): ?>
        <div class="alert alert-danger success-block">
            <strong>Welcome <?php echo e(Auth::user()->email); ?></strong>
            <br />
            <a href="<?php echo e(url('/main/logout')); ?>">Logout</a>
        </div>
    <?php else: ?>
        <?php echo e("GO HOME"); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>