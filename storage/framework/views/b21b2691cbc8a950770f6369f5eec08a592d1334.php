

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <h2>Lista de Categorias</h2>
    
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    
    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary">Criar Categoria</a>
    
    <div class="card mt-3">
    <div class="card-body">    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->category_name); ?></td>
                    <td><?php echo e($category->category_description); ?></td>
                    <td>
                        <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-primary">Editar</a>
                        <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" style="display: inline">
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
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/categories/index.blade.php ENDPATH**/ ?>