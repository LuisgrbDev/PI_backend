<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerUsuarios.php");
include_once("backend/model/modelUsuarios.php");

$data = json_decode(file_get_contents('php://input'), true);

$id_usuario = $data["id_usuario"];

$controllerUsuarios = new controllerUsuarios();
$resultado = $controllerUsuarios->excluirUsuario($id_usuario);

if($resultado) {
    $msg = array("msg" => "Usuário excluido com sucesso!");
    echo json_encode($msg);
} else {
    $msg = array("msg" => "Erro ao excluir Usuário");
    echo json_encode($msg);
} 