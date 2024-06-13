<?php
include_once("backend/config/conexao.php");

$pdo = Database::conexao();

if($pdo){
    echo "conexão realizada com sucesso";
}  else{
    echo "erro";
}

?>