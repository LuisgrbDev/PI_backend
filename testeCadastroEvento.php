<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEventos.php");
include_once("backend/model/modelEventos.php");

$data = json_decode(file_get_contents('php://input'),true);
$nomeEvento = $data["nomeEvento"];
$data_evento = $data["data_evento"];
$horaInicio = $data["horaInicio"];
$horaFim= $data["horaFim"];
$descricao = $data["descricao"];

$controller = NEW controllerEventos();
$resultado = $controller->cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao);

if($resultado) echo "deu muito bom";


?>