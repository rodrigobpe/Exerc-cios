<?php
    
    print "Quantos cigarros você fuma por dia: ";
    $cigarros_por_dia = fgets(STDIN);

    print "Há quantos anos você fuma: ";
    $anos_fumados = fgets(STDIN);

    $cigarros_fumados = $cigarros_por_dia*365*$anos_fumados;
    $minutos_perdidos = $cigarros_fumados*11;
    $horas_perdidas = $minutos_perdidos/60;
    $dias_perdidos = round($horas_perdidas/24);

    print "Você perdeu $dias_perdidos dias de vida!";


  






    