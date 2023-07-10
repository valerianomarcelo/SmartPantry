<!DOCTYPE html>
<html>
<head>
  <title>SmartPantry - Registro</title>
  <link href="<?php echo e(asset('css/estilosregistro.css')); ?>" rel="stylesheet"> 
</head>
<body>
  <header class="header">
    <h1 class="app-name">SmartPantry</h1>
    <p class="slogan">Organize, planeje e economize. Simplifique e faça compras de forma inteligente com SmartPantry!</p>
  </header>

  <main class="main-content">
    <?php if(session('success')): ?>
        <div class="success-message">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div id="center-content">
      <form class="register-form" action="<?php echo e(route('register')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit" class="register-button">Registrar</button>
      </form>

      <p class="login-link">Já possui uma conta? <a href="<?php echo e(route('login')); ?>">Faça login</a></p>
    </div>
  </main>

  <footer class="footer">
    <p>© 2023 SmartPantry. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
<?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/registro.blade.php ENDPATH**/ ?>