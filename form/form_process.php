<?php

	if(isset($_POST['submit'])) {

		$name = array("liridon", "premtime");
		$minimi = 5;
		$maximum = 10;
		
		$username = $_POST['username'];
		$password = $_POST['password'];	

		if(strlen($username) < $minimi) {
			echo "Username has to be more tha 5 caracter";
		}
		
		if(strlen($username) > $maximum) {
			echo "Username has to be les tha 10 caracter";
		}

		if (!in_array($username, $name)) {
			# code...
			echo "sorry you are note allowed";
		} else {
			echo "welcome" . $username;
		}
		
	}

?>