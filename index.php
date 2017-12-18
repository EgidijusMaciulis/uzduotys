<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Francois+One&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <?php

        $array = [
            [5, 8, 17, 12],
            [10, 13, 8, 4],
            [20, 9, 4, 11],
            [5, 12, 2, 11]
        ];

        $sum = $array;

        foreach($array[0] as $m => $n)
            $sum[$m] = array_sum(array_column($array, $m));
            $max = max($sum);

        echo "Stulpeliu sumos <br>";


        print_r($sum);

        echo  "<br>";

        echo " <br> Didziausia stulpelio suma " . $max . "<br>";

        $a = 0;
        for ($i = 0; $i < count($array); $i++) {
            $a = $a += $array[$i][$i];
        }

        echo ' <br> Pirma istrizaine ' . $a .  "<br>";

        $b = 0;
        for ($i = 0; $i < count($array); $i++) {
            $b = $b += array_reverse ($array)[$i][$i];
        }

        echo ' <br> Antra istrizaine ' . $b;


        ?>




    </body>
</html>