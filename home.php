<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php include("header-user.php"); ?>

	<?php 
		$nam=trim($_GET['nam']);
		if($nam=='profile'){
			include('m-u-profile.php');
		}
		if($nam=='orders'){
			include('m-u-orders.php');
		}
		if($nam=='cart'){
			include('m-u-cart.php');
		}
		if($nam=='shoes'){
			include("m-u-buy.php"); 
		}
		if($nam=='bags'){
			include("m-u-buy.php"); 
		}
		if($nam=='clothings'){
			include("m-u-buy.php"); 
		}
		if($nam=='accessories'){
			include("m-u-buy.php"); 
		}
		if($nam=='brands'){
			include("m-u-buy.php"); 
		}
		if($nam==''){
			include("m-u-buy.php");
		}
	?>

	<?php include("footer-user.php"); ?>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery/jquery.js"></script>
</body>
</html>