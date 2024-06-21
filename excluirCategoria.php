<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerCategoria.php");
include_once("backend/model/modelCategoria.php");


$data = json_decode(file_get_contents('php://input'),true);

$categoriaId = $data["id_categoria"];

$controller = NEW controllerCategoria();
$resultado = $controller->excluirCategoria($categoriaId);

if($resultado) echo "Evento excluido com Sucesso";


?>