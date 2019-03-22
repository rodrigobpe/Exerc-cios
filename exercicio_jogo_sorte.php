<?php

    $Numero_sort= rand (0,10);

    print "Digite um número de 0-10";
    print "\n";
    $Numero= fgets (STDIN);

    $contador=0;

    while ($Numero_sort<>$Numero){
        $contador++;
        print "QUE PENINHA, VC ERROU.. \n";
        print "Vc já errou $contador vez/vezes\n";
        print "\nTente novamente\n";

        if ($Numero_sort>$Numero){
            print "Seu número digitado foi maior que o sorteado\n";

        }

        else{
            print "Seu Número digitado foi menor que o sorteado\n";
        }

        print "Digite um número de 0-10 novamente\n";
        $Numero= fgets (STDIN);
    }

    print "Vocẽ ganhou !!!\n";
    print "PARABÉNS!!!\n";
 