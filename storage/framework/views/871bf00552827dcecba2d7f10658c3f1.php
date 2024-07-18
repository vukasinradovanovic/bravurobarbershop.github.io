

<?php $__env->startSection('content-main'); ?>
    <div class="row w-100 p-3 m-0 d-flex">
        <div class="col-12 col-lg-6 text-animation">
            <div class="container-fluid bg-body-tertiary" style="--bs-bg-opacity: .8;">
                <h2 class="text-center text-dark text-uppercase p-2"><?php echo e(__('main.form')); ?></h2>
            </div>
            <hr class="border border-dark border-3 opacity-75 w-100 my-0">
            <div class="container-fluid bg-dark p-3 rounded-bottom">
                <?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="col-12 col-lg-6 text-animation">
            <div class="container-fluid bg-body-tertiary" style="--bs-bg-opacity: .8;">
                <h2 class="text-center text-dark text-uppercase p-2"><?php echo e(__('main.location')); ?></h2>
            </div>
            <hr class="border border-dark border-3 opacity-75 w-100 my-0">
            <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.3433559343507!2d20.452953521195518!3d44.81730333362839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a654d0560cf53%3A0x7e346f3a799d6d4d!2s%C4%8Cubrina%2C%20Beograd!5e0!3m2!1sen!2srs!4v1711832717997!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/kontakt.blade.php ENDPATH**/ ?>