<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEvento.php");
include_once("backend/model/modelEvento.php");

$data = json_decode(file_get_contents('php://input'),true);
$nomeEvento = $data["nomeEvento"];
$data_evento = $data["data_evento"];
$horaInicio = $data["horaInicio"];
$horaFim= $data["horaFim"];
$descricao = $data["descricao"];

$controller = NEW controllerEvento();
$resultado = $controller->cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao);

if($resultado) echo "deu muito bom";


?>