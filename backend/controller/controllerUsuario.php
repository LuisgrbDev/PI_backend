<?php
include_once("backend/entity/usuario.php");
class controllerUsuario{
    public function criandoUsuario($usuario){
       try{
        $modelUsuario= new modelUsuario();
        return $modelUsuario->criarUsuario($usuario);
       } catch(PDOException $e){
        return false;
       }
    }

}

?>