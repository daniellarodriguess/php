<?php

    $numUm = 0;
    $numDois = 100;

    if ($numUm > $numDois) {

        for ($i = $numUm; $i >= $numDois; $i--) {

            if ($i % 2 == 0) {

                echo $i, "<br><br>";

            }


        }

    } else {

        for ($i = $numDois; $i >= $numUm; $i--) {

            if ($i % 2 == 0) {

                echo $i, "<br><br>";

            }


        }

    }









?>