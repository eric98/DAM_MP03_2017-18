<?php

class Punt {

    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }    
    
    public static function demanarPunt(){
        $x = 0;
        $y = 0;
        
        fscanf(STDIN, "%d\n",$x);
        fscanf(STDIN, "%d\n",$y);
    }

    public function distanciaPunt($p) {
        return sqrt(pow($p->x - $this->x, 2) + pow($p->y - $this->y, 2));
    }

    public function distanciaX($p) {
        return abs($p->x - $this->x);
    }

    public function distanciaY($p) {
        return abs($p->y - $this->y);
    }
}
$p = new Punt(3, 4);
var_dump($p);

$p1 = Punt::demanarPunt();
var_dump($p1);

echo $p->distanciaPunt($p1);
echo $p1->distanciaPunt($p);

echo $p->distanciaX($p1);
echo $p->distanciaY($p1);
