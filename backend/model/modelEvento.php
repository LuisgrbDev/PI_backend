<?php
class modelEvento{
    public function listarEvento(){
        try{
            $pdo = Database::conexao();
            $sql =$pdo->query("SELECT * FROM evento");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return false;
        }
    }
    public function cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao){
        try{
            $pdo = Database::conexao();
            $sql = $pdo->prepare("INSERT INTO evento (nomeEvento,data_evento,horaInicio,horaFim,descricao) VALUES (:nomeEvento,:data_evento,:horaInicio,:horaFim,:descricao)");
            $sql->bindParam(":nomeEvento",$nomeEvento);
            $sql->bindParam(":data_evento",$data_evento);
            $sql->bindParam(":horaInicio",$horaInicio);
            $sql->bindParam(":horaFim",$horaFim);
            $sql->bindParam(":descricao",$descricao);
            $sql->execute();
            return true;

        }catch(PDOException $e){
            return false;
        }
    }
    
    public function atualizarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao,$id_evento){
        try{
            $pdo = Database::conexao();
            $prepare = $pdo->prepare("UPDATE evento SET nomeEvento = :nomeEvento, data_evento = :data_evento, horaInicio =:horaInicio, horaFim = :horaFim, descricao =:descricao WHERE id_evento = :id_evento ");
            $prepare->bindParam("nomeEvento", $nomeEvento);
            $prepare->bindParam("data_evento", $data_evento);
            $prepare->bindParam("horaInicio",$horaInicio);
            $prepare->bindParam("horaFim",$horaFim);
            $prepare->bindParam("descricao",$descricao);
            $prepare->bindParam("id_evento", $id_evento);
            $prepare->execute();
            return true;
        } catch (PDOException $e){
            return false;
        }
    }
    
    public function excluirEvento($id_evento){
        try{
            $pdo = Database::conexao();
            $excluir = $pdo->prepare("DELETE FROM evento WHERE id_evento = :id_evento");
            $excluir->bindParam("id_evento", $id_evento);
            $excluir->execute();
            return true;

        }catch(PDOException $e){
            return false;
        }
    }
}
?>