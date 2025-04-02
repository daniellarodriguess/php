<?php

    $numBase = 1000;

    for ($i = 0; $i < 1000; $i++) {

        if ($i % 2 == 0) {

            $numBase += $i;

        } 

    }

    echo "O resultado de todos os números pares até 1000 é: ", $numBase;


?>