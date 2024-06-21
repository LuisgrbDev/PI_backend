<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerConvidados.php");
include_once("backend/model/modelConvidados.php");

$data = json_decode(file_get_contents('php://input'), true);

$id_convidado = $data["id_convidado"];

$controllerConvidados = new controllerConvidados();
$resultado = $controllerConvidados->excluirConvidados($id_convidado);

if($resultado) {
    $msg = array("msg" => "Convidado excluido com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao excluir convidado");
    echo json_encode($msg);
} 