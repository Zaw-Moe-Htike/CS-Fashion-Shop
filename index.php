<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php include("header-guest.php"); ?>

	<?php
		$n=$_GET['n'];
		if($n=='login'){
			include("m-g-login.php");
		}
		if($n=='register'){
			include("m-g-register.php");
		}
		if($n=='shoes'){
			include("m-g.php");
		}
		if($n=='bags'){
			include("m-g.php");
		}
		if($n=='clothings'){
			include("m-g.php");
		}
		if($n=='accessories'){
			include("m-g.php");
		}
		if($n=='brands'){
			include("m-g.php");
		}
		if($n==null){
			$n='brands';
			include('m-g.php');
		}
	?>

	<?php include("footer-guest.php"); ?>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="jquery/jquery.js"></script>
</body>
</html>