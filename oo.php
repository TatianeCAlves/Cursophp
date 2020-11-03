<?php
require "Pessoa.php";

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Diego";
$uma_pessoa->site = "www.diego.com";
//var_dump($uma_pessoa);

$uma_pessoa->falarNome();
$uma_pessoa->falarSite();