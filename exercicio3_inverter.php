<?php


print "Digite um número: \n";
$a = fgets(STDIN);

print "Digite um número: \n";
$b = fgets(STDIN);

$temporaria = $a;
$a = $b;
$b = $temporaria;

print "invertendo\n";

print"A = $a";
print"B = $b";


