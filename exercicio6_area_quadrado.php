<?php

    print "\nDigite o comprimento de um lado do quadrado: ";
    $lado_do_quadrado = fgets(STDIN);

    $area_do_quadrado= $lado_do_quadrado*$lado_do_quadrado;
    $dobro_da_area_do_quadrado = $area_do_quadrado* 2;
    
    print "\nO dobro da área do quadrado é: ";
    print $dobro_da_area_do_quadrado;
    print "\n\n";