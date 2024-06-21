<?php

class controllerUsuarios {

    public function listarUsuarios(){
        try{
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->listarUsuarios();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarUsuario($nome,$email,$senha){
        try{
          $modelUsuarios = new modelUsuarios();
          return $modelUsuarios->cadastrarUsuario($nome,$email,$senha);
        } catch (PDOException $e){
          return false;
        }
      
    }

    public function atualizarUsuario($nome,$email,$senha){
        try{
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->atualizarUsuario($nome,$email,$senha);
        } catch(PDOException $e){
            return false;
        }
}

public function excluirEvento($id_usuario){
    try{
        $modelUsuarios = new modelUsuarios();
        return $modelUsuarios->excluirUsuario($id_usuario);
    } catch(PDOException $e){
        return false;
    }
}

}

?>