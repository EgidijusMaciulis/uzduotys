<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">


    </head>
    <body>

<?php



/**
 * @param $array
 * @return float|int
 *
 * Ieskome a ir b masyvo skaiciu vidurkiu ir skirtumo tarp ju.
 */
function arrayAverage($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }
    $average = $sum / count($array);

    return $average;
}

$a= [5, 6, 10, 15];
$b = [8,5, 3, 25];

echo 'a) vidurkis ' . arrayAverage($a).'<br>';
echo 'b) vidurkis ' . arrayAverage($b).'<br>';
echo 'c) vidurkiu skirtumas '. (arrayAverage($a) - arrayAverage($b)).'<br>';

echo "<br>";


/**
 * @param $n
 * @return bool
 *
 * Ieskome tobulu skaiciu nuo 1 iki 1000 skaiciu aibeje.
 */
function perfectNumber($n)
{
    $i = 1;
    $sum = 0;

    while ($i < $n)
    {
        if ($n % $i == 0)
        {
            $sum = $sum + $i;
        }
        $i++;
    }
    return $sum == $n;
}

for ($n = 1; $n < 1001; $n++) {

    if (perfectNumber($n))
        echo "Tobulas skaicius " . $n . "<br>";
}




?>


    </body>
</html>