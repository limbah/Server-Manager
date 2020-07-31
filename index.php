<!DOCTYPE html>
<?php
	include('info.php');
	if (isset($_SESSION['log']) == $admin1 || $_SESSION['log'] == $user1){
		header ('location: dashboard');
	}
?>
<html lang="en">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="author" content="Limbah">
		<meta name="description" content="Login page for server.">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="icon" type="image/png" sizes="96x96" href="img/cloud.png">

		<title>
            <?php
                echo $host;
            ?> 
        </title>
    </head>
	<body>
		<nav>
			<div class="nav-wrapper blue">
			<a href="#!" class="brand-logo left"><i class="material-icons">cloud</i><?php
                echo $host;
                ?></a>
			</div>
		</nav>
		<div class="container section no-pad-bot" id="index-banner">
			<h2 class="center-align">Login</h2>
			<form class="col s12 container" method="post" action="login.php">
				<div class="input-field col s3">
					<i class="material-icons prefix">mail</i>
					<input id="mail" type="text" class="validate" name="username" required>
					<label for="mail">E-mail</label>
				</div>

				<div class="input-field col s3">
					<i class="material-icons prefix">lock</i>
					<input id="password" type="password" class="validate" name="password" required>
					<label for="password">Password</label>
				</div>

				<div class="center">
					<button class="btn blue" data-position="bottom"type="submit" name="action" id="submit" for="submit">Connection</button>
				</div>
			</form>
		</div>
		<footer style="position: absolute; bottom: 0; left: 0; right: 0; background: #40424a; padding: 20px 0;">
			<div style="text-align: center;">
				<div class="copyright" style="color: white;">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by <a href="https://github.com/limbah">Limbah</a>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>