<!DOCTYPE html>
<html>
<head>
    <title>php2uzduotis</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css?v=3">

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            max-width: 1000px;
            width: 100%;
            margin-bottom: 30px;
        }
        td, th {
            border: 1px solid #b1aebd;
            text-align: left;
            padding: 8px;
        }
        a {
            padding: 4px 8px;
            background-color: dodgerblue;
            color: #fff;
            margin: auto;
            margin-left: 10px;
            cursor: pointer;
            border-radius: 4px;
            text-align: center;
            display: inline-block;
            text-decoration:none;

        }

    </style>
</head>
<body>
<table>
    <tr>
        <th>Data ir laikas</th>
        <th>Automobilio numeris</th>
        <th>Atstumas</th>
        <th>laikas</th>
        <th>Greitis</th>
    </tr>
    <?php

    $servername = "localHost";
    $username = "Auto";
    $password = "labaislaptas123";
    $dbname = "Auto";

    $page = @$_GET['page'];

    if ($page < 1){
        $page = 0;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    }


    $sql = "SELECT count(1) as visi FROM radars";
    $rezult = $conn->query($sql);
    $row = $rezult->fetch_assoc();
    $allcount = $row['visi'];

    $sql = "SELECT date, number, distance, time, distance/time*3.6 AS speed FROM radars ORDER BY speed DESC, date DESC LIMIT ".(10*$page).", 10";
    $rezult = $conn->query($sql);
    $row = $rezult->fetch_assoc();

    if($rezult->num_rows > 0) {
        while($row = $rezult->fetch_assoc()) {
            echo '<tr><td>' . $row['date'] . '</td><td>' . $row['number'] . '</td><td>' . $row['distance'] . ' (m)' . '</td><td>' . $row['time'] . ' (s)' . '</td><td>' . $row['speed'] . ' (km/h)' . '</td></tr><br>';
        }
    } else {
        echo "0 results";
    }

    $conn->close();

?>
</table>

<?php


if ($page > 0){
        echo '<a href="?page='.($page-1).'" >Previous</a>';
    }

if ($rezult->num_rows >= 10){
        echo '<a href="?page=' .($page+1).'" >Forward</a>';
    }



?>



</body>
</html>