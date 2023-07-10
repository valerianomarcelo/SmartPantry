

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <h1>Criar Novo Produto</h1>
    
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('products.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group pb-4">
                    <label for="product_name">Nome:</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" required>
                </div>
                <div class="form-group pb-4">
                    <label for="product_description">Descrição:</label>
                    <input type="text" name="product_description" id="product_description" class="form-control" required>
                </div>
                <div class="form-group pb-4">
                    <label for="product_weight">Peso:</label>
                    <input type="number" name="product_weight" id="product_weight" class="form-control" required>
                </div>
                <div class="form-group pb-4">
                    <label for="measurement_units">Unidades de Medida:</label>
                    <input type="text" name="measurement_units" id="measurement_units" class="form-control" required>
                </div>
                <div class="form-group pb-4">
                    <label for="category_id">Categoria:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary my-3">Criar Produto</button>
            </form>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/products/create.blade.php ENDPATH**/ ?>