<!DOCTYPE html>
<html>
    <head>
        <title>Pirmasis php</title>
        <meta charset="utf-8">
    </head>
    <body>

<?php

$array = [
        [3,4,5],
        [2,10,8],
        [5,6,5],
        [5,5,5],
];



for ($i = 0; $i < count($array); $i++) {

    $a = $array[$i][0];
    $b = $array[$i][1];
    $c = $array[$i][2];

        if($a + $b > $c && $b + $c > $a && $c + $a > $b ) {
            echo "Duotos trikampio krastines".'<br>'.$a.", ".$b.", "
                .$c.'<br>'."Trikampi galima sudaryti".'<br>';

            if ($a == $b && $b == $c && $c == $a) {
                $lygiakrascioPlotas = sqrt(3)/4*pow($a,2);

                echo "Trikampis lygiakrastis".'<br>';
                echo "Lygiakrascio trikampio plotas"." ".$lygiakrascioPlotas.'<br>'.'<br>';

            } else {
                if($a == $b || $b == $c || $c == $a){
                    $d = sqrt($a * $a + $b/2 * $b/2);
                    $lygiasonioPlotas = $b * $d / 2;

                    echo "Trikampis lygiasonis".'<br>';
                    echo "Lygiasonio rikampio plotas"." ".$lygiasonioPlotas.'<br>'.'<br>';

                } else {
                    if($a!=$b && $b!=$c && $a!=$c){
                        $ivairiakrascioP = ($a + $b + $c) / 2;
                        $ivairiakrascioPlotas = sqrt($ivairiakrascioP * ($ivairiakrascioP - $a) * ($ivairiakrascioP - $b) * ($ivairiakrascioP - $c));

                        echo "Trikampis ivairiakrastis".'<br>';
                        echo "Ivairiakrascio trikampio plotas"." ".$ivairiakrascioPlotas.'<br>'.'<br>';

                    }

                }
            }
        } else {
            echo "Duotos trikampio krastines".'<br>'.$a.", ".$b.", "
                .$c.'<br>'."Trikampi negalima sudaryti".'<br>'.'<br>';
        }

    }


?>




    </body>
</html>