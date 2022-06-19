<?php $__env->startSection('title', 'LOGOTIP'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('post', $post->id)); ?>">
                <div class='article-previve-container'>
                    <?php if($post->img): ?>
                        <div class='article-previve'>
                            <img src="<?php echo e(asset("storage/image/$post->img.png")); ?>">
                    <?php else: ?>
                        <div class='article-previve previve-without-image'>
                    <?php endif; ?>
                        <div class="previev-text-container">
                            <h2 class='article-title'><?php echo e($post->title); ?></h2>
                            <p class="article-post-date"><?php echo e($post->created_at); ?></p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\KPI\SEM_IV\OWP\wamp64\www\project\laravel\resources\views/main.blade.php ENDPATH**/ ?>