<?php
namespace dao;

use bean\Alocacao;
use generic\ConnectionFactory;

class AlocacoesDAO extends ConnectionFactory {

    protected function buscarAlocacaoPorId($id) {
        $this->conectar();
        $sql = "SELECT id, projeto_id, funcionario_id, dataInicio, dataFim FROM alocacoes WHERE id = :id";
        $param = array(
            ":id" => $id
        );
        $resultado = $this->conn->executar($sql, $param);
        
        if (sizeof($resultado) > 0) {
            $alocacao = new Alocacao();
            $alocacao->setId($resultado[0]['id']);
            $alocacao->setProjetoId($resultado[0]['projeto_id']);
            $alocacao->setFuncionarioId($resultado[0]['funcionario_id']);
            $alocacao->setDataInicio($resultado[0]['dataInicio']);
            $alocacao->setDataFim($resultado[0]['dataFim']);
            return $alocacao;
        }
        
        return null;
    }

    protected function buscarAlocacoesPorProjeto($projetoId) {
        $this->conectar();
        $sql = "SELECT id, projeto_id, funcionario_id, dataInicio, dataFim FROM alocacoes WHERE projeto_id = :projetoId";
        $param = array(
            ":projetoId" => $projetoId
        );
        $resultado = $this->conn->executar($sql, $param);
        
        $alocacoes = array();
        foreach ($resultado as $row) {
            $alocacao = new Alocacao();
            $alocacao->setId($row['id']);
            $alocacao->setProjetoId($row['projeto_id']);
            $alocacao->setFuncionarioId($row['funcionario_id']);
            $alocacao->setDataInicio($row['dataInicio']);
            $alocacao->setDataFim($row['dataFim']);
            $alocacoes[] = $alocacao;
        }
        
        return $alocacoes;
    }
}