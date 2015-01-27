<?php
	// This file is the place to store all basic functions


// function to redirect to the desired page location.
	function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	
?>