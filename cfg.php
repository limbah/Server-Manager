<!DOCTYPE html>
<?php
    include('info.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<title>
            <?php
                echo $host . ' | Configuration'
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
					<li><a href="dashboard"><i class="material-icons">keyboard_arrow_left</i></a></li>
				</ul>
                <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>
                <?php
                    echo $host
                ?>
                </a>
				<ul class="right">
					<li><a href="logout.php"><i class="material-icons">logout</i></a></li>
				</ul>
			</div>
        </nav>
        <?php
			session_start();
			$_SESSION['log'];

			if ($_SESSION['log'] == "admin"){
		?>
				<!--admin-->
					<div class="container">
                        <h3>Configuration</h3>

                        <h5>Config File</h5>
						<form method="post"> 
                            <input type="submit" name="dl1" value="Download" class="grey btn"/>
                            <input type="submit" name="rst" value="Reset" class="red btn"/>
						</form>
                        <?php
                            if(isset($_POST['dl1'])){
                                header('location: functions/download.php');
                            }
                            if(isset($_POST['rst'])){
                                echo '<iframe src="functions/reset.php" class="mcs"></iframe>';
                            }
                        ?>

                        <h5>Upload your config file</h5>
                        <form class="col s12" action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn blue">
                                        <span>Browse</span>
                                        <input type="file"/ name="image">
                                    </div>
                                    
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="config.ini"/>
                                    </div>
                                </div>
                                <input class="btn green" type="submit" label="Upload"/>
                            </div>
                            <?php
                                if(isset($_FILES['image'])){
                                    $errors= array();
                                    $file_name = $_FILES['image']['name'];
                                    $file_size =$_FILES['image']['size'];
                                    $file_tmp =$_FILES['image']['tmp_name'];
                                    $file_type=$_FILES['image']['type'];
                                    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                                    $extensions= array("ini");

                                    if(in_array($file_ext, $extensions)=== false){
                                        $errors[]="extension not allowed, please choose a <em>INI</em> file.";
                                    }
                                    if($file_size > 2097152){
                                        $errors[]='File size must be under 2 Mb';
                                    }
                                    if(empty($errors)==true){
                                        move_uploaded_file($file_tmp, "cfg/" . $file_name);
                                        echo '<div class="center">Success !</div>';
                                    }else{
                                        print_r($errors);
                                    }
                                }
                            ?>
                        </form>
                    </div>
                <!--admin-->
        <?php
			} else {
				echo '<div class="container"><h5>Incorrect email or password</h5></div>';
				echo '<div class="logout"><a href="logout.php">Retry</a></div>';
			}
        ?>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>