<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../views/login.php");
    exit();
}

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $preco = floatval($_POST['preco']);
    $stock = intval($_POST['stock']);
    $imagem = $_POST['imagem']; // URL da imagem

    $stmt = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco, imagem, stock) VALUES (?, ?, ?, ?, ?)");
    if ($stmt->execute([$nome, $descricao, $preco, $imagem, $stock])) {
        echo "<script>alert('Produto inserido com sucesso!');window.location.href='../views/areaadmin.php';</script>";
    } else {
        echo "<script>alert('Erro ao inserir produto.');window.history.back();</script>";
    }
}
?>
