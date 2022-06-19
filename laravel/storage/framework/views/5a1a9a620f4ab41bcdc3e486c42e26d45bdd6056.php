<?php $__env->startSection('title', 'Regestrarion'); ?>
<?php $__env->startSection('css', 'app'); ?>
<?php $__env->startSection('content'); ?>
    <div class="auth-form">
        <div class="container">
            <div class="text-container">
                <p><strong>Regestration</strong></p>
            </div>
            <a href="<?php echo e(route('login')); ?>">
                <img src="/img/log-in.png">
                <p>Log in</p>
            </a>
        </div>
        <form action="<?php echo e(route('register_process')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <input type="text" name="name" placeholder="Login">
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

            <input type = 'password' name="password" placeholder="Password">
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class = "error-message"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <input type = 'password' name="password_confirmation" placeholder="Confirm password">
            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class = "error-message"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <button type="submit">Register</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\KPI\SEM_IV\OWP\wamp64\www\project\laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>