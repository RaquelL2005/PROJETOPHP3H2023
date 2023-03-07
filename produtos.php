<?php 

class Produto
{
	var $Codigo;
	var $Descricao;
	var $Preco;
	var $Quantidade;

	function ImprimeEtiqueta(){

		print 'Código:' . $this->Codigo . "<br>";
		print 'Descrição:' . $this->Descricao . "<br>";
		print 'Preço: ' . $this->Preco . "<br>";
	}

	function Desconto(){
		$desc = 0;
		$total = 00.0;
		if ($this->Quantidade >= 3 ) {
			$desc = 10;
			$total = ($this->Preco - ($this->Preco * $desc / 100)) * $this->Quantidade;
			
		} elseif ($this->Quantidade >= 5 ) {
			$desc = 20;
			$total = ($this->Preco - ($this->Preco * $desc / 100)) * $this->Quantidade;
			
		} elseif ($this->Quantidade >= 7 ) {
			$desc = 30;
			$total = ($this->Preco - ($this->Preco * $desc / 100)) * $this->Quantidade;
			
		}

		print 'Valor Total com desconto: ' . $total . "<br>";


	}
	
}



 ?>