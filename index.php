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
//
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

$array = [
        [
            'Egidijus',
            'Maciulis',
            'maciulis.egidijus@gmail.com',
        ],
        [
            'Egidijus2',
            'Maciulis2',
            'maciulis.egidijus@gmail.com2',
        ],
        [
            'Egidijus3',
            'Maciulis3',
            'maciulis.egidijus@gmail.com3',
        ]
];


function peopleInfo(array $array)
{
    for ($i = 0; $i <count($array); $i++) {
        echo '<tr>';
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo '<td>' . $array[$i][$j] . '</td>';

        }
    }echo '</tr>';
}

?>

<table>
    <thead>
        <tr>
            <td>
              Vardas
            </td>
            <td>
              Pavarde
            </td>
            <td>
              El.Pastas
            </td>
        </tr>
    </thead>
    <tbody>
        <?php
        peopleInfo($array);
        ?>
    </tbody>
</table>


    </body>
</html>