<?php

require __DIR__ . '\River.php';
require __DIR__ . '\Beaver.php';

$animal1 = new Beaver('Bikis');

echo '<pre>';

echo $animal1->title. '<br>';//public
echo $animal1->name. '<br>';

echo $animal1->distance. '<br>';//protected



//var_dump($animal1);
