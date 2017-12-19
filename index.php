<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

    </head>
    <body>

<?php


//$sum = 0;
//$x = 1;
//
//while($x <= 100) {
//$sum += $x;
//    $x++;
//}
//
//echo $sum;
//
//function skyrius() {
//
//    echo '<hr>';
//    echo '<h1>SKYRIUS</h1>';
//    echo '<br>';
//}
//
//skyrius();
//skyrius();
//
//function faktorialas($a) {
//    if ($a == 1) {
//        return $a;
//    } else {
//        return $a * faktorialas($a - 1);
//    }
//}
//
//echo '3!='.faktorialas(3).'<br>';
//echo '10!='.faktorialas(10).'<br>';

//// funkcijos kuria spauzdina pasisveikinima
///**
// * @param string $name
// * @param string $lastename
// */
//
//function welcome($name = 'Egidijus', $lastename = 'Maciulis') {
//    echo 'Labas!'.$name.' '.$lastename;
//}
//
//welcome('Egidijus', 'Maciulis');
//
///**
// * @param $array
// * @return float|int
// *
// */
//function arrayAverage($array)
//{
//    $sum = 0;
//    for ($i = 0; $i < count($array); $i++) {
//        $sum += $array[$i];
//    }
//    $average = $sum / count($array);
//
//    return $average;
//}
//
//$array = [1, 2, 4];
//
//echo arrayAverage($array).'<br>';
//
//$array = [
//        [
//            'Egidijus',
//            'Maciulis',
//            'maciulis.egidijus@gmail.com',
//        ],
//        [
//            'Egidijus2',
//            'Maciulis2',
//            'maciulis.egidijus@gmail.com2',
//        ],
//        [
//            'Egidijus3',
//            'Maciulis3',
//            'maciulis.egidijus@gmail.com3',
//        ]
//];
//
//
//function peopleInfo(array $array)
//{
//    for ($i = 0; $i <count($array); $i++) {
//        echo '<tr>';
//        for ($j = 0; $j < count($array[$i]); $j++) {
//            echo '<td>' . $array[$i][$j] . '</td>';
//
//        }
//    }echo '</tr>';
//}
//
///**
// * @param $param
// * checks if parameter is emty
// */
//
//function isEmty($param)
//{
//    if (!$param) {
//        return true;
//    }
//    return false;
//}
//
//$a = null;
//echo isEmty($a)
//
//
//$people =
//[
//        [
//            'John',
//            'Wayne'
//        ],
//        [
//            'Peter',
//            'Simmons'
//        ]
//];
//
//function welcomePeople(array $array)
//{
//
//    for ($i = 0; $i <count($array); $i++) {
//        if ($array[i][0] && isset($array[$i][1])) {
//            welcome($array[$i][0] . $array[$i][1];
//
//        }
//    }
//}
//
////welcomePeople($people);
//
//$vector1 = [5, 6, 10, 15];
//$vector2 = [8, 5, 3, 25];
//
//function skalSandauga (array $array1, array $array2)
//{
//    $sum = 0;
//    for ($i = 0; $i < count($array1); $i++) {
//        $sum += $array1[$i] * $array2[$i];
//    }
//
//    return $sum;
//}
//
//
//
////echo skalSandauga($vector1, $vector2);
//
//
////array_push($vector1, 5); // pridedam elementa i masyvo gala
//
//var_dump($vector1);
//
////$vector1[] = 10;
//
////array_shift($vector1, 10);
//
//echo "<br>";
//
//array_splice($vector1,2, 0, 5); // prideti i bet kuria pozicija
//
//var_dump($vector1);

//
//$array1 = [
//        [
//                'Jonas',
//                'Jonaitis',
//                '39412121212'
//        ]
//];
//$array2 = [
//        [
//                'Petras',
//                'JPetraitis',
//                '39412121212'
//        ]
//];
//
//var_dump($array1);
//
//echo "<br>";
//
////array_push($array1, $array2[0]); // Pridejom
//
////$array1[] = $array2;
//array_splice($array1, 1 , 2, $array2);
//
//echo "<br>";
//
//var_dump($array1);
//
//echo "<br>";
//
//unset($array1[1]);
//
//var_dump($array1);
//
//echo "<br>";
//
//array_unshift($array1, $array2[0]);
//
//var_dump($array1);
//
//$a = [
//        10,
//        20,
//        30
//];
//
//$suma = 0;
//
//foreach ($a as $value) {
//    $suma += $value;
//}
//
//var_dump($suma);
//
//$a = [
//        '49001010123' => [
//        'vardas' => 'Jonas',
//        'pavarde' => 'Jonaitis',
//        'gdata' => '1990-01-01'
//        ],
//
//        '35227292973' => [
//        'vardas' => 'Petras',
//        'pavarde' => 'Petraitis',
//        'gdata' => '1990-01-01'
//        ],
//
//        '49004456644' => [
//        'vardas' => 'Linas',
//        'pavarde' => 'Linaitis',
//        'gdata' => '1990-01-01'
//        ],
//
//        '35244556666' => [
//        'vardas' => 'Simas',
//        'pavarde' => 'Simaitis',
//        'gdata' => '1990-01-01'
//        ]
//
//];
//
//function updateArray (array $array) {
//foreach ($array as $key => $value) {
//    if ($key[0] == 3) {
//        unset($array[$key]);
//        }
//    }
//    return $array;
//}
//var_dump(updateArray($a));


//
//$a =
//    [
//        'Jonas',
//        'Petras',
//        'Antanas',
//        'Povilas'
//    ];
//
//$pairs = [];
//
//foreach($a as $k => $v) {
//    foreach(array_slice($a, $k + 1) as $k2 => $v2) {
//        $pairs[] = [$v, $v2];
//    }
//}
//var_dump($pairs);


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