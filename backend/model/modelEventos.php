<?php

class modelEventos
{

    public function listarEventos()
    {
        try {
            $pdo = Database::conexao();
            $listar = $pdo->query("SELECT EVENTO.nomeEvento AS evento, 
                                EVENTO.data_evento as DataDoEvento,EVENTO.descricao AS descricao,
                                CONVIDADOS.nomeConvidado as nome,
                                CONVIDADOS.cpf as cpf, 
                                CATEGORIA.nomeCategoria as categoria FROM eventos
                                JOIN convidados on eventos.id_convidado = convidados.id_convidado
                                JOIN categoria on eventos.id_categoria = categoria.id_categoria
                                INNER JOIN evento on eventos.id_evento = evento.id_evento group by evento.data_evento,  convidados.nomeConvidado");
            $resultado = $listar->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function buscarConvidadosId($id_evento)
    {
        try {
            $pdo = Database::conexao();
            $query = "SELECT convidados.nomeConvidado AS nome, 
                             convidados.cpf AS cpf, 
                             DATE_FORMAT(convidados.dataNascimento, '%d/%m/%Y') AS DataNascimento, 
                             categoria.nomeCategoria AS categoria,
                             convidados.id_convidado AS id
                      FROM eventos
                      JOIN convidados ON eventos.id_convidado = convidados.id_convidado
                      JOIN categoria ON eventos.id_categoria = categoria.id_categoria
                      WHERE eventos.id_evento = :id_evento";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":id_evento", $id_evento, PDO::PARAM_INT);
            $stmt->execute();
            $convidados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $convidados;
        } catch (PDOException $e) {
            return []; // Retornar um array vazio em caso de erro
        }
    }

    public function buscarEventoId($id_evento)
    {
        try {
            $pdo = Database::conexao();
            $query = "SELECT EVENTO.nomeEvento AS evento, 
            EVENTO.data_evento AS DataDoEvento,
            EVENTO.id_evento AS id_evento,
            EVENTO.imagem AS imagem, 
            EVENTO.horaInicio AS Inicio, 
            EVENTO.horaFim AS Fim, 
            EVENTO.descricao AS descricao
            -- eventos.id 
            FROM evento
            -- JOIN evento ON eventos.id_evento = evento.id_evento 
            WHERE id_evento = :id_evento;";

            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":id_evento", $id_evento, PDO::PARAM_INT);
            $stmt->execute();
            $evento = $stmt->fetch(PDO::FETCH_OBJ);

            return $evento;
        } catch (PDOException $e) {
            return false;
        }
    }


    public function cadastrarEventos($id_convidado, $id_evento, $id_categoria)
    {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("INSERT INTO eventos (id_convidado, id_evento, id_categoria) VALUES (:id_convidado,:id_evento,:id_categoria)");
            $sql->bindParam("id_convidado", $id_convidado);
            $sql->bindParam("id_evento", $id_evento);
            $sql->bindParam("id_categoria", $id_categoria);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function excluirEventos($id)
    {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("DELETE FROM eventos WHERE id_evento = :id");
            $sql->bindParam("id", $id);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function excluirConvidadoId($id_evento, $id_convidado)
    {
        try {
            $pdo = Database::conexao();
            $sql = $pdo->prepare("DELETE FROM eventos where id_evento = :id_evento AND id_convidado = :id_convidado");
            $sql->bindParam("id_evento", $id_evento);
            $sql->bindParam("id_convidado", $id_convidado);
            $sql->execute();
            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}
