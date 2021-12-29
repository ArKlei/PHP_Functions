<?php

/* 6 užduotis

Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. 
Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.



 */

$number=0;
$array=[];
$new_array=[];

	for ($i=0; $i<100; $i++) {
			
		$number=rand(333,777);
		$array[]=$number;
		
	}
		
	echo 'Sugeneruotas masyvas iš 100 elementų yra: <pre>';
	print_r($array);
	echo '</pre>';
			
	foreach ($array as $index => $value) {
		
		for ($i=2; $i<$value; $i++) {	
		
			if ($value % $i == 0) {
				
				echo $array[$index].'<br>';
				unset($array[$index]);
				break;
			
			} 
		
		} 
			
	}

	
?>
