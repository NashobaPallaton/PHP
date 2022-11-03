<?php

class Vehicule {
    public $codevin;
    public $marque;
    public $color;
    public $immat;

    public function show() {
        echo "Vehicule : ". $this->marque ."<br/>";
        echo "Couleur : ". $this->color ."<br/>";
        echo "Immatriculation : ". $this->immat ."<br/>";
        echo "Code VIN : ". $this->codevin ."<br/>";
        echo "<br>";
    }
}

$voiture1 = new Vehicule();
$voiture1->codevin = 12345;
$voiture1->marque = 'VW';
$voiture1->color = 'Blanche';
$voiture1->immat = 'FM-123-92';

$voiture2 = new Vehicule();
$voiture2->codevin = 23456;
$voiture2->marque = 'BMW';
$voiture2->color = 'Noire';
$voiture2->immat = 'OM-131-23';

$voiture3 = new Vehicule();
$voiture3->codevin = 34567;
$voiture3->marque = 'Mercedes';
$voiture3->color = 'Grise';
$voiture3->immat = 'AI-667-59';

echo $voiture1->show() . $voiture2->show() . $voiture3->show();

echo get_class($voiture1);