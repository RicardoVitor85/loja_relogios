<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM utilizadores WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['tipo'] = $user['tipo'];

        if ($user['tipo'] === 'admin') {
            header("Location: ../views/areaadmin.php");
        } else {
            header("Location: ../index.php");
        }
        exit();
    } else {
        echo "<script>alert('Credenciais inválidas!');window.location.href='../views/login.php';</script>";
    }
}
?>
