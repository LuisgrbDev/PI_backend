<?php

class modelCategoria {

    public function listarCategoria() {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM categoria");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarCategoria($nomeCategoria, $descricao) {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("INSERT INTO categoria (nomeCategoria, descricao) VALUES (:nomeCategoria, :descricao)");
            $sql->bindParam(":nomeCategoria", $nomeCategoria);
            $sql->bindParam(":descricao", $descricao);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarCategoria($nomeCategoria, $descricao, $categoriaId) {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("UPDATE categoria SET nomeCategoria = :nomeCategoria, descricao = :descricao, id_categoria = :id_categoria WHERE id_categoria = :id_categoria");
            $sql->bindParam(":nomeCategoria", $nomeCategoria);
            $sql->bindParam(":descricao", $descricao);
            $sql->bindParam("id_categoria", $categoriaId);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirCategoria($categoriaId){
        try{
            $pdo = Database::conexao();
            $excluir = $pdo->prepare("DELETE FROM categoria WHERE id_categoria = :id_categoria");
            $excluir->bindParam("id_categoria", $categoriaId);
            $excluir->execute();
            return true;
            
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }


}