<?php

/* 1 užduotis

Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

 */

class H {
public $heading=0;

public function __construct($heading) {
$this->heading = $heading;
}
public function echo() {
return "<h1>" . $this->heading . "</h1>";
}
}

$myH = new H('Pirma užduotis su OOP');
echo $myH->echo();



?>
