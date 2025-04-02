<?php

    $numFat = 7;

    if ($numFat < 0) {
 
        echo "Erro.<br><br>Número menor do que zero.";

    } else {

        if ($numFat == 0) {

            echo "O valor é 1.";

        } else {

            for ($i = ($numFat - 1); $i > 1 ; $i--) {

                $numFat *= $i;
                
    
            }
    
            echo "O valor é: ", $numFat;


        }

    }

?>