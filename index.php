<!DOCTYPE html>
<html>
<head>
    <title>php2uzduotis</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=3">
</head>

<body>

<?php

class Radar
{
    public $data;
    public $number;
    private $distance;
    private $time;
    public $speed;

    public function __construct($data, $number, $distance, $time)
    {
        $this->data = $data;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;
    }

    public function getDistance(){
        return $this->distance;
    }

    public function getTime(){
        return $this->time;
    }

    public function autoSpeed(){
        $this->speed = round($this->distance / $this->time, 1);
        return $this->speed;
    }

    public function getSpeed(){
        if ($this->speed == null){
            $this->autoSpeed();
        }
        return $this->speed;
    }
}



session_start();


if (!empty($_SESSION['duomenys'])){
    $auto=[];
    foreach ($_SESSION['duomenys'] as $value){
        if (!empty($_POST) && $_POST['filtras']!=''){
            if (!preg_match('/('.preg_quote($_POST['filtras'],'/').')/i',$value['numeris'])){
                continue;
            }
        }

        $auto[] = new Radar($value['dataLaikas'], $value['numeris'], $value['atstumas'], $value['laikas']);
    }

    usort($auto, function ($p1, $p2){
        return ($p1->getSpeed() < $p2->getSpeed());
    });
}

function lentele($auto){
    foreach ($auto as $info) {
        echo '<tr><td>' . $info->data. '</td>';
        echo '<td>'.$info->number. '</td>';
        echo '<td>'.$info->getDistance(). '</td>';
        echo '<td>'.$info->getTime(). '</td>';
        echo '<td>'.$info->getSpeed()*3.6. '</td></tr>';
    }
}

?>

<h1>Registracija</h1>
<div>
    <form method="post">
        <input name="dataLaikas" placeholder="Data" type="date"><br>
        <input name="numeris" placeholder="Automobilio nr" type="text"><br>
        <input name="atstumas" placeholder="Atstumas (m)" type="text"><br>
        <input name="laikas" placeholder="laikas (s)"type="text"><br>
        <input type="submit" value="Registruoti">
    </form><br>

    <form method="post">
        <input name="filtras" placeholder="paieska" type="text" value="<?php if (isset($_POST['filtras'])) echo $_POST['filtras'] ?>"><br>
        <input type="submit" value="Filtruoti">
    </form><br>

</div>
<table>
    <tr>
        <th>Data ir laikas</th>
        <th>Automobilio (nr)</th>
        <th>Atstumas (m)</th>
        <th>Laikas (s)</th>
        <th>Greitis (km/h)</th>
    </tr>
    <tr>
        <?php lentele($auto); ?>
    </tr>

</table>

</body>
</html>