<?php
namespace dao;

use bean\Funcionario;
use generic\ConnectionFactory;

class FuncionariosDAO extends ConnectionFactory {

    protected function buscarFuncionarioPorId($id) {
        $this->conectar();
        $sql = "SELECT codFunc, nome, numero, cargo, salario FROM funcionarios WHERE codFunc = :codFunc";
        $param = array(
            ":codFunc" => $codFunc
        );
        $resultado = $this->conn->executar($sql, $param);
        
        if (sizeof($resultado) > 0) {
            $funcionario = new Funcionario();
            $funcionario->setcodFunc($resultado[0]['codFunc']);
            $funcionario->setNome($resultado[0]['nome']);
            $funcionario->setNumero($resultado[0]['numero']);
            $funcionario->setCargo($resultado[0]['cargo']);
            $funcionario->setSalario($resultado[0]['salario']);
            return $funcionario;
        }
        
        return null;
    }

    protected function buscarFuncionarioPorCargo($cargo) {
        $this->conectar();
        $sql = "SELECT codFunc, nome, numero, cargo, salario FROM funcionarios WHERE cargo = :cargo";
        $param = array(
            ":cargo" => $cargo
        );
        $resultado = $this->conn->executar($sql, $param);
        
        $funcionarios = array();
        foreach ($resultado as $row) {
            $funcionario = new Funcionario();
            $funcionario->setcodFunc($row['codFunc']);
            $funcionario->setNome($row['nome']);
            $funcionario->setNumero($row['numero']);
            $funcionario->setCargo($row['cargo']);
            $funcionario->setSalario($row['salario']);
            $funcionarios[] = $funcionario;
        }
        
        return $funcionarios;
    }
}