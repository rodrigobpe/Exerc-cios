<?php

print "Digite o numero do raio do circulo: ";
$raio_do_circulo= fgets(STDIN);

$potencia_do_raio= $raio_do_circulo*$raio_do_circulo;
$valor_de_pi=3.14;
$multiplicaçao_pi_raio= $valor_de_pi*$potencia_do_raio;

print"\n";

print  $multiplicaçao_pi_raio ;

print"\n";
print"\n";