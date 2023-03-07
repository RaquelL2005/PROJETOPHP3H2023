<?php 

include_once 'produtos.php';

$valor = new Produto();
$valor1 = new Produto();

$valor ->Codigo = 4055;
$valor ->Descricao = "Boné da Gucci";
$valor ->Preco = 1000.00;
$valor ->Quantidade = 3;




$valor1 ->Codigo = 4065;
$valor1 ->Descricao = "Camiseta da Hello Kitty";
$valor1 ->Preco = 300.00;
$valor1 ->Quantidade = 5;

//echo $valor->Codigo ." - ". $valor->Descricao;
$valor ->ImprimeEtiqueta();
$valor1 ->ImprimeEtiqueta();
$valor ->Desconto();
$valor1 ->Desconto();

 ?>