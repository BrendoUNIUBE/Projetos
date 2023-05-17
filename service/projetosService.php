<?php 
namespace service;

use dao\ProjetosDAO;

class ProjetosService extends ProjetosDAO {

    public function buscarProjetoPorId($id) {
        return parent::buscarProjetoPorId($id);
    }

    public function buscarProjetosPorData($data) {
        return parent::buscarProjetosPorData($data);
    }
}
