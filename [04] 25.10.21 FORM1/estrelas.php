
<?php
	// salvar como estrelas.php

	// Mostrar de 1 a 10
	$estrelas="*"; // acumulador
	
	// parte principal da árvore de natal
	for( $n=1;	$n<=10;	$n++)
	{
		echo  "$estrelas<br>";
		$estrelas = $estrelas ."*";
	}
	
	// caule/tronco da árvore
	for($n=1;$n<=6;$n++)
	{
		echo "**<br>";
	}
?>