<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerConvidados.php");
include_once("backend/model/modelConvidados.php");

$data = json_decode(file_get_contents("php://input"), true);

$nomeConvidado = $data["nomeConvidado"];
$email = $data["email"];
$telefone = $data["telefone"];
$cpf = $data["cpf"];
$dataNascimento = $data["dataNascimento"];
$id_convidado = $data["id_convidado"];


$controllerConvidados = new controllerConvidados();
$resultado = $controllerConvidados->atualizarConvidados($nomeConvidado, $email, $telefone, $cpf, $dataNascimento, $id_convidado);

if($resultado) {
    $msg = array("msg" => "Convidado atualizado com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao atualizar convidado");
    echo json_encode($msg);
} 