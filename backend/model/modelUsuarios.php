<?php

require_once 'backend/config/conexao.php';

class modelUsuarios {
    public function listarUsuarios(){
        try {
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM usuario");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function cadastrarUsuario($nome, $email, $senha){
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
            $sql->bindParam(":nome", $nome);
            $sql->bindParam(":email", $email);
            $sql->bindParam(":senha", $senha);
            $sql->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function atualizarUsuario($nome, $email, $senha, $id_usuario){
        try {
            $pdo = Database::conexao();
            $prepare = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email, senha = :senha WHERE id_usuario = :id_usuario");
            $prepare->bindParam(":nome", $nome);
            $prepare->bindParam(":email", $email);
            $prepare->bindParam(":senha", $senha);
            $prepare->bindParam(":id_usuario", $id_usuario);
            $prepare->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function excluirUsuario($id_usuario){
        try {
            $pdo = Database::conexao();
            $excluir = $pdo->prepare("DELETE FROM usuario WHERE id_usuario = :id_usuario");
            $excluir->bindParam(":id_usuario", $id_usuario);
            $excluir->execute();
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function autenticarUsuario($email, $senha){
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                return $usuario; 
            } else {
                return false;
            }
        } catch(PDOException $e) {
            return $e; 
        }
    }
}

?>
