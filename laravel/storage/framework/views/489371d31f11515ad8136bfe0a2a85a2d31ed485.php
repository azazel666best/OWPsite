<header>
    <div class="logo"><a href="<?php echo e(route('main')); ?>"><strong>LOGOTIP</strong></a></div>
    <div class="search-field">
        <form action="/" method="GET" class="search-form">
            <input type="text" name="s" placeholder="">
            <button type="submit"><img src="<?php echo e(asset('img/search.png')); ?>"></button>
        </form>
    </div>

    <div class="log-in">
        <?php if(auth()->guard('web')->check()): ?>
            <a href="<?php echo e(route('logout')); ?>"><img src="<?php echo e(asset('img/log-out.png')); ?>"></a>
        <?php endif; ?>
        <?php if(auth()->guard('web')->guest()): ?>
            <a href="<?php echo e(route('login')); ?>"><img src="<?php echo e(asset('img/log-in.png')); ?>"></a>
        <?php endif; ?>
    </div>
</header>

<?php /**PATH E:\KPI\SEM_IV\OWP\wamp64\www\project\laravel\resources\views//partials/header.blade.php ENDPATH**/ ?>