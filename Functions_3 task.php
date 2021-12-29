<?php

/* 3 užduotis

Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
(h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
Keitimui naudokite pirmo patobulintą (jeigu reikia) 
uždavinio funkciją ir preg_replace_callback();

 */

$heading=0;
$array=[];

function heading($heading) {
	
	
	print_r($heading).'<p>';
	/*
	$array = preg_match_all('/([0-9]+|[a-zA-Z]+)/',$heading,$matches);
	echo '<pre>';
	print_r($matches);
	echo '</pre><p>';*/
	
	echo '<pre>';
	$array=preg_split('~(?:\d+|\D+)\K~',$heading,0,PREG_SPLIT_NO_EMPTY);
	print_r($array);
	echo '</pre><p>';
	
	foreach ($array as $index => $value) {
		
		if (is_numeric($value)) {
			
			echo '<h1>'.$value.'</h1><p>';
			
		} else {
			
			echo $value;
		}
	
	}

}

$heading=md5(time());
heading($heading);

?>
