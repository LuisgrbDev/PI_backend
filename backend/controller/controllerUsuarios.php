<?php
require_once 'backend/model/modelUsuarios.php';


class controllerUsuarios {

    public function listarUsuarios(){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->listarUsuarios();
        } catch(PDOException $e) {
            return false;
        }
    }

    public function cadastrarUsuario($nome, $email, $senha){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->cadastrarUsuario($nome, $email, $senha);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarUsuario($nome, $email, $senha, $id_usuario){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->atualizarUsuario($nome, $email, $senha, $id_usuario);
        } catch(PDOException $e) {
            return false;
        }
    }

    public function excluirUsuario($id_usuario){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->excluirUsuario($id_usuario);
        } catch(PDOException $e) {
            return false;
        }
    }

    public function autenticarUsuario($email, $senha){
        try {
            $modelUsuarios = new modelUsuarios();
            return $modelUsuarios->autenticarUsuario($email, $senha);
        } catch(PDOException $e) {
            return false;
        }
    }
}

?>
