<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENTALOG</title>
    <style>
        body {
          background: #dcddde;
          display: grid;
          place-items: center;
          text-align: center;
          font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<?php
echo "<h2>For an array of elements count the number of occurrences of a given element.</h2>";
function cautare($array, $element) {
    $numar = 0;
    foreach ($array as $valoare) {
        if ($valoare === $element) {
            $numar++;
        }
    }
    return $numar;
}

$array = [1, 2, 3, 4, 2, 2, 5];
$elementulCautat = 2;
$result = cautare($array, $elementulCautat);
echo "elementul $elementulCautat apare de $result ori";
?>
<br>
<?php
print_r($array);


echo "<h2>Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop.</h2>";

function generareArray($length, $minValue, $maxValue) {
    $randomArray = [];
    for ($i = 0; $i < $length; $i++) {
        $randomArray[] = rand($minValue, $maxValue);
    }
    return $randomArray;
}

function search($array, $target) {
    foreach ($array as $valoare) {
        echo "$valoare ";
        if ($valoare === $target) {
            echo "// $target a fost gasit!";
            break;
        }
    }
}

$randomArray = generareArray(10, 1, 10);
$searchValue = 4;
search($randomArray, $searchValue);
?>
<br>
<?php
print_r($randomArray);


echo "<h2>For a given array, reverse the order of the elements.</h2>";

function reverseArray($array) {
    $arrayInversat = array_reverse($array);
    return $arrayInversat;
}

$array = [1, 2, 3, 4, 5];
$arrayInversat = reverseArray($array);
print_r($array);
?>
<br>
<?php
print_r($arrayInversat);


echo "<h2>Verify if a string is a palindrome and return the result.</h2>";
function palindrom($string) {
    return $string === strrev($string);
}

$test1 = "racecar";
$test2 = "pentalog";
echo palindrom($test1) ? " $test1 E palindrom" : "$test1 Nu e palindrom";
?>
<br>
<?php
echo palindrom($test2) ? " $test2 E palindrom" : "$test2 Nu e palindrom";

?>
</body>
</html>