<?php
	// Trapping division-by-zero error using continue
	$j = 10;
	
	while($j > -10)
	{
		$j--;
		if($j == 0) continue;
			echo (10 / $j) . "<br>";
	}
?>