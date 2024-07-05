<?php 
class controllerEventos{

    public function listarEventos(){
        try{    
            $modelEventos = new modelEventos();
            return $modelEventos->listarEventos();
        }catch (PDOException $e){
            return false;
        }
    }

    public function buscarEventosId($id_evento){
        try{    
            $modelEventos = new modelEventos();
            return $modelEventos->buscarEventoId($id_evento);
        }catch (PDOException $e){
            return false;
        }
    }
    public function buscarConvidadosId($id_evento){
        try{    
            $modelEventos = new modelEventos();
            return $modelEventos->buscarConvidadosId($id_evento);
        }catch (PDOException $e){
            return false;
        }
    }
    public  function cadastrarEventos($id_convidado,$id_evento,$id_categoria){
        try{
            $modelEventos = new modelEventos();
            return $modelEventos->cadastrarEventos($id_convidado,$id_evento,$id_categoria);
        } catch(PDOException $e){
            return false;
        }
    }

    public  function excluirEventos($id){
        try{
            $modelEventos = new modelEventos();
            return $modelEventos->excluirEventos($id);
        } catch(PDOException $e){
            return false;
        }
    }
    public  function excluirConvidadoId($id_evento,$id_convidado){
        try{
            $modelEventos = new modelEventos();
            return $modelEventos->excluirConvidadoId($id_evento,$id_convidado);
        } catch(PDOException $e){
            return false;
        }
    }


}

?>