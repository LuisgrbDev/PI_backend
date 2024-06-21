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


}

?>