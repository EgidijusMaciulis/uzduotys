<?php

$mokiniai = [
    new Mokinys('Jonas', 'Jonaitis', '2001-02-17', ['lietuviu'=>[7, 9, 5, 9], 'anglu'=>[5, 9, 7, 7], 'matematika'=>[7, 6, 7, 5]]),
    new Mokinys('Ona', 'Onaite', '1999-10-11', ['lietuviu'=>[9, 7, 8, 8], 'anglu'=>[6, 7, 5, 3], 'matematika'=>[5, 6, 7, 8]]),
    new Mokinys('Petras', 'Petraitis', '1997-04-16', ['lietuviu'=>[9, 6, 5, 8], 'anglu'=>[7, 7, 8, 9], 'matematika'=>[9, 8, 7, 8]]),
    new Mokinys('Antanas', 'Antanaitis','2000-09-26', ['lietuviu'=>[7, 7, 7, 7], 'anglu'=>[5, 8, 9, 4], 'matematika'=>[8, 8, 6, 9]]),
];


class Trimestras
{
    public $dalykai;
    public $trimVid;

    function __construct($dalykas)
    {
        $this->dalykai = $dalykas;
    }

    function vidurkis(){
        $sum = 0;
        $count = 0;
        foreach ($this->dalykai as $pazymiai){
            foreach ($pazymiai as $pazymys){
                $sum += $pazymys;
                $count++;
            }
        }
        $this->trimVid = round($sum / $count, 1);
        return $this->trimVid;
    }

}

class Mokinys extends Trimestras
{

    public $vardas;
    public $pavarde;
    public $gimimoData;
    public $amzius;

    function __construct($vardas, $pavarde, $gimimoData, $dalykai)
    {
        parent::__construct($dalykai);
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->gimimoData = $gimimoData;
    }

    function pilnasVardas()
    {
        return $this->vardas . ' ' . $this->pavarde;
    }

    function amzius()
    {
        $date = new DateTime($this->gimimoData);
        $now = new DateTime(date('Y-m-d'));
        $interval = $now->diff($date);
        $this->amzius = $interval->y;
        return $this->amzius;
    }
}

