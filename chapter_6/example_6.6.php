<?php
	// Walking through a numeric array using foreach...as
	$paper = array("Copier", "Inkjet", "laser", "Photo");
	$j = 0;

	foreach($paper as $item)
	{
		echo "$j: iterm<br>";
		++$j;
	}
?>