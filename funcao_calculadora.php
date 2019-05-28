<?php

function calculaArea($r)
{
if ($r <= 0) {
return 0;
}
else {
$area = pi() * $r * $r;
return $area;
}
}

$raio = 5.2;
$aArea = calculaArea($raio);
echo "A Área é: " . $aArea . "\n";