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
                                    <form class="user" action="/forgot-password" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block">Atur Ulang Kata Sandi</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="col-lg-12 mt-5">
                                        <div class="text-center">
                                            <p>Ingat Kata Sandi? <a href="/">Masuk!</a></p>
                                        </div>
                                    </div>
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
<?php echo $__env->make('app.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>