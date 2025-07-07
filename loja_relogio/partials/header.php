<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Loja de Relógios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/styles.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Loja Relógios</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['id'])): ?>
            <?php if ($_SESSION['tipo'] === 'cliente'): ?>
                <li class="nav-item"><a class="nav-link" href="views/carrinho.php">🛒 Carrinho</a></li>
            <?php endif; ?>
            <?php if ($_SESSION['tipo'] === 'admin'): ?>
                <li class="nav-item"><a class="nav-link" href="views/areaadmin.php">⚙️ Gestão</a></li>
            <?php endif; ?>
            <li class="nav-item"><a class="nav-link" href="views/logout.php">Sair</a></li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="views/login.php">Entrar</a></li>
            <li class="nav-item"><a class="nav-link" href="views/registo.php">Registar</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
