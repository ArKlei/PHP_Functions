<?php

/* 4 užduotis

Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
(išskyrus vienetą ir patį save). Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;


 */

$number=0;

function divide(int $number) {
	
	echo $number.'<p>';
	
	$count=0;
	
		for ($i=2; $i<$number; $i++) {	
		
			if ($number % $i == 0) {
				
				$count++;
			
			} 
		
		} 
		
		echo 'Dalinasi iš ' . $count . ' sveikų skaičių (be 1 ir savęs)';

}

$number=rand(0,1000);
divide($number);

?>
