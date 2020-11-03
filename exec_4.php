<?php
// estrutura do construct

class Pessoa{
//(2 variaveis) duas propriedades pertencentes a uma pessoa.
    public $idade = 0;
    public $nome;

//construtor da classe pessoa
    function __construct()
    {
//echo : impressão de texto.
        echo "teste\n";
        var_dump($this);
    }
}

//criação de uma instancia da classe pessoa sem a atribuição a uma variavel
//No exemplo abaixo o php ao ver duas instancias considera sempre a ultima instancia e destroi a anterior porque não tem variavel atribuida ao mesmo
//new Pessoa();
//new Pessoa();
 
$p1 = new Pessoa();
$p2 = new Pessoa();
//no caso acima $p1 / $p2 são variaveis que dão valor de atribuição as instancias new Pessoa. 