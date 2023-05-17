<?php
namespace dao;

use bean\Tarefa;
use generic\ConnectionFactory;

class TarefasDAO extends ConnectionFactory {

    protected function buscarTarefaPorId($id) {
        $this->conectar();
        $sql = "SELECT id, descricao, status FROM tarefas WHERE id = :id";
        $param = array(
            ":id" => $id
        );
        $resultado = $this->conn->executar($sql, $param);
        
        if (sizeof($resultado) > 0) {
            $tarefa = new Tarefa();
            $tarefa->setId($resultado[0]['id']);
            $tarefa->setDescricao($resultado[0]['descricao']);
            $tarefa->setStatus($resultado[0]['status']);
            return $tarefa;
        }
        
        return null;
    }

    protected function buscarTarefasPorStatus($status) {
        $this->conectar();
        $sql = "SELECT id, descricao, status FROM tarefas WHERE status = :status";
        $param = array(
            ":status" => $status
        );
        $resultado = $this->conn->executar($sql, $param);
        
        $tarefas = array();
        foreach ($resultado as $row) {
            $tarefa = new Tarefa();
            $tarefa->setId($row['id']);
            $tarefa->setDescricao($row['descricao']);
            $tarefa->setStatus($row['status']);
            $tarefas[] = $tarefa;
        }
        
        return $tarefas;
    }
}