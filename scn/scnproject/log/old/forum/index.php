<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8">
		<title>TheForm&reg;</title>
		<link rel="stylesheet" href="./css/styles.css">
	</head>
		<body>
			<header>
				<div class="container">
			        <div id="titel">
			          <a href="#"><h1><span class="highlight">The</span></span>Forum</h1></a>
			        </div>
			        <nav>
			          <ul>
			            <li><a href="#"><i class="home"></i>Home</a></li>
			            <li><a href="team.html">Ons Team</a></li>
			            <li><a href="tekst.html">Trending</a></li>
			            <li><a href="tekst.html">Contact</a></li>
			          </ul>
			        </nav>
			      </div>
			</header>
			<div class="container">
				<div id="panel">
					<div class="wrapper">
						<div class="news"><marquee><?php
						echo "Last updated: ".date("F d Y H:i:s.",filemtime("index.php"));
						?></marquee></div>
					<div class="usersection">
						Welcome gast! <span class="loginbutton"><a href="login.php"><i style="font-size: 14px;" class="loginlogo"></i> Login</a></span> <span class="registerbutton"><a href="register.php"><i style="font-size: 14px;" class="fa fa-user fa-fw"></i> Registreren</a></span>
					</div>
				</div>
			</div>
		</div>
			<br>
			<div class="container">
				<div id="balk1"><a href="index.html"><p>TheForm &rarr;</p></a></div>
			</div>
		</body>
</head>