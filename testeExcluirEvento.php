<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEventos.php");
include_once("backend/model/modelEventos.php");

$data = json_decode(file_get_contents('php://input'),true);

$id_evento = $data["id_evento"];

$controller = NEW controllerEventos();
$resultado = $controller->excluirEvento($id_evento);

if($resultado) echo "Evento excluido com Sucesso";


?>