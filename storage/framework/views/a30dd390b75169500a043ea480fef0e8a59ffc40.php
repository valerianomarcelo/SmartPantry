

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <h1>Produtos</h1>
    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Criar Novo Produto</a>
    <div class="card mt-3">
    <div class="card-body">

    <?php if(count($products) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Peso</th>
                    <th>Unidades de Medida</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->product_name); ?></td>
                        <td><?php echo e($product->product_description); ?></td>
                        <td><?php echo e($product->product_weight); ?></td>
                        <td><?php echo e($product->measurement_units); ?></td>
                        <td><?php echo e($product->category->category_name); ?></td>
                        <td>
                            <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-primary">Editar</a>
                            <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum produto cadastrado.</p>
    <?php endif; ?>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/products/index.blade.php ENDPATH**/ ?>