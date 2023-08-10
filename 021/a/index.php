<?php

require __DIR__ . '/WriterPlan.php';
require __DIR__ . '/Writer.php';
require __DIR__ . '/MyWriter.php';


$author1 = new MyWriter();

$author1->write('Olia myzmo');