<?php

/* 5 užduotis

Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.


 */

$number=0;
$array=[];
$new_array=[];
$res_array=0;

	for ($i=0; $i<100; $i++) {
			
		$number=rand(33,77);
		$array[]=$number;
		
	}
		
	echo 'Sugeneruotas masyvas iš 100 elementų yra: <pre>';
	print_r($array);
	echo '</pre>';
			
	foreach ($array as $index => $value) {
		
		$count=0;
		
		for ($i=1; $i<$value; $i++) {	
			
			if ($value % $i == 0) {
				
				$count++;
			
			} 
		
		}
		
		$new_array[] = $count;
			
	}
	
		echo 'Sugeneruotas naujas masyvas iš daliklių, iš kurių dalinasi be liekanos, skaičių yra: <pre>';
		print_r($new_array);
		echo '</pre>';
	
	$res_array=array_multisort($new_array, SORT_DESC, $array);
	
	echo 'Rezultatas: <pre>';
	print_r($array);
	echo '</pre>';
	
		
?>
