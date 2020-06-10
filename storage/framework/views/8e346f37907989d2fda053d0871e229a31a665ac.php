
<?php $__env->startSection('content'); ?>
<div class="page-wrap">
    <!-- Page content -->
    <div class="page-content">
        <main class="main-content">
            <section class="not-found-wrap text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 style="color: green">Your Order Has Been Placed succesfully.</h2>
                            <p></p>
                            <a href="<?php echo e(route('landing-page')); ?>" class="btn btn-primary btn-lg">Go to homepage</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div> <!-- /.page-content -->
</div> <!-- /.page-wrap -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shopping.layouts.new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\klubwear\resources\views/orders/thankyou.blade.php ENDPATH**/ ?>