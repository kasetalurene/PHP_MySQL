<?php
class opilased{
var $eesnimi;
var $perenimi;
var $vanus;
var $sugu = 'm';
function ytle_tere(){
echo "Tere maailm!";
}
function ytle_taisnimi(){
echo $this->eesnimi.' '.$this->perenimi;
}
}
$oppur1 = new opilased;
$oppur1->eesnimi='Mati';
$oppur1->perenimi='Maakas';
$oppur1->ytle_taisnimi();
