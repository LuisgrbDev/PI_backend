<?php

class modelConvidados {

    public function listarConvidados() {
        try {
            $pdo = Database::conexao();
            $consulta = $pdo->query("SELECT * FROM convidados");
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function cadastrarConvidados($nomeConvidado, $email, $telefone, $cpf, $dataNascimento) {
        try{
            $pdo = Database::conexao();
            $inserir = $pdo->prepare("INSERT INTO convidados 
                                    (nomeConvidado, email, telefone, cpf, dataNascimento)
                                    VALUES (:nomeConvidado, :email, :telefone, :cpf, :dataNascimento)");
            $inserir->bindParam(':nomeConvidado', $nomeConvidado);
            $inserir->bindParam(':email', $email);
            $inserir->bindParam(':telefone', $telefone);
            $inserir->bindParam(':cpf', $cpf);
            $inserir->bindParam(':dataNascimento', $dataNascimento);
            $inserir->execute();

            return true;
        } catch(PDOException $e) {
            echo $e;
            return false;
            
        }
    }

    public function atualizarConvidados($nomeConvidado, $email, $telefone, $cpf, $dataNascimento, $id_convidado) {
        try {
            $pdo = Database::conexao();
            $atualizar = $pdo->prepare("UPDATE convidados 
                                        SET nomeConvidado = :nomeConvidado, 
                                        email = :email, 
                                        telefone = :telefone,
                                        cpf = :cpf,
                                        dataNascimento = :dataNascimento
                                        WHERE id_convidado = :id_convidado");
            $atualizar->bindParam(':nomeConvidado', $nomeConvidado);
            $atualizar->bindParam(':email', $email);
            $atualizar->bindParam(':telefone', $telefone);
            $atualizar->bindParam(':cpf', $cpf);
            $atualizar->bindParam(':dataNascimento', $dataNascimento);
            $atualizar->bindParam(':id_convidado', $id_convidado);
            $atualizar->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }

    public function excluirConvidados($id_convidado) {
        try {
            $pdo = Database::conexao();
            $excluir = $pdo->prepare("DELETE FROM convidados WHERE id_convidado = :id_convidado");
            $excluir->bindParam("id_convidado", $id_convidado);
            $excluir->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}