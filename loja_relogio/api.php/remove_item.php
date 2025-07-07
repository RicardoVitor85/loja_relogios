<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['tipo'] !== 'cliente') {
    header("Location: ../views/login.php");
    exit();
}

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $carrinho_id = intval($_POST['carrinho_id']);
    $user_id = $_SESSION['id'];

    $stmt = $pdo->prepare("DELETE FROM carrinho WHERE id = ? AND utilizador_id = ?");
    $stmt->execute([$carrinho_id, $user_id]);

    header("Location: ../views/carrinho.php");
    exit();
}
?>
