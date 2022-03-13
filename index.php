<!DOCTYPE html>
<html lang="ru">
<head>
	<title>QR-Card system</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	body {
		background-color: blue;
		width: 100%;

	}
	.main {
		background-color: white;
		width: 99%;
		height: 500px;
		margin-top: 100px;
		border-radius: 30px;
	}
	h1 {
		color: blue;
		font-family: Arial;
	}
	.val {
		border: 5px solid blue;
		border-radius: 30px;
		font-family: lucida console;
		padding-left: 10px;
		margin-top: 20px;
		width: 250px;
	}
	.gen {

	}
	label {
		color: blue;
		font-family: lucida console;
	}
	.ccc {
	
	}
	.pin {
		background-color: blue;
		color: white;
		border-radius: 30px;
		border: 3px solid blue;
		width: 100px;
	}
	button.gen {
		background-color: white;
		border:5px solid blue;
		border-radius:30px;
		color: blue;
		font-family: arial;
		font-size: 1.5em;
	}
	div.sca {
		background-color: white;
		color: blue;
		width: 130px;
		margin-left: 550px;
		margin-top: 100px;
		border-radius: 50px;
	}
	.scan {
		width: 100%;
		height: 200px;
	}
	a {
		text-decoration: none;
	}
</style>
<body>

<div class="main">
	<br>
	<center><h1>QR-Card</h1></center>
	<center>
	<div class="gen">
		<form method="post" action="gen/rsa.php">
			<br>
			<label>Max lenght: 30 simbols</label>
			<br>
			<input type="text" name="val1" placeholder="Text 1..." class="val">
			<br>
			<input type="text" name="val2" placeholder="Text 2..." class="val">
			<br>
			<input type="text" name="val3" placeholder="Text 3..." class="val">
			<br>
			<input type="text" name="val4" placeholder="Text 4..." class="val">
			<br>
			<input type="text" name="val5" placeholder="Text 5..." class="val">
			<br>
			<br>
			<div class="ccc">
			<label><b>PIN</b></label>
			<br>
			<input type="number" name="pin" placeholder="PIN for QR" class="pin" maxlength="6">
			</div>
			<br>
			
			<button class="gen"><b>GENERATE</b></button>
		</form>
	</div></center>
	<div class="scan">
		<a href="scan/index.php">
		<div class="sca">
		<h1 class="sca">QR-LOG</h1>
		</div>
		</a>
	</div>
</div>

</body>
</html>