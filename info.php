<?php
	session_start();
    $_SESSION['log'];

    $ini = parse_ini_file('cfg/config.ini');

    $host = $ini['hostname'];
    $os = $ini['os'];
    $cpu = $ini['cpu'];
    $ram = $ini['ram'];
    $hdd = $ini['hdd'];
    $bandwidth = $ini['bandwidth'];
    $ip = $ini['ip'];

    // USER //
    $admin1 = $ini['admin'];
    $root1 = $ini['passadmin'];

    $user1 = $ini['user1'];
    $pass1 = $ini['pass1'];
?>