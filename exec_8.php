<?php

class Pessoa{
    protected $nome;
    const ESPECIE = "Humana";
    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }
    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }
    public function getNome()
    {
       return $this->nome;
    }
}


class Programador extends Pessoa{
    public $linguagem;

    public function __construct($tmpNome,$tmpLinguagem)
    {
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLinguagem;
        
       echo "<br>Objeto ".__CLASS__." foi instanciada.</br>";
    }
}

$programador = new Programador("Diego", "PHP");
echo $programador->getnome();

#constantes
echo $programador::ESPECIE;


?>