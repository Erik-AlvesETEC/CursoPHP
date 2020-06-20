<?php

    class Usuario{
        private $id;
        private $email;
        private $senha;
        private $nome;

        public $pdo;

        public function __construct($i)
        {
            if(!empty($i)){
                try {
                    $this->pdo = new PDO('mysql:dbname=usuarios;host=localhost', "root", "root");
                }catch(PDOException $e) {
                    echo "FALHOU: ".$e->getMessage();
                }
            }
        }

        public function getId($id){
            return $this->$id;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        public function getEmail($email){
            return $this->email;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getNome($nome){
            return $this->$nome;
        }
    }

?>