<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerCategoria.php");
include_once("backend/model/modelCategoria.php");

$controllerCategoria = new controllerCategoria();
$resultado =$controllerCategoria->listarCategoria();
$msg = array("Categoria" => $resultado);

echo json_encode($msg);





?>