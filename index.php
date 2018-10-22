<?php  

require './classes/hanged.php';

$words = [0 => 'casa', 3 => 'perro', 9 => 'telefono', 6 => 'queso', 34 =>'jaula'];
//$newWords = ['perro'];

$hanged = new Hanged($words);
$hanged->run();