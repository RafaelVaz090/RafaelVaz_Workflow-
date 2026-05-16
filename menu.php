<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Menu</a> 
    
    <div class="navbar-nav">
      <a class="nav-link" href="Luffy.php">Luffy</a>
      <a class="nav-link" href="Zoro.php">Zoro</a>
      <a class="nav-link" href="Sanji.php">Sanji</a>
      <a class="nav-link text-warning" href="logs.php">Painel de Logs</a>
      <?php if (isset($_SESSION['logado'])): ?>
                <a class="nav-link text-danger border border-danger rounded ms-3 px-2" href="logs.php?sair=1" style="line-height: 1;">Sair</a>
            <?php endif; ?>
    </div>
  </div>
</nav>