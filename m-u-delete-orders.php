<?php
	include("dblink.php");
	$order_id=$_GET["order_id"];
    $sql="update order2 set rm=1 where order_id='$order_id'";
    if(mysql_query($sql,$con)){
        header("location:home.php?nam=orders"); 
    }
    else{
        echo "<br><h1>Error!</h1>";
    }
?>