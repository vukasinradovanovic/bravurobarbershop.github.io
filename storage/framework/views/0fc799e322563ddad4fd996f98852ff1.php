

<?php $__env->startSection('content-main'); ?>
    <div class="container d-flex flex-column flex-lg-row justify-content-around align-items-center w-100 text-animation">
        <div class="col-12 col-lg-5 py-5 ">
            <img src="<?php echo e(asset('storage/Autor.jpeg')); ?>" alt="Autor" class="img-fluid border border-dark border-3 rounded">
        </div>
        <div class="col-12 col-lg-5 py-5 bg-body-tertiary text-dark rounded" style="--bs-bg-opacity: .8;">
            <h1 class="p-2 fs-1 text-bg-dark rounded"><?php echo e(__('main.autor.heading')); ?></h1>
            <p class="fs-4"><?php echo e(__('main.autor.par')); ?></p>
            <a href="https://vukasinradovanovic.github.io/portfolio.github.io/" target="_blank" class="btn btn-outline-dark fs-4 text-uppercase py-2">Portfolio</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/autor.blade.php ENDPATH**/ ?>