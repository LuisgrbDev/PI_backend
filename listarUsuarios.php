<?php

include_once("backend/config/conexao.php");
include_once("backend/controller/controllerUsuarios.php");
include_once("backend/model/modelUsuarios.php");

$controllerUsuarios = new controllerUsuarios();
$resultado = $controllerUsuarios->listarUsuarios();

$retorno = array("usuarios" => $resultado);
echo json_encode($retorno);