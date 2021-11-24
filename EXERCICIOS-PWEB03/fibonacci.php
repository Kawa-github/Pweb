<?php
$v1 = 0;
$v2 = 1;

do{
    $resultado = $v1 + $v2;
    echo "<br>$v1 + $v2 = $resultado";
    $v1 = $v2;
    $v2 = $resultado;
}while($resultado < 233);
