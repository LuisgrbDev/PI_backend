<?php 

class controllerCategoria {

    public function listarCategoria() {
        try {
            $modelCategoria = new modelCategoria();
            return $modelCategoria->listarCategoria();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarCategoria($nomeCategoria, $descricao) {
        try {
            $modelCategoria = new modelCategoria();
            return $modelCategoria->cadastrarCategoria($nomeCategoria, $descricao);
        } catch (PDOException $e) {

        }
    }

    public function atualizarCategoria($nomeCategoria, $descricao, $categoriaId) {
        try {
            $modelCategoria = new modelCategoria();
            return $modelCategoria->atualizarCategoria($nomeCategoria, $descricao, $categoriaId);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirCategoria($categoriaId) {
        try {
            $modelCategoria = new modelCategoria();
            return $modelCategoria->excluirCategoria($categoriaId);
        } catch (PDOException $e) {
            return false;
        }
    }
}

