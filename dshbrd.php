<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<title>Server | Dashboard</title>
		<meta name="robots" content="noindex">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="icon" type="image/png" sizes="96x96" href="img/cloud.png">
    </head>
    <body>	
		<nav>
			<div class="nav-wrapper blue">
				<a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Server</a>
				<ul class="right">
					<li><a href="logout.php"><i class="material-icons">logout</i></a></li>
			</div>
		</nav>
        <?php
			session_start();
			$_SESSION['log'];

			if ($_SESSION['log'] == "useradmin"){
		?>
				<!--admin-->
					<div class="container">
						<h4>Administration</h4>
						<form method="post"> 
							<a class="blue btn waves-effect waves-light-blue" href="http://stats.yourdomain.com" target="_blank">Stats</a>
							<input type="submit" name="btn1" value="Speedtest" class="blue btn waves-effect waves-light-blue"/>
						</form>
						<?php
							if(isset($_POST['btn1'])) { 
								echo '<iframe src="functions/speedtest.php" class="speedtest"></iframe>';
								echo '<br/>';
								echo '<form method="post"><input type="submit" name="cls" value="close" class="red btn"/></from>';
							}
						?>
						<h4>Game servers</h4>
						<form method="post">
							<a class="blue btn waves-effect waves-light-blue" href="http://panel.yourdomain.com" target="_blank">Game Panel</a>
							<input type="submit" name="mc1r" value="Start" class="green btn waves-effect waves-light-blue"/>
							<input type="submit" name="mc1x" value="Stop" class="red btn waves-effect waves-light-blue"/>
							<input type="submit" name="mc1s" value="Status" class="grey btn waves-effect waves-light-blue"/>
						</form>
						<?php
							if(isset($_POST['mc1r'])) { 
								echo '<iframe src="functions/starts01.php" class="mcs"></iframe>';
							}
							if(isset($_POST['mc1x'])) { 
								echo '<iframe src="functions/stops01.php" class="mcs"></iframe>';
							}
							if(isset($_POST['mc1s'])) { 
								echo '<iframe src="functions/status01.php" class="mcs"></iframe>';
							}
						?>

						<h4>Informations</h4>
						<p>OS: X</p>
						<p>CPU: X Cores</p>
						<p>RAM: XX Go</p>
						<p>SSD: XXX Go</p>
						<p>Bandwidth: XXXMbit/s</p>
						<p>Static IP: XXX.XXX.XXX.XXX</p>
						<form method="post">
							<a class="blue btn waves-effect waves-light-blue" href="https://yourhost.com/" target="_blank">Host Panel</a>
						</form>

					</div>
				<!--admin-->
		<?php
			} elseif ($_SESSION['log'] == "useruser"){
		?>
				<!--USER-->
					<div class="container">
						<h4>You don't have any server.</h4>
					</div>
				<!--USER-->
		<?php
			} else {
				echo '<div class="container"><h5>Incorrect email or password</5></div>';
				echo '<div class="logout"><a href="logout.php">Retry</a></div>';
			}
		?>
    </body>
</html>