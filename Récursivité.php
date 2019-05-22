<?php

    // Recursivité :


    // Utilisation du intdiv() pour compter les chiffres dans un nombre :
    function numberLength($number) {

        if($number < 10){
            return 1;
        } else {
            $quotient = intdiv($number, 10);
            return 1 + numberLength($quotient);
        }
    
        return numberLength($number);

    }

    var_dump(numberLength(2019));

    
    // Calcul d'une puissance en utilisant la recursivité
    function puissance($number, $exposant) {
        if($exposant > 0) {
            if ($exposant == 1) {
                return $number;
            } else {
                return puissance($number, $exposant - 1) * $number;
            }
        } else {
            return 1;
        }
    }

    var_dump(puissance(10, 3));

?>