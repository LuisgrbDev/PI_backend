<?php
include_once ("../backend/config/conexao.php");
include_once ("../backend/controller/controllerEvento.php");
include_once ("../backend/model/modelEvento.php"); 
$controllerEvento = new controllerEvento();
$eventos = $controllerEvento->listarEvento();

?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../frontend/css/eventos.css">
</head>

<body>
    <header>
        <div class="logo-img"><a href="login.html"><img src="../assets/logo.png" alt="Logo"></a></div>
        <nav>
            <ul>
                <li><a href="login.php">LOGIN</a></li>
                <li><a href="eventos.php">EVENTOS</a></li>
                <li><a href="cadastro.php">CADASTRE-SE</a></li>
                <span class="material-symbols-outlined">login</span>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div class="titulo">
                <h2>Próximos <br> <span class="titulo-texto">EVENTOS</span></h2>
                <a href="cadastrarEvento.php"> <h5>Cadastrar novo evento</h5></a>
            </div>
            <div class="container">
            <div id="cards-eventos">
    <?php foreach($eventos as $evento): ?>
        <div class="card-evento">
        <img class="imagem" src="<?php echo $evento['imagem']; ?>" alt="">
            <div class="evento-info">
                <a href="listaConvidados.php?id_evento=<?php echo $evento['id_evento']; ?>">
                    <h3 class="dataevento"><?php echo $evento['data_evento']; ?></h3>
                </a>
                <h4 class="nomeevento"><?php echo $evento['nomeEvento']; ?></h4>
                <p class="localevento"><?php echo $evento['descricao']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
            </div>
        </section>
    </main>

    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>

</html>