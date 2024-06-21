<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerCategoria.php");
include_once("backend/model/modelCategoria.php");


$data = json_decode(file_get_contents('php://input'),true);
$nomeCategoria = $data["nomeCategoria"];
$descricao = $data["descricao"];
$categoriaId = $data["id_categoria"];


$controller = NEW controllerCategoria();
$resultado = $controller->atualizarCategoria($nomeCategoria, $descricao, $categoriaId);

if($resultado) echo "deu muito bom";


?>