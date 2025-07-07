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
    <title>Inserir Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Inserir Novo Produto</h2>
        <form method="POST" action="../api/insert_product.php">
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descrição:</label>
                <textarea name="descricao" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço (€):</label>
                <input type="number" step="0.01" name="preco" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stock:</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">URL da Imagem:</label>
                <input type="text" name="imagem" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Guardar Produto</button>
            <a href="areaadmin.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
