<?php echo $__env->make('components.styles.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 class="text-center">Atur ulang kata sandi</h1>
<a href="<?php echo e(env('APP_URL')); ?>/reset-password/<?php echo e($token); ?>" class="btn btn-primary">Atur ulang</a>
<?php echo $__env->make('components.scripts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/contents/mail/forgot.blade.php ENDPATH**/ ?>