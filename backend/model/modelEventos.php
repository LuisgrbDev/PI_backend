<?php
class modelEventos{
    public function listarEventos(){
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
}
?>