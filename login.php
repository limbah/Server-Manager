<?php
	session_start();
	$_SESSION['log'];

    if ($_SESSION['log'] == "useradmin" || 
    isset($_POST['email']) && $_POST['email'] == "admin@exemple.com" && isset($_POST['pass']) && $_POST['pass'] == "1234"){
        $_SESSION['log'] = "useradmin";
            
        header ('location: dashboard.php');
    }
    elseif ($_SESSION['log'] == "useruser" ||
    isset($_POST['email']) && $_POST['email'] == "user@exemple.com" && isset($_POST['pass']) && $_POST['pass'] == "0000"){
        $_SESSION['log'] = "useruser";

        header ('location: dashboard.php');
    }
    else {
        $_SESSION['log'] = "anonymous";

        header ('location: dashboard.php');
    }
?>