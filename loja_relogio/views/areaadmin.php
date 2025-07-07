<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Área de Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center">Área de Administração</h1>
        <p class="text-center">Bem-vindo, <?php echo $_SESSION['nome']; ?> (Admin)</p>

        <div class="text-center mt-4">
            <a href="logout.php" class="btn btn-danger">Terminar Sessão</a>
        </div>

        <div class="mt-5">
    <h3>Gestão de Produtos</h3>
    <a href="insert_product.php" class="btn btn-primary mb-3">+ Novo Produto</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Stock</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../api/db.php';
            $produtos = $pdo->query("SELECT * FROM produtos")->fetchAll();
            foreach ($produtos as $p):
            ?>
            <tr>
                <td><img src="<?= $p['imagem'] ?>" alt="img" width="60"></td>
                <td><?= $p['nome'] ?></td>
                <td><?= number_format($p['preco'], 2) ?> €</td>
                <td><?= $p['stock'] ?></td>
                <td>
                    <a href="../api/delete_product.php?id=<?= $p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apagar este produto?')">Apagar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

    </div>
</body>
</html>
