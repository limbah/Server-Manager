<?php
	session_start();
    $_SESSION['log'];
    include('info.php');

    $userinfo = array(
        $admin1 => $root1,
        $user1 => $pass1
    );

    if (isset($_POST['username']) && $userinfo[$_POST['username']] == $_POST['password']){
        $_SESSION['log'] = $_POST['username'];
            
        header ('location: dashboard');
    } else {
        $_SESSION['log'] = "anonymous";

        header ('location: dashboard');
    }
?>