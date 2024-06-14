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
}
?>