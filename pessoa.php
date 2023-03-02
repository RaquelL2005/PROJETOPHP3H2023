<?php 

class Pessoa{
var $codigo;
var $nome;
var $idade;
var $nascimento;
var $altura;
var $escolaridade;
var $salario;


//aumenta a altura em centímentros

fuction crescer($centimetros)
{
 

 if ($centimetros > 0) {
 	$this ->altura += $centimetros;
 }

}
//alterar a escolaridade para titulação
fuction formar($titulacao){
$this->escolaridade = $titulacao;

}
//aumenta a idade em anos

fuction envelhercer($anos){
if ($anos > 0) {
	$this ->idade += $anos;
}

}
}

 




 ?>