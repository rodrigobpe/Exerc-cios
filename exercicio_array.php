
<?php


print "-----TOP FIVE ANIMES DO WORLD----- \n\n\n";
$herois= ['Nanatsu No Taizai','Sword Art Online','Naruto','One Piece','Dragon Ball','The Promised Nerverland','Shield Heroe'];


for ($i=0; $i < count($herois); $i++)  { 
    print ($i+1)."º lugar:  " . $herois[$i] . "\n\n";
    sleep(1);
}