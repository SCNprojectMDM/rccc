<?php
session_start();
include_once('functies/functions.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Project</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<?php if(isNotLoggedIn()): ?>
		<nav class="navbar navbar-default navbara-fixed-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:13px; color: #17beed;"></span> Home</a></li>
                  <li><a href="upload.php"><span class="glyphicon glyphicon-upload" style="font-size:13px;"></span> Uploaden</a></li>
                  <li><a href="login.php"><span class="glyphicon glyphicon-user" style="font-size:13px; "></span> Inloggen</a></li>
                  <li><a href="register.php"><span class="glyphicon glyphicon-plus-sign" style="font-size:13px; color: #1aed17;"></span>  Registreren</a></li>
                </ul>
            </div>
          </div>
        </nav>
    <?php endif; ?>
    <?php if(isLoggedIN()): ?>
    			<nav class="navbar navbar-default navbara-fixed-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:13px; color: #17beed;"></span> Home</a></li>
                  <li><a href="upload.php"><span class="glyphicon glyphicon-upload" style="font-size:13px;"></span> Uploaden</a></li>
                  <li><a href="profile.php"><span class="glyphicon glyphicon-user" style="font-size:13px; "></span> <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-plus-sign" style="font-size:13px; color: #1aed17;"></span>  Uitloggen</a></li>
                </ul>
            </div>
          </div>
        </nav>
    <?php endif; ?>
        <div id="home2">
        	<div class="landing-text">
	            <h1><i>Het SCN Project</i></h1>
	            <h5>Created By ᴼᴿᴵᴳᴵᴻᴬᴸ, DM &amp; MF</h5>
	            <a href="tools.php"><span class="fa fa-wrench"><br>Tools</span></a>
	            <a href="vehicles.php"><span class="fa fa-car"><br>Vehicles</span></a>
	            <a href="aircrafts.php"><span class="fa fa-fighter-jet"><br>Aircrafts</span></a>
	            <a href="codes.php"><span class="fa fa-code"><br>Codes</span></a>
	            <a href="hacks.php"><span class="fa fa-eye"><br>Hacks</span></a>
	            <a href="music.php"><span class="fa fa-volume-up"><br>Music</span></a>
	            <a href="pictures.php"><span class="fa fa-photo"><br>Pictures</span></a>
	            <a href="nsfw.php"><span class="fa fa-minus-circle"><br>NSFW</span></a>
	            <a href="team.php"><span class="fa fa-users"><br>The Team</span></a>
          </div>
        </div>
