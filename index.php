<!DOCTYPE html>
<html>
    <head>
        <title>Mokiniai</title>
        <meta charset="UTF-8">
    </head>
    <body>

    <?php



    class Radar
    {
        public $date; //data ir laikas
        public $number; //automobilio nr
        public $distance; // nuvaziuotas atstumas m
        public $time; //sugaistas laikas sekundemis
        public $speed;

        public function __construct(
            DateTime $date,
            String $number,
            float $distance,
            float $time
        )
        {
            $this->date = $date;
            $this->number = $number;
            $this->distance = $distance;
            $this->time = $time;
        }


        public function speed()
        {
            return $speed = ($this->distance / 1000) / ($this->time / 3600);
        }


    }

    $objArray = [
        new Radar(new DateTime('2017-02-02'), 'BBB222', (double)4000, (double)4600),
        new Radar(new DateTime('2017-01-01'), 'AAA111', (double)1000, (double)3600),
        new Radar(new DateTime('2017-05-05'), 'CCC333', (double)5000, (double)5600),
        new Radar(new DateTime('2017-07-07'), 'DDD444', (double)6000, (double)6600),
    ];

    usort($objArray, function($a, $b){
        return ($a->speed() < $b->speed());
    });
    foreach ($objArray as $obj) {
        echo 'Automobilis: '.$obj->number.' greitis: '.round($obj->speed(), 1).' km/h'.'<br>';
    }

     ?>
    </body>
</html>