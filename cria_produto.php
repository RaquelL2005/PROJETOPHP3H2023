<?php 

include_once 'produtos.php';

$valor = new Produto();

$valor ->Codigo = 4055;
$valor ->Descricao = "Boné da Gucci";

echo $valor->Codigo ." - ". $valor->Descricao;



 ?>