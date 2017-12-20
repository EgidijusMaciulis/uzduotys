<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">

    </head>
    <body>

<?php


// atrenkam grupes Vyras - Moteris

$zmones = [
    ['vardas' => 'Jonas',  'lytis' => 'V'],
    ['vardas' => 'Ona',    'lytis' => 'M'],
    ['vardas' => 'Petras', 'lytis' => 'V'],
    ['vardas' => 'Maryte', 'lytis' => 'M'],
    ['vardas' => 'Egle',   'lytis' => 'M']
];


function groups($zmones)
{
    for ($i = 0; $i < count($zmones); $i++) {
        for ($j = $i; $j < count($zmones); $j++) {
            if ($zmones[$i]["lytis"] !== $zmones[$j]["lytis"]) {
                print_r($zmones[$i]["vardas"] . " - " . $zmones[$j]["vardas"]);
                echo "<br>";
            }
        }
    }
}
groups($zmones);



// Surandam kiekvienos pamokos vidurkius ir bendra vidurki

$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => [
        'lietuviu' => [4, 8, 6, 7],
        'anglu' => [6, 7, 8],
        'matematika' => [3, 5, 4]]],
    ['vardas' => 'Ona', 'pazymiai' => [
        'lietuviu' => [10, 9, 10],
        'anglu' => [9, 8, 10],
        'matematika' => [10, 10, 9, 9]]],
];

$jonovidsuma = 0;
$onosvidsuma = 0;

foreach($mokiniai as $value) {
    echo '<br>'.$value['vardas'].'<br>';

    foreach($value['pazymiai'] as $key => $value2){

        $dal = count($value['pazymiai'][$key]);
        $rezult = round(array_sum($value['pazymiai'][$key]) / $dal);
        echo $key.' vidurkis : '.$rezult.'<br>';

        if ($value['vardas'] == 'Jonas') {
            $jonovidsuma += $rezult;
        } else {
            $onosvidsuma += $rezult;
        }

    }

}

echo '<br>';


if ($jonovidsuma > $onosvidsuma) {
    echo 'Geriausiai mokosi Jonas!';
} else {
    echo 'Geriausiai mokosi Ona!';
}
?>







    </body>
</html>