<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEventos.php");
include_once("backend/model/modelEventos.php");

$data = json_decode(file_get_contents('php://input'),true);

$id= $data["id"];

$controller = NEW controllerEventos();
$resultado = $controller->excluirEventos($id);

if($resultado) echo "Evento excluido com Sucesso";


?>