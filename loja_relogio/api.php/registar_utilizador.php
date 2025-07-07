<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmar = $_POST['confirmar'];

    // Validações básicas
    if ($password !== $confirmar) {
        echo "<script>alert('As palavras-passe não coincidem!');window.location.href='../views/registo.php';</script>";
        exit();
    }

    // Verifica se já existe utilizador
    $stmt = $pdo->prepare("SELECT id FROM utilizadores WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Email já registado!');window.location.href='../views/registo.php';</script>";
        exit();
    }

    // Inserir novo utilizador
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO utilizadores (nome, email, password, tipo) VALUES (?, ?, ?, 'cliente')");
    if ($stmt->execute([$nome, $email, $hash])) {
        echo "<script>alert('Registo concluído com sucesso! Faça login.');window.location.href='../views/login.php';</script>";
    } else {
        echo "<script>alert('Erro no registo.');window.location.href='../views/registo.php';</script>";
    }
}
?>
