<?php
require_once("../backend/config/conexao.php");
require_once("../backend/controller/controllerConvidados.php");

require_once("../backend/model/modelConvidados.php");

 if (isset($_GET['id_convidado'])) {
    $id_convidado = $_GET['id_convidado'];
    $controllerConvidado = new controllerConvidados();
    $convidado = $controllerConvidado->convidadoId($id_convidado);
   
    if ($convidado) {
        $nomeConvidado = isset($convidado['nomeConvidado']) ? $convidado['nomeConvidado'] : '';
        $cpf = isset($convidado['cpf']) ? $convidado['cpf'] : '';
    $dataNascimento = isset($convidado['dataNascimento']) ? $convidado['dataNascimento'] : '';
       
    } else {
        echo "Convidado não encontrado.";
        exit;
    }
} else {
    echo "ID do convidado não especificado.";
    exit; 
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Convidado</title>
    <link rel="stylesheet" href="../frontend/css/cadastrarevento.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-img"><a href="login.html"><img src="../assets/logo.png" alt="Logo"></a></div>
        <nav>
            <ul>
                <li><a href="login.html">LOGIN</a></li>
                <li><a href="cadastro.html">CADASTRE-SE</a></li>
                <li><a href="eventos.html">EVENTOS</a></li>
                <li><a href="listaConvidados.html">LISTA CONVIDADOS</a></li>
                <span class="material-symbols-outlined">login</span>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Atualizar<br> <span class="form-text">Convidado</span></h2>
            <form action="../atualizarConvidado.php" method="post">
            <input type="hidden" name="type" value="register">
            <input type="hidden" name="id_convidado" value="<?php echo $id_convidado; ?>">
                <label for="" >Nome Convidado</label>
                <input type="text" name="nomeConvidado" value="<?php echo $nomeConvidado;?>" required>
                <label for="">CPF</label>
                <input type="text" name="cpf"  value="<?php echo $cpf;?>" required>
                <label for="">Data de Nascimento</label>
                <input type="text" name="dataNascimento" value="<?php echo $dataNascimento;?>" required>
                <!-- <label for="">Área</label>
                <input type="text" name="area" value="Area" required> -->
                <button type="register">Atualizar</button>
            </form>
           
        </div>
    </main>

    <footer>
        <p class="text-rodape">© TODOS OS DIREITOS RESERVADOS ©</p>
    </footer>
</body>

</html>