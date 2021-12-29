<?php

/* 2 užduotis

Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, 
įterpiamas į h tagą, o antrasis tago numeris (1-6). 
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

 */

class H {
public $heading=0;
public $size=0;

public function __construct($heading,$size) {
$this->heading = $heading;
$this->size = $size;
}
public function echo() {
return '<h'.$this->size.'>' .$this->heading . '</h'.$this->size.'>';
}
}

$myH = new H('Antra užduotis su OOP',rand(1,6));
echo $myH->echo();



?>
