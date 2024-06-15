<?php
include_once("backend/entity/usuario.php");



class modelUsuario
{
    public function criarUsuario($usuario)
    {
        try {
            $pdo = Database::conexao();
            $prepare = $pdo->prepare("INSERT INTO usuario (nome,email,senha) VALUES (:nome,:email,:senha)");
            
            $nome = $usuario->getNome();
            $senha = $usuario->getSenha();
            $email = $usuario->getEmail();

            $prepare->bindParam("nome",$nome);
            $prepare->bindParam("email",$email);
            $prepare->bindParam("senha",$senha);

            $prepare->execute();
            return false;
        } catch (PDOException $e) {
            return false;
        }
    }
}
