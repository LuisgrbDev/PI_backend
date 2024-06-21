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

$controllerConvidados = new controllerConvidados();
$resultado = $controllerConvidados->cadastrarConvidados($nomeConvidado, $email, $telefone, $cpf, $dataNascimento);

if($resultado) {
    $msg = array("msg" => "Convidado cadastrado com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao cadastrar convidado");
    echo json_encode($msg);
} 