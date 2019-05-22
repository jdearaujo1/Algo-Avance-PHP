<?php

function create_array($num_elements) {
    $random_number_array = range(1, $num_elements);
    shuffle($random_number_array);

    return $random_number_array;
}

$myGeneratedArray = create_array(1000);

function sortArray($myGeneratedArray) {
    sort($myGeneratedArray);
    return $myGeneratedArray;
}

function triParEchange($myGeneratedArray)
{

    for ($i = 0; $i < count($myGeneratedArray) - 1; $i++) {
        for ($j = $i + 1; $j < count($myGeneratedArray); $j++) {
            if ($myGeneratedArray[$i] > $myGeneratedArray[$j]) {
                $temp = $myGeneratedArray[$i];
                $myGeneratedArray[$i] = $myGeneratedArray[$j];
                $myGeneratedArray[$j] = $temp;
            }
        }
    }

    return $myGeneratedArray;
}

function triBulles($myGeneratedArray) {
    do {
        $modif = false;
        for ($i = 0; $i < count($myGeneratedArray) - 1; $i++) {
            if ($myGeneratedArray[$i] > $myGeneratedArray[$i + 1]) {
                $temp = $myGeneratedArray[$i];
                $myGeneratedArray[$i] = $myGeneratedArray[$i + 1];
                $myGeneratedArray[$i + 1] = $temp;
                $modif = true;
            }
        }
    } while ($modif);
    return $myGeneratedArray;
}

function triBullesAvance($myGeneratedArray) {
    $k = 1;
    do {
        $modif = false;
        for ($i = 0; $i < count($myGeneratedArray) - $k; $i++) {
            if ($myGeneratedArray[$i] > $myGeneratedArray[$i + 1]) {
                $temp = $myGeneratedArray[$i];
                $myGeneratedArray[$i] = $myGeneratedArray[$i + 1];
                $myGeneratedArray[$i + 1] = $temp;
                $modif = true;
            }
        }
        $k++;
    } while ($modif);
    return $myGeneratedArray;
}

function triInsertion($myGeneratedArray) {
    for ($i = 0; $i < count($myGeneratedArray); $i++) {
        $myIndex = $myGeneratedArray[$i];
        $temp = $i - 1;
        while ($temp >= 0 && $myGeneratedArray[$temp] > $myIndex) {
            $myGeneratedArray[$temp + 1] = $myGeneratedArray[$temp];
            $temp--;
        }
        $myGeneratedArray[$temp + 1] = $myIndex;
    }
    return $myGeneratedArray;
}

// TODO: A simplifier dans une function.

// Calcul temps :

//Microtime tri sort()

$avant = microtime(true);
sortArray($myGeneratedArray);
$apres = microtime(true);
echo "Tri sort() : " . round(($apres - $avant) * 1000) . " ms\n\n";

//Microtime tri échange

$avant = microtime(true);
triParEchange($myGeneratedArray);
$apres = microtime(true);
echo "Tri par échange amélioré : " . round(($apres - $avant) * 1000) . " ms\n\n";

//Microtime tri à bulles

$avant = microtime(true);
triBulles($myGeneratedArray);
$apres = microtime(true);
echo "Tri à bulles : " . round(($apres - $avant) * 1000) . " ms\n\n";

//Microtime tri à bulles amélioré

$avant = microtime(true);
triBullesAvance($myGeneratedArray);
$apres = microtime(true);
echo "Tri à bulles amélioré : " . round(($apres - $avant) * 1000) . " ms\n\n";

//Microtime tri par insertion

$avant = microtime(true);
triInsertion($myGeneratedArray);
$apres = microtime(true);
echo "Tri par insertion : " . round(($apres - $avant) * 1000) . " ms\n\n";

?>