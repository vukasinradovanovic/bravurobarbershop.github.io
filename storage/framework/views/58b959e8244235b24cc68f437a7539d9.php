<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bravuro je moderna berbernica sa profesionalnim osobljem koje pruža kvalitetne usluge muškog šišanja i stajlinga brade.">
    <meta name="keywords" content="barber, frizerski salon, muško šišanje, stajling brade, moderno, stilizovano, profesionalno osoblje, kvalitetna usluga, trendi frizure, rezervacija termina, saveti za negu kose, saveti za negu brade">
    <title>Bravuro</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('storage/favicon.ico')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="container-fluid px-0">
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content-header'); ?>
    </header> 
    <hr class="border border-dark border-3 opacity-75 w-100 my-0">

    <main class="container-fluid bg-body-tertiary p-0">
        <?php echo $__env->yieldContent('content-main'); ?>
    </main>
    <hr class="border border-dark border-3 opacity-75 w-100 my-0">
    <footer class="bg-dark">
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\myproject\myproject\resources\views/layouts/app.blade.php ENDPATH**/ ?>