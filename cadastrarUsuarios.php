<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerUsuarios.php");
include_once("backend/model/modelUsuarios.php");

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data["nome"];
$email = $data["email"];
$senha = $data["senha"];

$controllerUsuarios = new controllerUsuarios();
$resultado = $controllerUsuarios->cadastrarUsuario($nome, $email, $senha);

if($resultado) {
    $msg = array("msg" => "Usuário cadastrado com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao cadastrar Usuário");
    echo json_encode($msg);
} 