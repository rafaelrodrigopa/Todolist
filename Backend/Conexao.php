<?php

    class Conexao{
        private $host = 'localhost:3308';
        private $dbname = 'todolist';
        private $user = 'root';
        private $senha = '';

        public function Conectar(){
            try 
            {
                $conn = new PDO(
					"mysql:host=$this->host;dbname=$this->dbname",
					"$this->user",
					"$this->senha"
                );
                
                return $conn;
            } 
            catch (PDOException $e) {
                echo '<p>'.$e->getMessage().'</p>';
                return null;
            }
        }
    }

?>