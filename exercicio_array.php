<?php

print "-----TOP FIVE ANIMES DO WORLD----- \n\n\n";

$herois= ['Nanatsu No Taizai','Sword Art Online','Naruto','One Piece','Dragon Ball'];

for ($i=0; $i < 5; $i++)  { 

    print ($i+1)."º lugar: \n" . $herois[$i] . "\n\n";
    sleep(1);
}

