<div class="container text-center">
            <div class="row m-0 d-flex align-items-center flex-column-reverse flex-lg-row">
                <div class="col-4 py-5 d-none d-md-block">
                    <a href="index.html"><img src="<?php echo e(asset('storage/logo.png')); ?>" alt="logo" class="img-fluid rounded-circle bg-body-tertiary expand" style="--bs-bg-opacity: .8;" width="200"></a>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row-2 py-3 d-flex flex-xl-row flex-column align-items-center">
                    <?php $__currentLoopData = trans('footer.buttons'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="container-fluid py-2">
                                <?php if(isset($item['route'])): ?>
                                    <a href="<?php echo e(route($item['route'], ['locale' => App::getLocale()])); ?>" class="btn btn-outline-light rounded-10 justify-content-center fs-5"><?php echo e($item['label']); ?></a>
                                <?php elseif(isset($item['url'])): ?>
                                    <a href="<?php echo e($item['url']); ?>" class="btn btn-outline-light rounded-10 justify-content-center fs-5"><?php echo e($item['label']); ?></a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row fs-3 py-2">
                        <?php $__currentLoopData = trans('footer.icons'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-2">
                                <a href="<?php echo e($icon['slug']); ?>" class="text-light"><i class="<?php echo e($icon['name']); ?>"></i></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="row py-4">
                        <?php $__currentLoopData = trans('footer.rights'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-center text-light">&copy;<?php echo e($text); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-light text-center">
                    <?php $__currentLoopData = trans('footer.informations'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row-12 row-lg-4 py-2 w-100">
                            <p><?php echo e($info['info']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/layouts/footer.blade.php ENDPATH**/ ?>