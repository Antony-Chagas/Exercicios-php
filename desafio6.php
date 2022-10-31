<?php

print_r(troco(35));


function troco($valor){
    $r = [0,0,0,0,0,];
    $notas =[50,20,10,5,2];

    for ($i=0; $i<count ($r); $i++) { 
        $r[$i] = floor ($valor / $notas [$i]);
        $valor -= ($r[$i]*$notas [$i]);
    }

    return $r;
}



