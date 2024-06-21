<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEventos.php");
include_once("backend/model/modelEventos.php");

$data = json_decode(file_get_contents('php://input'),true);
$id_convidado = $data["id_convidado"];
$id_categoria = $data["id_categoria"];
$id_evento = $data["id_evento"];


$controller = NEW controllerEventos();
$resultado = $controller->cadastrarEventos($id_convidado,$id_evento,$id_categoria);

if($resultado) echo "deu muito bom";


?>