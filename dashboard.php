<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.html'); 
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$nome_usuario = "Usuário Exemplo"; 

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../frontend/css/dashboard.css">
</head>
<body>
    <header>
        <div class="logo-img"><a href="cadastro.html"><img src="../assets/logo.png" alt=""></a></div>
        <nav>
            <ul>
                <li><a href="cadastro.html">CADASTRE-SE</a></li>
                <li><a href="eventos.html">EVENTOS</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="dashboard-container">
            <h2>Bem-vindo, <?php echo $nome_usuario; ?>!</h2>
            <p>Esta é a sua página de dashboard.</p>
            <form action="" method="POST">
                <button type="submit" name="logout">Sair</button>
            </form>
        </div>
    </main>
    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>
</html>
