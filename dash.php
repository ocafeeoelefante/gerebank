<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Usando prepared statements para buscar o nome do usuário
$stmt = $pdo->prepare("SELECT username FROM users WHERE id = :id");
$stmt->execute(['id' => $user_id]);
$user = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dash.css">
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($user['username']); ?>!</h2>
    <p><a href="trans.php">Realizar transações</a></p>
    <p><a href="logout.php">Sair</a></p>

    <footer>
        <p>&copy; 2024 GereBank. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
