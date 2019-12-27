<?php
	// Assigning a ? conditional result to a variable
	$enough = $fuel <= 1 ? FALSE : TRUE;

	// If you find the ? operator confusing, you are free to stick to if statements,
	// but you should be familiar with the operator because you'll see it in other people's code. It can
	// be hard to read, because it often mixes multiple occurrences of the same variable. For
	// instance, code such as the following is quite popular:
	$saved = $saved >= $new ? $saved : $new;
	// If you take it adapt carefully, you can figure out what this code does:
	$saved =					// Set the value of $saved to ...
			$saved >= $new		// Check $saved against $new
		?						// Yes, comparison is true...
			$saved				// ... so assign the current value of $saved
		:						// No, comparison is false...
			$new;				// ... so assign the valuer of $new
?>