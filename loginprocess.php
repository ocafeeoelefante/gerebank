<?php
session_start();
include 'includes/db.php';

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Usando prepared statements para evitar SQL Injection
$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
$stmt->execute(['username' => $username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: dash.php");
    exit();
} else {
    $error = "Usuário ou senha inválidos!";
    // Aqui você pode redirecionar ou exibir uma mensagem de erro
    header("Location: login.php?error=" . urlencode($error));
    exit();
}
