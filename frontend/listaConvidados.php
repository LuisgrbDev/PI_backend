<?php
include_once ("../backend/config/conexao.php");
include_once ("../backend/controller/controllerEventos.php");
include_once ("../backend/model/modelEventos.php"); 
$controllerEventos = new controllerEventos();
$eventos = $controllerEventos->listarEventos();
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Numanice | Campinas</title>
    <link rel="stylesheet" href="../frontend/css/listaConvidados.css">
</head>
<body>
    <header>
        <div class="logo-img"><a href="cadastro.html"><img src="../assets/logo.png" alt=""></a></div>
        <nav>
            <ul>
                <li><a href="login.html">LOGIN</a></li>
                <li><a href="cadastro.html">CADASTRE-SE</a></li>
                <li><a href="eventos.html">EVENTOS</a></li>
                <span class="material-symbols-outlined">
                    login
                    </span>
            </ul>
        </nav>
    </header>

    <section class="event-banner">
        <img src="../assets/card1.png" alt="Numanice Campinas">
    </section>

    <section class="event-details">
        <h1>NUMANICE | CAMPINAS</h1>
        <p>Sábado, 12 out - 15:00<br>Parque de Eventos CCA - Americana, SP</p>
    </section>

    <section class="guest-list">
        <h2>Lista de Convidados</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Área</th>
            </tr>
            <?php foreach($eventos as $evento):?>
            <tr>
                <td><?php echo $evento["NOME"];?><br><a href="#">Remover</a> | <a href="#">Alterar</a></td>
                <td><?php echo $evento["CPF"];?></td>
                <td><?php echo $evento["Categoria"];?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>
</html>