<?php

$contador = 0;

while ($contador <= 10) {
    
    //Incrementando

    $contador = $contador + 1;

    if ($contador % 2 != 0) {
        continue; 

        //caso for impar, pare a execulção 
    }

    echo $contador . "<br>";

    if ($contador == 3) {
        break; 
        
        //parar a execulção
    }

}

$numero = 8;

$contador = 1;

while ($contador <= 10) {

    echo  $numero . "x" . $contador . "=" . $contador * $numero . "<br>";
    
    $contador++;
    
}