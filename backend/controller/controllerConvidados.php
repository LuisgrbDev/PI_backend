<?php

class controllerConvidados {

    public function listarConvidados() {
        try {
            $modelConvidados = new modelConvidados();
            return $modelConvidados->listarConvidados();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarConvidados($nomeConvidado, $email, $telefone, $cpf, $dataNascimento) {
        try{ 
            $modelConvidados = new modelConvidados();
            return $modelConvidados->cadastrarConvidados($nomeConvidado, $email, $telefone, $cpf, $dataNascimento);

        } catch (PDOException $e) {
            return false;
        }

    }

    public function atualizarConvidados($nomeConvidado, $cpf, $dataNascimento, $id_convidado) {
        try {
            $modelConvidados = new modelConvidados();
            return $modelConvidados->atualizarConvidados($nomeConvidado, $cpf, $dataNascimento, $id_convidado);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirConvidados($id_convidado) {
        try {
            $modelConvidados = new modelConvidados();
            return $modelConvidados->excluirConvidados($id_convidado);
        } catch (PDOException $e) {
            return false;
        }
    }
}