<?php
include_once ("../backend/config/conexao.php");
include_once ("../backend/controller/controllerEventos.php");
include_once ("../backend/model/modelEventos.php"); 

$id_evento = $_GET['id_evento'] ?? null;
$controllerEventos = new controllerEventos();
$eventos = $controllerEventos->buscarEventosId($id_evento);
$convidados = $controllerEventos->buscarConvidadosId($id_evento);


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
    <title><?php echo $eventos->evento;?></title>
    <link rel="stylesheet" href="../frontend/css/listaConvidados.css">
</head>
<body>
    <header>
        <div class="logo-img"><a href="cadastro.html"><img src="../assets/logo.png" alt=""></a></div>
        <nav>
            <ul>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="cadastro.php">CADASTRE-SE</a></li>
                <li><a href="eventos.php">EVENTOS</a></li>
                <span class="material-symbols-outlined">
                    login
                    </span>
            </ul>
        </nav>
    </header>

    <section class="event-banner">
    <img src="<?php echo !empty($eventos->imagem) ? $eventos->imagem : '../assets/logo.png'; ?>" alt="Imagem evento">
    </section>

    <section class="event-details" >
        <h1><?php echo $eventos->evento;?></h1>
        <p><?php echo $eventos->DataDoEvento;?> <br> Inicio: <?php echo $eventos->Inicio;?> - Encerramento: <?php echo $eventos->Fim;?> <br>
        INFORMAÇÕES: <br><?php echo $eventos->descricao;?>
        <br>Parque de Eventos CCA - Americana, SP</p>
    </section>

    <section class="guest-list" >
        <h2>Lista de Convidados</h2>
        <table>
            <tr>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Data Nascimento</th>
                <th>Área</th>
            </tr>
            <?php foreach($convidados as $convidado):?>
            <tr>
                <td><?php echo $convidado["nome"]; ?><br><a href="excluirConvidado.php?id_evento=<?php echo $eventos->id_evento; ?>&id_convidado=<?php echo $convidado["id"];?>">Remover</a>|<a href="atualizarconvidado.php?id_convidado=<?php echo$convidado["id"];?>&id_evento=<?php echo $eventos->id_evento;?>">Alterar</a></td>
                <td><?php echo $convidado["cpf"];?></td>
                <td><?php echo $convidado["DataNascimento"];?></td>
                <td><?php echo $convidado["categoria"];?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>
</html>