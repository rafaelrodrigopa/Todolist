<?php

    class TarefaService{
        private $conn;
        private $tarefa;

        public function __construct(Conexao $conn,Tarefa $tarefa)
        {
            $this->conn = $conn->Conectar();
            $this->tarefa = $tarefa;
        }
        public function inserir() {
			$query = 'INSERT INTO tb_tarefas(tarefa,data_cadastro) VALUES(:tarefa,:data_cadastro)';
			$stm = $this->conn->prepare($query);
            $stm->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stm->bindValue(':data_cadastro', $this->tarefa->__get('data_criacao'));
			$stm->execute();
		}
    }

?>