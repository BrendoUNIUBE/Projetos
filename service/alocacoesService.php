<?php 
namespace service;

use dao\AlocacoesDAO;

class AlocacoesService extends AlocacoesDAO {

    public function buscarAlocacaoPorId($id) {
        return parent::buscarAlocacaoPorId($id);
    }

    public function buscarAlocacoesPorProjeto($projetoId) {
        return parent::buscarAlocacoesPorProjeto($projetoId);
    }
}