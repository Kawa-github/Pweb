<!doctype html>
<html lang="pt-br">
	<head>
		<title>Minha 2a página PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		date_default_timezone_set('America/Sao_Paulo');
		echo date("d-m-Y");
		echo "<hr>";
		$n= time();
		echo $n . "<br>";
		
		if ($n % 2==0){
			echo "É par";
		}
		else{
			echo "É ímpar";
		}
		?>
	</body>
</html>