<?php

class controllerEventos{
    public function listarEventos(){
        try{
            $modelEventos = new modelEventos();
            return $modelEventos->listarEventos();
        }catch(PDOException $e){
            return false;
        }
    }
}



?>