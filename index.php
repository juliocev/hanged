<?php session_start(); 

require './classes/hanged.php';
require './classes/generator.php';

$words = ['casa', 'perro', 'telefono', 'queso', 'jaula'];

$generator = new Generator($words);
$generator->selectWord();

$hanged = new Hanged($words);
$hanged->run();