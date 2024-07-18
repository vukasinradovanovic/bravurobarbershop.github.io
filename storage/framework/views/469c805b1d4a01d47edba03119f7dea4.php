

<?php $__env->startSection('content-header'); ?>
  <?php echo $__env->make('layouts.baner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
  <div class="container w-100 w-lg-75 py-3">
    <div class="row">
        <h2 class="cenovnik text-dark text-center py-2 text-uppercase" id="cenovnik"><?php echo e(__('main.cenovnik')); ?></h2>
    </div>
    <hr class="border border-dark border-3 opacity-75 w-100 my-0">
    <div class="container-fluid w-100 bg-dark shadow rounded-bottom">
        <table class="table table-hover table-borderless table-responsive justify-content-center fs-5">
          <?php $__currentLoopData = trans('table'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="table-dark">
                <td class="p-2"><?php echo e($item['label']); ?></td>
                <td class="text-end p-2"><?php echo e($item['price']); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<div class="container w-100 w-lg-50 py-5">
    <div class="container">
        <h2 class="text-dark text-uppercase text-center py-2"><?php echo e(__('main.berberskiAlat')); ?></h2>
    </div>
    <hr class="border border-dark border-3 opacity-75 w-100 my-0">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 text-center">
      <?php $__currentLoopData = trans('main.main-cards'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col p-2">
            <div class="card shadow p-3 mb-5 bg-body-tertiary rounded h-100 border-dark border-1">
                <img src="<?php echo e(asset($card['image'])); ?>" class="card-img-top" alt="<?php echo e($card['title']); ?>">
                <div class="card-body">
                    <h5 class="card-title text-uppercase"><?php echo e($card['title']); ?></h5>
                    <p class="card-text"><?php echo e($card['text']); ?></p>
                    <p><?php echo e($card['price']); ?> &euro;</p>
                    <a href="#" class="btn btn-outline-dark text-uppercase"><?php echo e($card['button']); ?></a>
                </div>
            </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/home.blade.php ENDPATH**/ ?>