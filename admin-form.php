<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <?php include("header-admin.php"); ?>

    <?php 
    	$name=$_GET['name'];
    	if($name=='users'){
    		include("m-a-users.php");
    	}
    	if($name=='items'){
    		include("m-a-items.php");
    	}
    	if($name=='orders'){
    		include("m-a-orders.php");
    	}
    	if($name=='carts'){
    		include("m-a-carts.php");
    	}
    	if($name=='profile'){
    		include("m-a-profile.php");
    	}
        if($name==null){
            include('m-a-profile.php');
        }
        if($name=='items-add'){
            include('items-add.php');
        }
    ?>

    <?php include("footer-admin.php"); ?>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="jquery/jquery.js"></script>
</body>
</html>