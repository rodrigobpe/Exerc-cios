<?php   
    //valores
    
    print "Digite o Valor de A: ";
    $a= fgets(STDIN);
    print "Digite o Valor de B: ";
    $b= fgets(STDIN);
    print "Digite o Valor de C: ";
    $c= fgets(STDIN);

    //delta
    
    $delta= pow($b,2)-4*$a*$c;
    print "Δ = $delta \n";
    
    //bhaskara

    $x1= (int)(-$b+ sqrt($delta)) /(2*$a);
    print "x1 = $x1 \n";
    $x2= (int)(-$b- sqrt($delta))/(2*$a);
    print "x2 = $x2 \n";
