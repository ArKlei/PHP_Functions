<?php

/* 7 užduotis

Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, 
elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, 
kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. 
Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;



 */

$number=0;
$array=[];
$cycles=rand(10,30);
echo '<p><h1>Ciklų skaičius yra: '.$cycles.'</h1><p>';

	for ($i=0; $i<$cycles; $i++) {

		$array_length=rand(10,20);

		echo '<p><h2>'.($i+1).'-o masyvo masyve (paskutiniame elemente) dydis yra: '.$array_length.'</h2><p>';
			
		for ($y=0; $y<$array_length; $y++) {
				
			$number=rand(0,10);
			$array[]=$number;

		}			
		
		
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
