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
}