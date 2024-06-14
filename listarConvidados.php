<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerConvidados.php");
include_once("backend/model/modelConvidados.php");

$controllerConvidados = new controllerConvidados();
$resultado = $controllerConvidados->listarConvidados();

$retorno = array("convidados" => $resultado);
echo json_encode($retorno);