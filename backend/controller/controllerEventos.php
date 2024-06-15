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

    public function cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao){
      try{
        $modelEventos = new modelEventos();
        return $modelEventos->cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao);
      } catch (PDOException $e){
        return false;
      }
    }

    public function atualizarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao,$id_evento){
        try{
            $modelEventos = new modelEventos();
            return $modelEventos->atualizarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao,$id_evento);
        } catch(PDOException $e){
            return false;
        }
    }
    public function excluirEvento($id_evento){
        try{
            $modelEventos = new modelEventos();
            return $modelEventos->excluirEvento($id_evento);
        } catch(PDOException $e){
            return false;
        }
    }
}



?>