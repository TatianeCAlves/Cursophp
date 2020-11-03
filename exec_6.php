<?php
/* Heranças é um recurso que permite que classes compartilhem atributos e metodos,
 afim de reaproveitar códigos ou comportamentos generalizados*/

class Veiculo{
    //atributos / caracteristicas
        public $cor;
        public $modelo;
        public $ano;
    
    //método / ações
        public function Andar(){
            echo "Andou";
        }
        public function Parar(){
            echo "Parou";
    }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando\n";
    }
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando Grau\n";
    }
    
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
//ao inserir o var_dump com o objeto carro como parametro ele mostra todos os atibutos do $carro
var_dump($carro);


$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);

?>