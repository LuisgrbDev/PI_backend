<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../frontend/css/cadastro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo-img"><a href="login.html"><img src="../assets/logo.png" alt="Logo"></a></div>
        <nav>
            <ul>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="cadastro.php">CADASTRE-SE</a></li>
                <li><a href="eventos.php">EVENTOS</a></li>
                <li><a href="listaConvidados.php">LISTA CONVIDADOS</a></li>
               <!--btn aparente na nav para fazer logou-->
               <a href="login.php"><span class="material-symbols-outlined">login</a></span></a>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Faça seu <br> <span class="form-text">CADASTRO</span></h2>
            <?php
            session_start();
            if (isset($_SESSION['mensagem'])) {
                $tipo_mensagem = $_SESSION['tipo_mensagem'];
                echo "<div class='mensagem {$tipo_mensagem}'>{$_SESSION['mensagem']}</div>";
                unset($_SESSION['mensagem']);
                unset($_SESSION['tipo_mensagem']);
            }
            ?>
            <form action="../processaCadastro.php" method="post">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="password" name="confirma_senha" placeholder="Confirme a senha" required>
                <button type="submit">CADASTRAR</button>
            </form>
            <p>Já possui cadastro? <br><a href="login.html">Faça o login!</a></p>
        </div>
    </main>

    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>
</html>
