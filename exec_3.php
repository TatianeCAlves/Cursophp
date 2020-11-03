<?php
// construct

class Pessoa{
    private $nome;

    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
        
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
        }
        public function getNome(){
            return $this->nome;
        }
    }

    $uma_pessoa = new Pessoa("Diego");
    echo $uma_pessoa->getNome();