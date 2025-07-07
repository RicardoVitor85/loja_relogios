<?php include 'partials/header.php'; ?>

<section class="hero">
  <div class="container">
    <h1>Bem-vindo à Loja de Relógios</h1>
    <p>Encontre os melhores relógios aos melhores preços</p>
    <a href="views/login.php" class="btn btn-primary btn-lg mt-3">Comece já</a>
  </div>
</section>

<section class="container mt-5">
  <h2 class="text-center mb-4">Produtos em Destaque</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Produto exemplo -->
    <div class="col">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1599940824395-997b6b2bfe6b" class="card-img-top" alt="Relógio 1">
        <div class="card-body">
          <h5 class="card-title">Relógio Clássico</h5>
          <p class="card-text">Design intemporal com pulseira em couro.</p>
          <p class="fw-bold">89.99 €</p>
          <a href="views/login.php" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>

    <!-- Repete o bloco acima para mais produtos -->
    <div class="col">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1603297631966-7988b813f6b2" class="card-img-top" alt="Relógio 2">
        <div class="card-body">
          <h5 class="card-title">Relógio Digital</h5>
          <p class="card-text">Moderno, à prova de água e multifunções.</p>
          <p class="fw-bold">109.99 €</p>
          <a href="views/login.php" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1598300051253-1a7998988e1a" class="card-img-top" alt="Relógio 3">
        <div class="card-body">
          <h5 class="card-title">Relógio Luxo</h5>
          <p class="card-text">Elegância e precisão para ocasiões especiais.</p>
          <p class="fw-bold">249.99 €</p>
          <a href="views/login.php" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'partials/footer.php'; ?>
