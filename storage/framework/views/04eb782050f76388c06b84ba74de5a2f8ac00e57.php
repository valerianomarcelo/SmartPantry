

<?php $__env->startSection('sidebar'); ?>
<style>
    .sidebar {
        height: 100vh;
        position: sticky;
        top: 0;
    }
</style>
<div class="col-lg-2 col-md-3 sidebar">
    <img src="<?php echo e(asset('images/logoSmartPantry2.jpg')); ?>" alt="Logo da SmartPantry">
    <h4>Olá, <?php echo e(Auth::user()->name); ?></h4>        
    <a href="<?php echo e(route('supermarket_lists.create')); ?>"><i class="fas fa-tasks"></i><span class="menu-text">  Listas</span></a>
    <a href="<?php echo e(route('products.index')); ?>"><i class="fas fa-box"></i><span class="menu-text">  Produtos</span></a>
    <a href="<?php echo e(route('larders.index')); ?>"><i class="fas fa-utensils"></i><span class="menu-text">   Despensa</span></a>
    <a href="<?php echo e(route('categories.index')); ?>"><i class="fas fa-tags"></i><span class="menu-text">  Categorias</span></a>
    <a href="<?php echo e(route('emporiums.index')); ?>"><i class="fas fa-store"></i><span class="menu-text"> Parceiros</span></a>
    <a href="<?php echo e(route('EmporiumProduct.index')); ?>"><i class="fas fa-handshake"></i><span class="menu-text"> Produtos de parceiros</span></a>
    <a href="<?php echo e(route('administrar.perfis')); ?>"><i class="fas fa-user-cog"></i><span class="menu-text">  perfis</span></a>
    <div class="mt-4">
        <a href="<?php echo e(route('logout')); ?>"><i class="fas fa-sign-out-alt"></i><span class="menu-text">Logout</span></a>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      <div class="col-lg-10 col-md-9 content">
          <?php echo $__env->yieldContent('content-main'); ?>
      </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/home.blade.php ENDPATH**/ ?>