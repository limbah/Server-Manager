<?php
	session_start();
	$_SESSION['log'];

	if ($_SESSION['log'] == "admin@exemple.com"){
        $myfile = fopen("scripts/status", "w") or die("Unable to open file!");
        $txt = "FALSE";
        fwrite($myfile, $txt);
        fclose($myfile);

        $output = shell_exec('sudo screen -S SRV-01 -X quit');
        echo $output;
        echo "server stop.";
    } else {
        echo 'error';
		header ('location: ../dashboard');
    }
?>