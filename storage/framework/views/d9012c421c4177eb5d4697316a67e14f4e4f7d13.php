<!DOCTYPE html>
<html>
<head>
  <title>SmartPantry - Login</title>
  <link href="<?php echo e(asset('css/estiloslogin.css')); ?>" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

</head>
<body>
  <header class="header">
    <h1 class="app-name">SmartPantry</h1>
    <p class="slogan">Organize, planeje e economize. Simplifique e faça compras de forma inteligente com SmartPantry!</p>
  </header>

  <main class="main-content">
	<div id="center-content">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger mt-4">
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
     <?php endif; ?>
    <form class="login-form" action="<?php echo e(route('login')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Senha" required>
      <button type="submit" class="login-button">Entrar</button>
    </form>    
    
    <div class="oauth-section">
      <p>Ou faça login com:</p>
      <div class="oauth-buttons">        
        <button type="button" onclick="window.location.href='<?php echo e(route('oauth.redirect', ['provider' => 'google'])); ?>'" class="oauth-button google btn btn-primary btn-google d-block">
          <i class="fab fa-google"></i> Google
        </button>        
        <button type="button" onclick="window.location.href='<?php echo e(route('oauth.redirect', ['provider' => 'github'])); ?>'" class="oauth-button github btn btn-secondary btn-github d-block">
          <i class="fab fa-github"></i> Github
        </button>
      </div>
    </div>
    <p class="register-link">Ainda não possui uma conta? <a href="<?php echo e(route('register')); ?>">Registre-se</a></p>    


	</div>
  </main>

  <footer class="footer">
    <p>© 2023 SmartPantry. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
<?php /**PATH E:\Marcelo\Projetos\SmartPantry\resources\views/login.blade.php ENDPATH**/ ?>