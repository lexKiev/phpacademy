<?php
for ($i = 1; $i <= 9; $i++) {
	
	for ($n = 1; $n <= 9; $n++) {
		$k = $i * $n;
		printf ("%4s |", $k);
	}
	echo PHP_EOL;
}
?>