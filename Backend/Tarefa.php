<?php

    class Tarefa{
        private $id;
        private $data_criacao;
        private $tarefa;
        private $id_status;

        public function __get($atributo){
            return $this->$atributo;
        }
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }
    
?>