<?php
	session_start();
    $_SESSION['log'];

	if ($_SESSION['log'] == "useradmin"){
        include 'upcheck.php';
        
        if(UpCheck() == ON){
            echo 'server already up.';
        } elseif(UpCheck() == OFF){
            $myfile = fopen("scripts/status", "w") or die("Unable to open file!");
            $txt = "TRUE";
            fwrite($myfile, $txt);
            fclose($myfile);

            $output = shell_exec('sudo screen -S SRV-01 -m -d -s ./scripts/starts01.sh');
            echo $output;
            echo 'server start.';
        } elseif(UpCheck() == ERR){
            echo 'error.';
        } else {
            echo 'uh?';
        }
    } else {
        echo 'error';
		header ('location: ../dashboard.php');
    }
?>