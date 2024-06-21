<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerUsuarios.php");
include_once("backend/model/modelUsuarios.php");

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data["nome"];
$email = $data["email"];
$senha = $data["senha"];
$id_usuario = $data["id_usuario"];


$controllerUsuarios = new controllerUsuarios();
$resultado = $controllerUsuarios->atualizarUsuario($nome, $email, $senha,$id_usuario);

if($resultado) {
    $msg = array("msg" => "Usuário atualizado com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao atualizar Usuário");
    echo json_encode($msg);
} 