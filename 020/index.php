<?php

require __DIR__ . '/Forest.php';
require __DIR__ . '/Cart.php';
require __DIR__ . '/Witch.php';



$forest1 = new Forest(100);

echo $forest1->area;
echo '<br>';

$witch1 = new Witch('Gandalf', 1000);

$witch1->cut();

