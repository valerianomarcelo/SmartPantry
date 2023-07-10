

<?php $__env->startSection('content'); ?>
<div class="col-lg-10 col-md-9 content">
    <div class="container d-flex justify-content-center">
        <div class="card">
            <div class="card-body p-5">
                <h1 class="pb-5">Criar Lista de Compras</h1>

                <?php if($errors->any()): ?>
                <div class="alert alert-danger p-4">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('supermarket_lists.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group pb-3">
                        <label for="list_name">Nome da Lista</label>
                        <input type="text" class="form-control" id="list_name" name="list_name" required>
                    </div>

                    <div class="form-group pb-3">
                        <label for="product">Produto</label>
                        <input type="text" list="products" class="form-control" id="product">
                        <datalist id="products">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </datalist>
                    </div>

                    <div class="form-group pb-3">
                        <label for="product_quantity">Quantidade</label>
                        <input type="number" class="form-control" id="product_quantity">
                    </div>

                    <button type="button" class="btn btn-primary my-3" id="add_product">Adicionar Produto à Lista</button>

                    <hr>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="product_table_body">
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary">Criar Lista de Compras</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addProductButton = document.getElementById('add_product');
            const productInput = document.getElementById('product');
            const quantityInput = document.getElementById('product_quantity');
            const productTableBody = document.getElementById('product_table_body');

            const products = <?php echo json_encode($products); ?>;

            addProductButton.addEventListener('click', function () {
                const productId = productInput.value;
                const productName = getProductById(productId).product_name;
                const quantity = quantityInput.value;

                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${productName}</td>
                    <td>${quantity}</td>
                    <td>
                        <input type="hidden" name="product_id[]" value="${productId}">
                        <input type="hidden" name="product_quantity[]" value="${quantity}">
                        <button type="button" class="btn btn-danger btn-sm" onclick="removeProduct(this)">Remover</button>
                    </td>
                `;

                productTableBody.appendChild(row);

                productInput.value = '';
                quantityInput.value = '';
            });

            function getProductById(productId) {
                return products.find(product => product.id === parseInt(productId));
            }
        });
        function removeProduct(button) {
                button.closest('tr').remove();
            }
    </script>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/supermarket_lists/create.blade.php ENDPATH**/ ?>