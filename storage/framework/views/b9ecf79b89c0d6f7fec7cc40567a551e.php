<nav class="navbar navbar-expand-lg text-center text-animation">
    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
        <?php $__currentLoopData = trans('nav'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item p-2">
                <a class="nav-link link-body-emphasis <?php echo e(request()->routeIs($route) ? 'active' : ''); ?>" href="<?php echo e(route($route, ['locale' => App::getLocale()])); ?>"><?php echo e($label); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/layouts/nav.blade.php ENDPATH**/ ?>