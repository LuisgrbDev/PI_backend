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
$id_evento = $data["id_evento"];

$controller = NEW controllerEventos();
$resultado = $controller->atualizarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao,$id_evento);

if($resultado) echo "Evento atualizado com Sucesso";


?>