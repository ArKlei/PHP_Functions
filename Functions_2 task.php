<?php

/* 2 užduotis

Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, 
įterpiamas į h tagą, o antrasis tago numeris (1-6). 
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

 */

$heading='';
$size=0;

function heading($heading,$size) {
	echo "<h$size>$heading</h$size>";
}
$heading='Antra užduotis be OOP';
$size=rand(0,6);
heading($heading,$size);
?>
