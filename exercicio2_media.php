<?php
    print "Digite sua 1° Nota: ";
    $N1= fgets(STDIN);

    print "Digite sua 2° Nota: ";
    $N2= fgets(STDIN);

    print "Digite sua 3° Nota: ";
    $N3= fgets(STDIN);

    print "Digite sua 4° Nota: ";
    $N4= fgets(STDIN);

    $soma = $N1+$N2+$N3+$N4;
    $media = $soma/4;
   

    if ($media>=7)  {
        print "\n";
        echo "\nVocẽ foi aprovado\n";
        print "\nA sua média trimestral foi de $media \n\n";
      
        }
        
        else {
        print "\n";
        echo "\nVocê foi reprovado\n";
        print "\nA sua média trimestral foi de $media \n\n";
    
        }
