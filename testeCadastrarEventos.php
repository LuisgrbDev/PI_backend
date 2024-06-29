<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEvento.php");
$type = filter_input(INPUT_POST, "type");

if ($type === "register") {
    
    $controllerEvento = new controllerEvento();
    
    $nomeEvento = filter_input(INPUT_POST,"nomeEvento");
    $dataEvento = $_POST["dataEvento"];

    $horarioInicio = $_POST["horarioInicio"];
    $horarioFim = $_POST["horarioEncerramento"];
    $descricaoEvento = $_POST["descricaoEvento"];
    
    // $imagemEvento = $_FILES["imagemEvento"];
  
    $resultado = $controllerEvento->cadastrarEvento($nomeEvento, $dataEvento, $horarioInicio, $horarioFim, $descricaoEvento);
    echo $resultado;
    if ($resultado) {
        
        header("Location: frontend/eventos.php");
        exit();
    } else {
        echo "Erro ao cadastrar evento.";
    }
}
?>
<h2>OLA</h2>