<?php
	include("dblink.php");
	$cart_id=$_GET["cart_id"];
    $sql="update cart set rm=1 where cart_id='$cart_id'";
    if(mysql_query($sql,$con)){
        header("location:home.php?nam=cart"); 
    }
    else{
        echo "<br><h1>Error!</h1>";
    }
?>