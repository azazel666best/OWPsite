<?php $__env->startSection('title', $post->title); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <div class = "content">
            <h1><?php echo e($post->title); ?></h1>
            <?php if($post->img): ?>
            <div class='img-container'>
                <div class='img'>
                    <img src = "<?php echo e(asset("storage/image/$post->img.png")); ?>">
                </div>
            </div>
            <?php endif; ?>
            <p><?php echo e($post->text); ?></p>
        </div>
        <div class = "comments">
            <div>
                <h1>Comments</h1>
                <hr>
            </div>
            <div class = "comment add-comment">
                <form action="<?php echo e(route('comment', $post->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <textarea name="text"></textarea>
                    <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class = "error-message"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button type="submit">Add</button>
                </form>
            </div>
            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class = "comment">
                    <div class = "coment-text">
                        <h2><?php echo e($comment->user->name); ?></h2>
                        <p><?php echo e($comment->text); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\KPI\SEM_IV\OWP\wamp64\www\project\laravel\resources\views/post.blade.php ENDPATH**/ ?>