<?php

/* 1 užduotis

Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

 */

$heading='';

function heading($heading) {
	echo "<h1>" . $heading . "</h1>";
}
$heading='Pirma užduotis be OOP';
heading($heading);
?>
