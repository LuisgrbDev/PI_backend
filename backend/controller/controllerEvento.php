<?php

class controllerEvento{
    public function listarEvento(){
        try{
            $modelEventos = new modelEvento();
            return $modelEventos->listarEvento();
        }catch(PDOException $e){
            return false;
        }
    }
    public function buscarEventoId($id_evento){
        try{
            $modelEventos = new modelEvento();
            return $modelEventos->buscarEventoId($id_evento);
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao){
      try{
        $modelEventos = new modelEvento();
        return $modelEventos->cadastrarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao);
      } catch (PDOException $e){
        return false;
      }
    }

    public function atualizarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao,$id_evento){
        try{
            $modelEventos = new modelEvento();
            return $modelEventos->atualizarEvento($nomeEvento,$data_evento,$horaInicio,$horaFim,$descricao,$id_evento);
        } catch(PDOException $e){
            return false;
        }
    }
    public function excluirEvento($id_evento){
        try{
            $modelEventos = new modelEvento();
            return $modelEventos->excluirEvento($id_evento);
        } catch(PDOException $e){
            return false;
        }
    }
}



?>