<?php

class Mokinys
{
    public $vardas;
    public $pavarde;
    public $gimimoData;

    function __construct($vardas, $pavarde, $gimimoData) {

        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->gimimoData = $gimimoData;
    }
}

class Metai
{
    public $esamiMetai;

    function __construct($esamiMetai){

        $this->esamiMetai = $esamiMetai;
    }
}

    