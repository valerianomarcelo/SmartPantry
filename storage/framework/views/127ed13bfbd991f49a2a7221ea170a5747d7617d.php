

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Administrar Perfis')); ?></div>

                    <div class="card-body">
                        <a href="<?php echo e(route('profiles.create')); ?>" class="btn btn-primary"><?php echo e(__('Criar Perfil')); ?></a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo e(__('ID')); ?></th>
                                    <th scope="col"><?php echo e(__('Nome')); ?></th>
                                    <th scope="col"><?php echo e(__('Ações')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($profile->id); ?></th>
                                    <td><?php echo e($profile->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('profiles.show', $profile->id)); ?>" class="btn btn-info"><?php echo e(__('Visualizar')); ?></a>
                                        <a href="<?php echo e(route('profiles.edit', $profile->id)); ?>" class="btn btn-warning"><?php echo e(__('Editar')); ?></a>
                                        <form action="<?php echo e(route('profiles.destroy', $profile->id)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja excluir este perfil?')"><?php echo e(__('Excluir')); ?></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/profiles/index.blade.php ENDPATH**/ ?>