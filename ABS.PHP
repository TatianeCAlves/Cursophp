<?php

class Bebidas{
    public $sabor;
    public $tamanho;
    public $gelo;

    public function takeOut(){
        echo "Delivery";
    }
    public function eatIn(){
        echo "Restaurante";
    }
}


class Suco extends Bebidas{
    
    
}

class Refrigerante extends Bebidas{
    

}

$suco = new Bebidas();
$suco->sabor = "uva";
$suco->tamanho = "300ml";
$suco->gelo = "12 pedras de gelo";
$suco->takeOut();
echo "<br><pre>";
var_dump($suco);



$refrigerante = new Bebidas();
$refrigerante->sabor = "Coca-Cola";
$refrigerante->tamanho = "700ml";
$refrigerante->gelo = "5 pedras de gelo";
$suco->eatIn();
echo "<br><pre>";
var_dump($refrigerante);


?>