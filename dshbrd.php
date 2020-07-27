<!DOCTYPE html>
<?php
	include('info.php');
	$userinfo = array(
        $admin1 => $root1,
        $user1 => $pass1,
        $access => $access
    );
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<title>
            <?php
                echo $host . ' | Dashboard';
            ?> 
        </title>
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
				<ul class="left">
					<li><a href="config"><i class="material-icons">keyboard_arrow_left</i></a></li>
				</ul>
				<a href="#!" class="brand-logo"><i class="material-icons">cloud</i><?php
                echo $host;
                ?></a>
				<ul class="right">
					<li><a href="logout.php"><i class="material-icons">logout</i></a></li>
				</ul>
			</div>
		</nav>
        <?php
			session_start();
			$_SESSION['log'];

			if ($_SESSION['log'] == "admin@exemple.com"){
		?>
				<!--admin-->
					<div class="container">
						
						<div class="right">
							<?php
							echo "<p>Hello <em>$admin1</em><p>";
							?>
						</div>
						
						<h4>Administration</h4>
						<form method="post"> 
							<a class="blue btn waves-effect waves-light-blue" href="https://stats.yourdomain.com" target="_blank">Stats</a>
							<input type="submit" name="btn1" value="Speedtest" class="blue btn waves-effect waves-light-blue"/>
							<a class="grey btn waves-effect waves-light-grey" href="config">Configuration</a>
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
							<a class="blue btn waves-effect waves-light-blue" href="https://game.panel.com" target="_blank">Game Panel</a>
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
						<?php
							echo "<p>OS: $os</p>";
							echo "<p>CPU: $cpu</p>";
							echo "<p>RAM: $ram</p>";
							echo "<p>SSD: $hdd</p>";
							echo "<p>Bandwidth: $bandwidth</p>";
							echo "<p>Static IP: $ip</p>";
						?>
							<form method="post">
								<a class="blue btn waves-effect waves-light-blue" href="https://yourhost.com/" target="_blank">Host Panel</a>
							</form>
					</div>
				<!--admin-->
		<?php
			} elseif ($_SESSION['log'] == "user@exemple.com"){
		?>
				<!--USER-->
					<div class="container">
						<h4>You don't have any server.</h4>
					</div>
				<!--USER-->
		<?php
			} else {
				echo '<div class="container"><h5>Incorrect email or password</h5></div>';
				echo '<div class="logout"><a href="logout.php" selected>Retry</a></div>';
			}
		?>
    </body>
</html>