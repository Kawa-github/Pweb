<?php
	// salvar como contas3.php
	$v=7;
	$n=5;
	$x=0;
	$d=6;

	$conta = $v-- - --$d + $n++ + --$x;
	/*
	$conta = $v - $d + $n + $x;
			  7 - 5  + 5 -1
				2    + 5 -1
					  7 - 1 = 6
	*/
	echo "v=$v, n=$n, x=$x, d=$d, conta=$conta";
?>