<?php $__env->startSection('title', 'Authorization'); ?>
<?php $__env->startSection('css', 'auth'); ?>
<?php $__env->startSection('content'); ?>
    <div class = "auth-form">
        <div class = "log-in-container">
            <p><strong>Log in</strong></p>
            <p>
                If you don't have an account, <a href = "<?php echo e(route('register')); ?>">register</a>
            </p>
        </div>
        <form action = "<?php echo e(route('login_process')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="name" placeholder="Login" >
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class = "error-message"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <input type = 'password' name="password" placeholder="Password" >
            <button type="submit">Log in</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\KPI\SEM_IV\OWP\wamp64\www\project\laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>