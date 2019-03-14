<?php

print "Tamanho da área a ser pintada(m²): ";
$Area_a_ser_pintada = fgets(STDIN);

//18L = 108m²
//3,6L = 21,6m²

//Folga

    $Area_com_folga = $Area_a_ser_pintada+(($Area_a_ser_pintada*10)/100);

//Apenas latas de 18L

    $Quantidade_lata = ceil($Area_com_folga/108);
    $Preco_lata = $Quantidade_lata*80;

print "Você precisará de $Quantidade_lata lata(s) de 18L. \n";
print "Comprar as latas custará um total de " .'R$' ."$Preco_lata. \n";
print "\n";
print "ou \n";
print "\n";

//Apenas galões de 3,6L

    $Quantidade_galao = ceil($Area_com_folga/21.6);
    $Preco_galao = $Quantidade_galao*25;

print "Você precisará de $Quantidade_galao galão(ões) de 3,6L. \n";
print "Comprar os galões custará um total de " .'R$' ."$Preco_galao. \n";
print "\n";
print "ou \n";
print "\n";

//Latas de 18L e galões de 3,6L misturados

    $Quantidade_galao2 = $Quantidade_galao;
    $Quantidade_lata2 = 0;

//1 lata = 5 galões

if ($Quantidade_galao2 >= 5) {

    $Quantidade_lata2 = ceil($Quantidade_galao2/5);
    $Quantidade_galao2 = ceil($Quantidade_galao2%5);

}

    $Total_a_pagar = ($Quantidade_galao2*25)+($Quantidade_lata2*80);

print "Você precisará de $Quantidade_galao2 galão(ões) e $Quantidade_lata2 lata(s) de tinta. \n";
print "O total a pagar será de " .'R$' ."$Total_a_pagar";