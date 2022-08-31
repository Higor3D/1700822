<?php 

	 $nomes = array('João','José', 'Paulo','Pedro');

	 foreach ($nomes as $itens) {
	 	echo "<br/>" .$itens; 
	 }

	 for ($x=1; $x <= 100 ; $x++) {
	 	if ($x == 10) {
	 		goto desvio;

	 		echo "<br/>" .$x;
	 	}

	 desvio: 
	 echo "<br/> Pronto, aqui está o desvio.";


	 	 for ($x=1; $x <= 100 ; $x++) {
	 	if ($x % 2 == 0) {
	 		continue;
	 	}
	 		echo "<br/>" .$x;
	 	}

 ?> 