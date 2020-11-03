<?php


class Pessoa{
    public $nome;
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

class Programador extends Pessoa{
    public $linguagem;

    public function __construct($tmpNome,$tmpLinguagem)
    {
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLinguagem;
    }

}


//$uma_pessoa = new Pessoa();
$programador = new Programador("Diego","PHP");
echo $programador->getNome();

?>