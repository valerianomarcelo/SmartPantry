

<?php $__env->startSection('content'); ?>
    <div class="col-lg-10 col-md-9 content">
        <h1>Produtos do Parceiro: <?php echo e($emporiums[0]->name); ?></h1>   

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $emporiums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emporium): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($emporium->id); ?></td>
                            <td><?php echo e($emporium->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('EmporiumProduct.create', ['emporium' => $emporium->id])); ?>" class="btn btn-primary">Adicionar Produtos</a>
                                <a href="<?php echo e(route('emporiums.edit', ['emporium' => $emporium->id])); ?>" class="btn btn-primary">Editar</a>
                                <form action="<?php echo e(route('EmporiumProduct.destroy', ['emporium' => $emporium->id])); ?>" method="POST" style="display: inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/partnersproducts/index.blade.php ENDPATH**/ ?>