

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <h2>Despensa</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('larders.create')); ?>" class="btn btn-primary">Adicionar Item</a>

    <?php if(count($larderItems) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Data de Validade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $larderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $larderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($larderItem->id); ?></td>
                        <td><?php echo e($larderItem->product->product_name); ?></td>
                        <td><?php echo e($larderItem->quantity); ?></td>
                        <td><?php echo e($larderItem->product_shelf); ?></td>
                        <td>
                            <a href="<?php echo e(route('larders.edit', $larderItem->id)); ?>" class="btn btn-primary">Editar</a>
                            <form action="<?php echo e(route('larders.destroy', $larderItem->id)); ?>" method="POST" style="display: inline-block;">
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
        <p>Nenhum item na despensa.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/larders/index.blade.php ENDPATH**/ ?>