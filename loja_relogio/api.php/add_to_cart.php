<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['tipo'] !== 'cliente') {
    header("Location: ../views/login.php");
    exit();
}

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = intval($_POST['produto_id']);
    $quantidade = intval($_POST['quantidade']);
    $user_id = $_SESSION['id'];

    // Verifica se o produto já está no carrinho
    $stmt = $pdo->prepare("SELECT * FROM carrinho WHERE utilizador_id = ? AND produto_id = ?");
    $stmt->execute([$user_id, $produto_id]);
    $existe = $stmt->fetch();

    if ($existe) {
        // Atualiza quantidade
        $nova_qtd = $existe['quantidade'] + $quantidade;
        $update = $pdo->prepare("UPDATE carrinho SET quantidade = ? WHERE id = ?");
        $update->execute([$nova_qtd, $existe['id']]);
    } else {
        // Insere novo item
        $insert = $pdo->prepare("INSERT INTO carrinho (utilizador_id, produto_id, quantidade) VALUES (?, ?, ?)");
        $insert->execute([$user_id, $produto_id, $quantidade]);
    }

    header("Location: ../index.php");
    exit();
}
?>
