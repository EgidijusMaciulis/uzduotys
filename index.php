<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">

    </head>
    <body>

<?php


$a =
    [
        'Jonas',
        'Petras',
        'Antanas',
        'Povilas'
    ];

$pairs = [];

foreach($a as $k => $v) {
    foreach(array_slice($a, $k + 1) as $k2 => $v2) {
        $pairs[] = [$v, $v2];
    }
}
var_dump($pairs);



$array = [
    [1, 3, 4],
    [2, 5],
    [2 => 3, 5 => 8],
    [1, 1, 5 => 1]
];

$sum = $array;

foreach($array[0] as $m => $n)
    $sum[$m] = array_sum(array_column($array, $m));

echo "Stulpeliu sumos <br>";


print_r($sum);




?>







    </body>
</html>
