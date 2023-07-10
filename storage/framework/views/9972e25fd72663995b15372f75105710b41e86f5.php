

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <h2>Adicionar Item à Despensa</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('larders.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="product_id">Produto:</label>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">Selecione o produto</option>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="product_shelf">Data de Validade:</label>
            <input type="date" name="product_shelf" id="product_shelf" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/larders/create.blade.php ENDPATH**/ ?>