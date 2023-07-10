<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPantry</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?php echo e(asset('css/estiloshome.css')); ?>" rel="stylesheet"> 
</head>

<body>
    <div class="container-fluid">
        <div class="row">            
            <?php echo $__env->yieldContent('sidebar'); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/layouts/layout.blade.php ENDPATH**/ ?>