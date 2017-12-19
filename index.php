<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">

    </head>
    <body>

<?php


$a = [
    'Jonas',
    'Petras',
    'Antanas',
    'Povilas'];

for ($i = 0; $i < count($a); $i++) {
    for ($j = $i + 1; $j < count($a); $j++) {
        echo $a[$i] . "-" . $a[$j] . "<br>";
    }
}
echo "<br>";

for ($i = 0; $i < count($a); $i++) {
    for ($j = 0; $j < count($a); $j++) {
        if ($i == $j) {
            continue;
        } else {
            echo $a[$i] . "-" . $a[$j] . "<br>";
        }
    }
}

echo "<br>";


$b = [
    [1, 3, 4],
    [2, 5],
    [2 => 3, 5 => 8],
    [1, 1, 5 => 1]
];

$suma = 0;
$maxSuma = [];
$k = 1;
for ($j = 0; $j <= $k; $j++) {

    for ($i = 0; $i < count($b); $i++) {
        if (isset($b[$i][$j])) {
            $suma += $b[$i][$j];

        }

        end($b[$i]);
        $k = key($b[$i]);

    }
    array_push($maxSuma, $suma);

    $suma = 0;
}
print_r($maxSuma);
function didziausias()
{
    $max = 0;
    global $maxSuma;
    foreach ($maxSuma as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    echo $max;

}

echo "<br> Didziausia stulpelio suma: ";
didziausias();



?>







    </body>
</html>
