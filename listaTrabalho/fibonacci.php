<?php

    $numUm = 0;
    $numDois = 1;
    $resultado = 0;
    $num = 17;

    echo $numUm, " ";
    echo $numDois, " ";

    for ($i = 0; $i <= $num; $i++) {

        $resultado = $numUm + $numDois;
        $numUm = $numDois;
        $numDois = $resultado;

        echo $resultado, " ";

    }

?>