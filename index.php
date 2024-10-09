<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GereBank</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>GereBank</h1>
        <nav>
            <!-- Você pode adicionar links para outras páginas aqui -->
            <ul>
                <li><a href="register.php">Registrar</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <h2>Gerencie suas finanças de forma rápida e segura</h2>
                <p>GereBank oferece uma plataforma simples e segura para você controlar suas contas e transações.</p>
                <a href="register.php" class="cta-button">Registrar</a>
                <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
            </div>
            <img src="img/lp.png" alt="Gerencie suas Finanças" class="hero-image">
        </section>

        <section class="features">
            <div class="ticker">
                <ul>
                    <li>Gerenciamento de contas</li>
                    <li>Transações em um clique</li>
                    <li>Relatórios financeiros</li>
                    <li>SAC</li>
                </ul>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div id="welcomeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Bem-vindo(a) ao GereBank!</h2>
            <p>Estamos felizes em tê-lo(a) aqui. Comece a gerenciar suas finanças de forma simples e segura.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 GereBank. Todos os direitos reservados.</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
