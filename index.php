<?php  

require './classes/hanged.php';

$words = ['casa', 'perro', 'telefono', 'queso', 'jaula'];
//$newWords = ['perro'];

$hanged = new Hanged($words);
$hanged->run();