<?php
	// Walking through associative array using foreach...as

	$paper = array('copier' => 'Copier & Multipurpose',
				   'inkjet' => 'Inkjet printer',
				   'laser' => 'Laser Printer',
				   'photo' => 'Photographic paper');
	foreach($paper as $item => $description)
		echo "$item: $description<br>";
?>