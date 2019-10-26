<?php
	function quijote($fichero){
		$cnt = 0;
		$fd = fopen($fichero, 'r');
		
		while (($contenido = fgets($fd)) !== false) {
			if(strpos(strtolower($contenido), "molino")){
				$cnt++;
			}
			// $contenido . "\n";
		}
		echo "Molinos en el fichero: " . $cnt;
	}
	
	quijote("elquijote.txt");
?>