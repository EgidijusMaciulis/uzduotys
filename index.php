<!DOCTYPE html>
<html>
<head>
    <title>ND8</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=3">
</head>

<body>

<?php

require_once ('mokiniai.php');

require_once ('functions.php');


$sarasas = mazejimo($mokiniai);

$pilnameciai = [];

foreach ($mokiniai as $key => $mokinys){
    if ($mokinys->amzius() >= 18){
        $pilnameciai[] = $mokinys;
    }

}

?>
<table>
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Amzius</th>
        <th>Bendras vidurkis</th>
    </tr>
        <?php lentele($pilnameciai); ?>


</table>
</body>
</html>