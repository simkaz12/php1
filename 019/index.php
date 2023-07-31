<?php

require __DIR__ . '/Bebras.php';
require __DIR__ . '/Kibiras.php';
require __DIR__ . '/Pinigine.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;
$bebras3 = $bebras1;

echo '<pre>';

//var_dump($bebras1);
//var_dump($bebras2);
//var_dump($bebras3);


echo'<br>';

//$bebras1 -> spalva = 'juoda';  
$bebras1 -> svoris = 35;  
$bebras2 -> svoris = 45;  

//$bebras1->spalva = 'juodas';
echo $bebras1->kokiaSpalva();

//$bebras1 -> plauk();
//$bebras2 -> plauk();

$kibiras1 = new Kibiras;
//$kibiras1 -> pridetiAkmeni();
//$kibiras1 -> kiekPririnktaAkmenu();
echo '<br>';
$kibiras1 -> pridetiDaugAkmenu(35);
$kibiras1 -> kiekPririnktaAkmenu();

echo '<br>';

$pinigine1 = new Pinigine;
$pinigine1 -> ideti(1);
$pinigine1 -> ideti(3);
$pinigine1 -> skaiciuoti();
