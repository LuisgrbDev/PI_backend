<?php

class modelEventos {

    public function listarEventos(){
        try{
            $pdo = Database::conexao();
            $listar = $pdo->query("SELECT EVENTO.nomeEvento AS EVENTO, 
                                EVENTO.data_evento as DataDoEvento,EVENTO.descricao AS descricao,
                                CONVIDADOS.nomeConvidado as NOME,
                                CONVIDADOS.cpf as CPF, 
                                CATEGORIA.nomeCategoria as Categoria FROM eventos
                                JOIN convidados on eventos.id_convidado = convidados.id_convidado
                                JOIN categoria on eventos.id_categoria = categoria.id_categoria
                                INNER JOIN evento on eventos.id_evento = evento.id_evento group by evento.data_evento,  convidados.nomeConvidado");
            $resultado = $listar->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarEventos($id_convidado,$id_evento,$id_categoria){
        try{
            $pdo = Database::conexao();
            $sql = $pdo->prepare("INSERT INTO eventos (id_convidado, id_evento, id_categoria) VALUES (:id_convidado,:id_evento,:id_categoria)");
            $sql->bindParam("id_convidado",$id_convidado);
            $sql->bindParam("id_evento",$id_evento);
            $sql->bindParam("id_categoria",$id_categoria);
            $sql->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function excluirEventos($id){
        try{
            $pdo = Database::conexao();
            $sql = $pdo->prepare("DELETE FROM eventos WHERE id = :id");
            $sql->bindParam("id",$id);
            $sql->execute();
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }
}