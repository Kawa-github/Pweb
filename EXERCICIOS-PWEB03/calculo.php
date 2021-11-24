<?php

$a = 5;
$b = 12;
$c = 7;
$d = 1;
$e = -9;
$f = 3;
$g = 4;

$valor = ++$a + ++$b - --$c - $d-- + ++$e - $f-- + ++$g;

echo "<br> a = $a <br> b = $b <br> c = $c <br> d = $d <br>e= $e <br> f = $f <br> g = $g";
echo "<br>Valor total : ",$valor;
?>