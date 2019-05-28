<?php

function assar ($graus)
{
    if ($graus > 500) {
        $msg = "Eu não sou um reator nuclear! \n";
    }  else {
        if ($graus < 100) {
            $msg = "Eu não sou refrigerador! \n";
        } else {
            $msg = "Esta temperatura está boa pra mim. \n";
        }
    }
    return $msg;
}

$status = assar (350);
print ($status);