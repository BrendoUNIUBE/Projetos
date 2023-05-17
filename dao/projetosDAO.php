<?php
namespace dao;

use bean\Projeto;
use generic\ConnectionFactory;

class ProjetosDAO extends ConnectionFactory {

    protected function buscarProjetoPorId($id) {
        $this->conectar();
        $sql = "SELECT idProjeto, nome, descricao, dataInicio, dataFim FROM projetos WHERE idProjeto = :idProjeto";
        $param = array(
            ":idProjeto" => $idProjeto
        );
        $resultado = $this->conn->executar($sql, $param);
        
        if (sizeof($resultado) > 0) {
            $projeto = new Projeto();
            $projeto->setidProjeto($resultado[0]['idProjeto']);
            $projeto->setNome($resultado[0]['nome']);
            $projeto->setDescricao($resultado[0]['descricao']);
            $projeto->setDataInicio($resultado[0]['dataInicio']);
            $projeto->setDataFim($resultado[0]['dataFim']);
            return $projeto;
        }
        
        return null;
    }

    protected function buscarProjetosPorData($data) {
        $this->conectar();
        $sql = "SELECT idProjeto, nome, descricao, dataInicio, dataFim FROM projetos WHERE dataInicio = :data";
        $param = array(
            ":data" => $data
        );
        $resultado = $this->conn->executar($sql, $param);
        
        $projetos = array();
        foreach ($resultado as $row) {
            $projeto = new Projeto();
            $projeto->setidProjeto($row['id']);
            $projeto->setNome($row['nome']);
            $projeto->setDescricao($row['descricao']);
            $projeto->setDataInicio($row['dataInicio']);
            $projeto->setDataFim($row['dataFim']);
            $projetos[] = $projeto;
        }
        
        return $projetos;
    }
}