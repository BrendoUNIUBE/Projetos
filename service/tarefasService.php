<?php 
namespace service;

use dao\TarefasDAO;

class TarefasService extends TarefasDAO {

    public function buscarTarefaPorId($id) {
        return parent::buscarTarefaPorId($id);
    }

    public function buscarTarefasPorStatus($status) {
        return parent::buscarTarefasPorStatus($status);
    }
}