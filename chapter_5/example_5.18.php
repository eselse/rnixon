<?php
	// Valid and invalid property declaration

	class Test
	{
		public $name 	= "Paul Smith";	// Valid
		public $age 	= 42;			// Valid
		// public $time	= time();		// Invalid - calls function
		// public $score	= $level * 2;	// Invalid - uses an expression
	}
?>