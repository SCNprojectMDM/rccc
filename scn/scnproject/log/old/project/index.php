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
		<link rel="stylesheet" href="styles.css">
		<meta http-equiv="refresh" content="4.5;url=home.php" />
	</head>
	<body>


		      <div id="home">
		      	<div class="landing-text">
		      		<h1>SCN PROJECT </h1>
		      		<h3></h3>
		      		<a href="page.php" class="btn btn-default btn-lg">Made by ᴼᴿᴵᴳᴵᴻᴬᴸ, DM &amp; MF</a>
		      		<br><br>
		      		<p>U wordt doorgelinkt in: <span class="c" id="5"></span> seconden</p>
		      		
		      	</div>
		      </div>

				<script>
					function c(){
					    var n=$('.c').attr('id');
					    var c=n;
					    $('.c').text(c);
					    setInterval(function(){
					        c--;
					        if(c>=0){
					            $('.c').text(c);
					        }
					        if(c==0){
					            $('.c').text(n);
					        }
					    },1000);
					}

					// Start
					c();

					// Loop
					setInterval(function(){
					    c();
					},5000);
				</script>
	</body>
</html>