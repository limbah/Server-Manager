<?php
	session_start();
	$_SESSION['log'];

	if ($_SESSION['log'] == "useradmin"){
        function UpCheck() 
        {
            $file = "scripts/status";
            $handle = fopen($file, "r");
            $output = fread($handle, filesize($file));
            if ($output == "FALSE"){
                $STATUS = 'OFF';
            } elseif ($output == "TRUE"){
                $STATUS = 'ON';
            } else {
                $STATUS = 'ERR';
            }
            return($STATUS);
            fclose($myfile);
        }
        UpCheck();
    } else {
        echo 'error';
		header ('location: ../dashboard');
    }
?>