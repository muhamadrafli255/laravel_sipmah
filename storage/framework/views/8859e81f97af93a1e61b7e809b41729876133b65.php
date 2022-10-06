<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>SIPMah - <?php echo e($title); ?></title>
    
    <?php echo $__env->make('components.styles.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="bg-gradient-login">


    <?php echo $__env->yieldContent('content'); ?>

    
    <?php echo $__env->make('components.scripts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/app/auth.blade.php ENDPATH**/ ?>