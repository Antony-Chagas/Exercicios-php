<?php

$peso = 20;
$autura = 1.80;
$imc = $peso / ($autura * $autura);

if ($imc < 18.5)
      {echo "Abaixo";}
    elseif ($imc < 29.4)
      {echo "Dentro";}
    elseif ($imc > 24.9)
      {echo "Acima"; }



