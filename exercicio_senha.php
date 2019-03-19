<?php

    print "Digite um Nome de usuário:";
    print "\n";
    $Nome_Usuario= fgets (STDIN);

    print "Digite uma senha: ";
    print "\n";
    $Senha= fgets (STDIN);

    while ( $Nome_Usuario=$Senha or $Nome_Usuario<>$Senha){

        if ($Nome_Usuario=$Senha){

            print "----ATENÇÂO----";
            print "\n";
            print "Nome do usuário é igual a senha";
            print "\n";
            print "tente novamente";
            print "\n";
            print "Digite um Nome de usuário:";
            print "\n";
            $Nome_Usuario= fgets (STDIN);

            print "Digite uma senha: ";
            print "\n";
            $Senha= fgets (STDIN);
            
        }

        else {

            print "Operaçao concluida";
            print "\n";
            print "Cadastro feito !!";
            
        }
    }