<!DOCTYPE html>
<html>
    <head>
        <title>Mokiniai</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php


            include_once 'obj.php';
            include_once 'masyvai.php';



$metai = new Metai($esamiMetai);


    echo '<table style="border: 1px solid black">';

    echo '<tr><th>'.'Vardas Pavarde Metai'.'</th></tr>';

    foreach ($metai->esamiMetai as $mokinys) {
        if (date_diff($mokinys->gimimoData, date_create())->y >= 18) {
            echo '<tr style="text-align:center;border: 1px solid black">
                        <td>' . $mokinys->vardas . ' ' . $mokinys->pavarde . ' ' . date_diff($mokinys->gimimoData, date_create())->y . '</td>
                    </tr>';
        }
    }

    echo '</table>';
    ?>
    </body>
</html>