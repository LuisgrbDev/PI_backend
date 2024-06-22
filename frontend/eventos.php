<?php
include_once ("../backend/config/conexao.php");
include_once ("../backend/controller/controllerEvento.php");
include_once ("../backend/model/modelEvento.php"); 
$controllerEvento = new controllerEvento();
$eventos = $controllerEvento->listarEvento();
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Eventos</title>
    <link rel="stylesheet" href="../frontend/css/eventos.css">
</head>

<body>

    <header>
        <ul class="lista-nav">
            <div class="logo">
                <li><a href="login.html"><img src="../assets/logo.png" alt=""></a></li>
            </div>
            <li><a href="eventos.html">EVENTOS</a></li>
            <li><a href="cadastro.html">CADASTRE-SE</a></li>
        </ul>
    </header>

    <section>
        <div class="titulo">
            <h2>próximos <span>EVENTOS</span></h2>
        </div>
        <?php foreach($eventos as $evento):?>
        <div id="cards-eventos">
            <div class="primeira linha">
        
               <div class="first"><img class="imagem" src="../assets/card1.png" alt="">
               <a href="#"> <h3 class="dataevento"><?php echo $evento["data_evento"];?></h3></a>
                <h4 class="nomeevento"><?php echo $evento["nomeEvento"];?></h4>
                <p class="localevento"><?php echo $evento["descricao"];?></p>
            
                <div class="first"><img class="imagem" src="../assets/card1.png" alt="">
               <a href="#"> <h3 class="dataevento"><?php echo $evento["data_evento"];?></h3></a>
                <h4 class="nomeevento"><?php echo $evento["nomeEvento"];?></h4>
                <p class="localevento"><?php echo $evento["descricao"];?></p>
            <?php endforeach; ?>
        <!-- <div class="second">
            <img class="imagem" src="../assets/card3.png" alt="">
            <a href="#"> <h3 class="dataevento">Sexta, 11 dez - 14:00</h3></a>
                <h4 class="nomeevento">NUMANICE | CAMPINAS</h4>
                <p class="localevento">Parque de Eventos CCA- Americana, Sp</p>
            
    
       <img class="imagem" src="../assets/card4.png" alt="">
       <a href="#"> <h3 class="dataevento">Sábado, 12 out - 15:00</h3></a>
            <h4 class="nomeevento">NUMANICE | CAMPINAS</h4>
            <p class="localevento">Parque de Eventos CCA- Americana, Sp</p>
        </div>
       
        <div class="third">
        <img src="../assets/card5.png" alt="">
        <a href="#"> <h3 class="dataevento">Sábado, 12 out - 15:00</h3></a>
                <h4 class="nomeevento">NUMANICE | CAMPINAS</h4>
                <p class="localevento">Parque de Eventos CCA- Americana, Sp</p>
            
            <div><img src="../assets/card6.png" alt="">
                <a href="#"> <h3 class="dataevento">Sábado, 12 out - 15:00</h3></a>
                <h4 class="nomeevento">NUMANICE | CAMPINAS</h4>
                <p class="localevento">Parque de Eventos CCA- Americana, Sp</p>
            </div>  -->
    </section>


    <footer>
        <p>© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>

</body>

</html>