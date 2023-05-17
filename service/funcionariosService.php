<?php 
namespace service;

use dao\FuncionariosDAO;

class FuncionariosService extends FuncionariosDAO {

    public function buscarFuncionarioPorId($id) {
        return parent::buscarFuncionarioPorId($id);
    }

    public function buscarFuncionariosPorCargo($cargo) {
        return parent::buscarFuncionariosPorCargo($cargo);
    }
}