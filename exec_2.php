<?php
//classe 
class Pessoa{
    //objeto
private $nome;

//a função esta aberta em modo publico, em set e inserido o conjuntos de ações que serão executadas.
public function setNome($novoNome){
    //a variavel nome passa seu valor para novoNome
    $this->nome = $novoNome;
    }
    public function getNome(){
        //get pega a informação de set e pelo return devolve quando solicitado abaixo por get em echo.
        return $this->nome;
    }
}

//a classe pessoa foi instanciada e gerou um objeto
$uma_pessoa = new Pessoa;
//este objeto pega o seu valor e insere em outro objeto
$uma_pessoa->setNome("Diego");
//echo mostra na tela o  resultado
//get pega o que está em set e enia para ser mostrado por echo
echo $uma_pessoa->getNome();