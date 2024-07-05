<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../frontend/css/cadastrarevento.css">
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
            <h2>CADASTRE UM NOVO <br> <span class="form-text">EVENTO</span></h2>
            <form action="../cadastrarEventos.php" method="post">
            <input type="hidden" name="type" value="register">
                <label for="" >Nome Evento</label>
                <input type="text" name="nomeEvento" placeholder="" required>
                <label for="">Data Evento</label>
                <input type="date" name="dataEvento"  required>
                <label for="">Horario Inicio</label>
                <input type="time" name="horarioInicio"  required>
                <label for="">Horario Encerramento</label>
                <input type="time" name="horarioEncerramento" placeholder="Nome Evento" required>
                <label for="">Descrição do Evento</label>
                <input type="text" name="descricaoEvento" placeholder="" required>
                <button type="submit">CADASTRAR</button>
            </form>
           
        </div>
    </main>

    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>

</html>