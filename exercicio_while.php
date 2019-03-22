<?php
    print "Informe um Nome de usuário:";
    print "\n";
    $Nome_Usuario= fgets (STDIN);
    print "Informe uma senha: ";
    print "\n";
    $Senha= fgets (STDIN);

    print "Digite um Nome de usuário:";
    print "\n";
    $Login_Usuario= fgets (STDIN);
    print "Digite uma senha: ";
    print "\n";
    $Login_Senha= fgets (STDIN);

    while ( $Senha<>$Login_Senha or $Nome_Usuario<>$Login_Usuario){
        
            if ($Login_Usuario<>$Nome_Usuario){
                print "----ATENÇÂO----";
                print "\n";
                print "Nome do usuário Esta incorreto";
                print "\n";
                print "Por favor,Tente novamente";
                print "\n";
                print "Digite o Nome de usuário:";
                print "\n";
                $Nome_Usuario= fgets (STDIN);
                print "\n";
        
            
            }

            else{
                print "----ATENÇÂO----";
                print "\n";
                print "Sua senha está incorreta";
                print "\n";
                print "Por favor,tente novamente";
                print "\n";
                print "Digite uma senha: ";
                print "\n";
                $Senha= fgets (STDIN);
                
                }
    }
        print "\n";
        print "Login efetuado com sucesso";
        print "\n";
    
        
            
     


  