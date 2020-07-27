<?php
	session_start();
	$_SESSION['log'];

	if ($_SESSION['log'] == "admin@exemple.com"){
        include 'upcheck.php';

        if(UpCheck() == ON){
            echo 'Server is UP.';
        } elseif(UpCheck() == OFF){
            echo 'Server is DOWN.';
        } elseif(UpCheck() == ERR){
            echo 'error.';
        } else {
            echo 'uh?';
        }
    } else {
        echo 'error';
		header ('location: ../dashboard');
    }
?>