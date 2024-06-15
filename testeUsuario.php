<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerUsuario.php");
// include_once("backend/entity/usuario.php");
include_once("backend/model/modelUsuario.php");

$data = json_decode(file_get_contents('php://input'),true);
$id = $data["id"];
$nome = $data["nome"];
$email = $data["email"];
$senha = $data["senha"];


$controller = NEW controllerUsuario();
$usuario = new Usuario($id,$nome,$senha,$email);
if($usuario){
    $resultado = $controller->criandoUsuario($usuario);
    echo "cadastro feito";
} 


?>