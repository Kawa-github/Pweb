<?php
	// salvar como contas2.php
	$a=0;
	$b=5;
	$c=3;
	$d=9;
	
	// pré ou pós incremento ou decremento
	$conta = ++$a - --$b + $c++ - --$d;
	           
    // 1 - Aplicam-se os operadores de pré-decremento e pré-incremento
	// 2 -Faz-se a conta
	/*
	$conta = $a - $b + $c - $d;
	          1 - 4  + 3  - 8 =
			    - 3  + 3  - 8 =
				     0    - 8 = -8
	*/		  
		
	// 3 - Aplicam-se os operadores de pós-incremento e pós-decremento
	
	echo "a=$a, b=$b, c=$c, d=$d, conta=$conta";
?>