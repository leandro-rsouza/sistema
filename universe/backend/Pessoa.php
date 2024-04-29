<?php
namespace universe\backend;

    class Pessoa{
        private $id;
        private $nome;
        private $contato;
        private $email;
        private $senha;
        private $vitorias;
        private $derrotas;
        private $empates;
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function setNome($n){
            $this->nome = $n;
        }

        public function getContato(){
            return $this->contato;
        }

        public function setContato($c){
            $this->contato = $c;            
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($e){
            $this->email = $e;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($s){
            $this->senha = $s;
        }

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
            return $this;
        }

        public function getDerrotas(){
            return $this->derrotas;
        }

        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
            return $this;
        }

        public function getEmpates(){
            return $this->empates;
        }

        public function setEmpates($empates){
            $this->empates = $empates;
            return $this;
        }
    }
?>