<?php
	// salvar como contas4.php
	$a=12;
	$b=7;
	$c=514;
	$d=-99;
	$e=51;
	$f=70;
	
	$valor = $a-- - --$b + ++$c + $d++ - --$e + $f;
	
	/* 2) conta
		$valor =   $a - $b + $c + $d  - $e + $f;
					12-  6 + 515+ -99 - 50 + 70 =
					   6   + 515 - 99 - 50 + 70 =
					       521 - 99 - 50 + 70 =
						      422   - 50 + 70 =
							      372    + 70 =   442
	*/
	
	echo "a=$a, b=$b, c=$c, d=$d, e=$e, f=$f, valor=$valor";
?>

