

<?php $__env->startSection('content-main'); ?>
<div class="row m-0 p-4">
    <div class="col-12 col-lg-6 py-2">
        <div class="row justify-content-center">
            <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                    <img src="<?php echo e(asset('storage/Slider2.jpg')); ?>" class="d-block w-100 img-fluid" alt="Slide 1">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                    <img src="<?php echo e(asset('storage/Slider3.jpg')); ?>" class="d-block w-100 img-fluid" alt="Slide 2">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                    <img src="<?php echo e(asset('storage/Slider4.jpg')); ?>" class="d-block w-100 img-fluid" alt="Slide 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 d-flex align-items-center">
        <div class="container-fluid bg-body-tertiary py-2 text-dark rounded" style="--bs-bg-opacity: .8;" id="tIstorijat">
        <?php $__currentLoopData = trans('istorijat.par'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paragraf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($paragraf['paragraf']); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/istorijat.blade.php ENDPATH**/ ?>