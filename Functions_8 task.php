<?php

/* 8 užduotis

Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
Skaičiuoti reikia visuose masyvuose ir submasyvuose.



 */

$number=0;
$array=[];
$cycles=rand(10,30);
$count=0;

echo '<p><h1>Ciklų skaičius yra: '.$cycles.'</h1><p>';

	for ($i=0; $i<$cycles; $i++) {

		$array_length=rand(10,20);
		

		echo '<p><h2>'.($i+1).'-o masyvo masyve (paskutiniame elemente) dydis yra: '.$array_length.'</h2><p>';
		$count=0;
		
		
		for ($y=0; $y<$array_length; $y++) {
				
			$number=rand(0,10);
			
			$array[]=$number;
			$count++;

		}			
		
		echo '<p><h3>'.($i+1).'-e masyve yra '.$count.' elementų.<p>';
		
		if ($i == ($cycles-1)) {
			
			$array[sizeof($array)]=0;
			
		} else {
			
			$array[sizeof($array)]=[];
			
		}
		
		
		echo 'Sugeneruotas masyvas yra: <pre>';
		print_r($array);
		echo '</pre>';

	}		
		
			
	

	
?>
