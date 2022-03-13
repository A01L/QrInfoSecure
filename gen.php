<?php
require_once __DIR__ . '/phpqrcode/qrlib.php';
$wap = $_POST['what'];
$url= $_POST['link'];
$num = $_POST['number'];

$toknum = mt_rand(1000, 9999);
$tokurl = mt_rand(1000, 9999);
$tokwap = mt_rand(1000, 9999);

$pgnum = "$toknum$num.png";
$pgurl = "$tokurl$toknum.png";
$pgwap = "$tokwap$wap.png";
$nat = "https://wa.me/$wap";

QRcode::png($url, $pgurl, "L", 4, 4); 
QRcode::png($num, $pgnum, "L", 4, 4); 
QRcode::png($nat, $pgwap, "L", 4, 4); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>QR</title>
</head>
<body style="background-color: gray;">
    <br>
    <div style="width: 100%;">
    	<div style="width: 80%; margin-left: 10%;">
    		<br>
    		<br>
    		<br>
    		<div style="background-color: white; border-radius: 60px;">
    			<center>
	<h1 class="qrt">Number</h1>
	</center>
	</div>
	<br>
	<div style="background-color: black; border-radius: 100px;">
	<img src="<?php echo $pgnum ?>" class="qri">
	<br>
	<br>
	<br>
	<img src="<?php echo $pgnum ?>" class="qris">
	<a href="<?php echo $pgnum ?>" class="qris" download style="text-decoration: none;">
	<h1 style="color: white; font-size: 5em; font-family: lucida console; margin-left: 20%;">Download</h1>
	</a>
	</div>
	 <br>
	<div style="background-color: white; border-radius: 60px;">
    			<center>
	<h1 class="qrt">Web-URL</h1>
	</center>
	</div>
	<br>
	<div style="background-color: black; border-radius: 100px;">
	<img src="<?php echo $pgurl ?>" class="qri">
	<br>
	<br>
	<br>
	<img src="<?php echo $pgurl ?>" class="qris">
	<a href="<?php echo $pgurl ?>" class="qris" download style="text-decoration: none;">
	<h1 style="color: white; font-size: 5em; font-family: lucida console; margin-left: 20%;">Download</h1>
    </a>
	</div>
	 <br>
	<div style="background-color: white; border-radius: 60px;">
    			<center>
	<h1 class="qrt">WhatsApp</h1>
	</center>
	</div>
	<br>
	<div style="background-color: black; border-radius: 100px;">
	<img src="<?php echo $pgwap ?>" class="qri">
	<br>
	<br>
	<br>z
	<img src="<?php echo $pgwap ?>" class="qris">
	<a href="<?php echo $pgwap ?>" class="qris" download style="text-decoration: none;">
	<h1 style="color: white; font-size: 5em; font-family: lucida console; margin-left: 20%;">Download</h1>
    </a>
	</div>
	</div>
    </div>
    <div style="background-color: gray; width: 100%; height: 100px;">
    	
    </div>
    <style type="text/css">
    	img.qri {
    		width: 100%;
    		border-radius: 100px;
    	}
    	img.qris {
    		width: 50%;
    		border-radius: 100px;
    	}
    	h1.qrt {
    		font-size: 4em;
    		font-family: lucida console;
    	}
    </style>
</body>
</html>