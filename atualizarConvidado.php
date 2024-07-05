<?php
require_once("backend/config/conexao.php");
require_once("backend/controller/controllerConvidados.php");
require_once("backend/controller/controllerEventos.php");
require_once("backend/model/modelConvidados.php");
require_once("backend/model/modelEventos.php");
$type = filter_input(INPUT_POST,"type");


if ($type === "register") {
    $controllerConvidado = new controllerConvidados();
    $nomeConvidado = $_POST["nomeConvidado"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["dataNascimento"];
    $id_convidado = $_POST["id_convidado"];
    $resultado = $controllerConvidado->atualizarConvidados($nomeConvidado, $cpf, $dataNascimento, $id_convidado);
    $id= $_GET['id_evento'];

    if ($resultado) {
        header("Location: frontend/eventos.php");
        exit;
    } else {
        echo "Erro ao atualizar convidado.";
    }
}
?>
