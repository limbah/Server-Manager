<?php
	session_start();
	$_SESSION['log'];

	if ($_SESSION['log'] == "admin"){
		$output = shell_exec('scripts/rst.sh');
		echo $output;
		echo 'RESET DONE';
    } else {
        echo 'error';
		header ('location: ../error');
	}
?>