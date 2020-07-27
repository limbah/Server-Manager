<?php
	session_start();
	$_SESSION['log'];

	if ($_SESSION['log'] == "admin@exemple.com"){
		$cmd = popen("python scripts/speedtest.py", 'r');

		while($b = fgets($cmd, 2048)) {
			echo $b."<br>\n";
			ob_flush();
			flush();
		}
		pclose($cmd);
		exit;
	} else {
		echo 'error';
		header ('location: ../dashboard');
	}
?>