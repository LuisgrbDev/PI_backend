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
}