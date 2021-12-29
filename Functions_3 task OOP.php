<?php

/* 3 užduotis

Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
(h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
Keitimui naudokite pirmo patobulintą (jeigu reikia) 
uždavinio funkciją ir preg_replace_callback();

 */

class H {
	public $heading=0;
	public $array=[];

	public function __construct($heading) {
		$this->heading = $heading;
		
		echo '<pre>';
		$array = preg_split('~(?:\d+|\D+)\K~',$this->heading,0,PREG_SPLIT_NO_EMPTY);
		print_r($array);
		return $array;
		echo '</pre><p>';
		
	}

	public function echo() {
		
		foreach ($array as $index => $value) {
			
			if (is_numeric($value)) {
				
				return '<h1>'.$value.'</h1><p>';
				
			} /*else {
				
				//return $value;
			}*/
		
		}
	
	}
}

$myH = new H(md5(time()));
print_r($myH).'<p>';
echo $myH->echo();

?>
