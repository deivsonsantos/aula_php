<?php

$lista = ["Deivson","Santos", 16];
$variavel = "nome";


echo $lista[0];

// imprimindo mais de um valor com Foreach

foreach ($lista as $valor) {

	if ($valor == 16){

		echo $valor;
	}
	
}

?>