<?php

    $numUm = 1000;
    $numDois = 1000;
    
    for ($i = 2; $i < 50; $i++) {

       $recebeNumUm = ($numUm - 3); 
       $numDois += $recebeNumUm/$i;
       $recebeNumUm = $numUm;

    }

    echo $numDois;

?>