<?php
require_once("../backend/config/conexao.php");
require_once("../backend/controller/controllerEventos.php");
require_once("../backend/model/modelEventos.php");
$id= $_GET['id_evento'];
$id_evento = $_GET['id_evento'];
$id_convidado = $_GET['id_convidado'];

if ($id_convidado && $id_evento) {
    $controllerEvento = new controllerEventos();
    $resultado = $controllerEvento->excluirConvidadoId($id_evento,$id_convidado);
    
    if ($resultado) {
        header("Location: listaConvidados.php?id_evento=$id");
        exit;
    } else {
        echo "Erro ao atualizar convidado.";
    }
}
?>
