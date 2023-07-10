

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <div class="card mb-4">
        <div class="card-header">Adicionar Produto ao Parceiro</div>        
        <div class="card-body">
            <form action="<?php echo e(route('EmporiumProduct.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="emporium_id" value="<?php echo e($emporium->id); ?>">
                <div class="form-group">    
                    <label for="product_id">Selecione um produto:</label>
                    <select name="product_id" id="product_id" class="form-control">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Adicionar Produto</button>
            </form>
        </div>
    </div> 
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/partnersproducts/create.blade.php ENDPATH**/ ?>