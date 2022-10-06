<?php $__env->startSection('content'); ?>
    <!-- Login Content -->
    <div class="container-login mt-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Atur Ulang Kata Sandi</h1>
                                    </div>
                                    <form class="user" action="/reset-password/<?php echo e($mytoken); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" name="token" value="<?php echo e($mytoken); ?>" hidden>
                                            <input type="password" class="form-control" name="password" placeholder="Kata sandi baru">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirmPassword" placeholder="Konfirmasi Kata sandi">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Atur Ulang Kata Sandi</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('app.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/auth/reset-password.blade.php ENDPATH**/ ?>