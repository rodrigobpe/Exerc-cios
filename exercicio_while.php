<?php

    $nota=0;
    print "Digite o número desejado: ";
    $nota= fgets (STDIN);
    print "\n";

     while ($nota<0 or $nota>10) {

            if ($nota< 0 ){
                print "---ATTENCION--- ";
                print "\n\n";
                print "Número inválido, esta nota é menor do que o sistema permite";
                print "\n\n";
                print "por favor tente novamente";
                print "\n\n";
                print "Digite o número desejado: ";
                $nota= fgets (STDIN);

               }

            else {print "---ATTENCION---";
                print "\n\n";
                print "Número inválido, esta nota é Maior do que o sistema permite";
                print "\n\n";
                print "por favor tente novamente!!";
                print "\n\n";
                print "Digite o número desejado: ";
                $nota= fgets (STDIN);
            }
            
            
    }

    print " Nota válida";
    print "\n\n";

