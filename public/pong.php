<?php  
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
	<style>
			body 
			{
				background-image: url("css/img/spiral.gif");
				background-repeat: no-repeat;
				width: 100%;
				height: 100%;
				
				
			}
				h2 
			{
				color: black;

				
			}
			h1
			{
				color: black;
				
			}
			#derp
			{
				position: absolute;
				top: 70px;
				left: 180px;
				width: 240px;
				height: 240px;
				border: 1px solid black;
				text-align: center;
				border-radius: 240px;
				background-color: #660066;
				z-index: 5;
			}
			#derp2 
			{
				position: absolute;
				top: 180px;
				left: 140px;
				width: 180px;
				height: 180px;
				border: 1px solid black;
				text-align: center;
				border-radius: 180px;
				background-color: #4d004d;
				z-index: 4;
			}
			#derp3
			{
				position: absolute;
				top: 320px;
				left: 150px;
				width: 80px;
				height: 80px;
				border: 1px solid black;
				text-align: center;
				border-radius: 80px;
				background-color: #340034;
				z-index: 3;
			}
			#derp4
			{
				position: absolute;
				top: 390px;
				left: 160px;
				width: 30px;
				height: 30px;
				border: 1px solid black;
				text-align: center;
				border-radius: 30px;
				background-color: #1a001a;
				z-index: 2;
			}#derp5
			{
				position: absolute;
				top: 420px;
				left: 165px;
				width: 10px;
				height: 10px;
				border: 1px solid black;
				text-align: center;
				border-radius: 10px;
				background-color: #0d0620;
				z-index: 1;
			}
		</style>
</head>
<body>
<div id = "derp">
		<h1 id = "display"> 
			<?= $counter; ?>
		</h1>
		<h2>PONG</h2>
		

			<button id = "btnU">
				<a href = "ping.php?counter=<?= $counter +1 ?>">
					Hit
				</a>
			</button>

			<button id = "btnD">
				<a href = "ping.php">
					Miss
				</a>
			</button>
			</div>
			<div id = "derp2">
			</div>
			<div id = "derp3">
			</div>
			<div id = "derp4">
			</div>
			<div id = "derp5">
			</div>



</body>
</html>