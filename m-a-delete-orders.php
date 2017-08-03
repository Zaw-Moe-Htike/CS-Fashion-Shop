<?php
	include("dblink.php");
	$order_id=$_GET["order_id"];
    $sql="delete from order2 where order_id='$order_id'";
    if(mysql_query($sql,$con)){
        header("location:admin-form.php?name=orders"); 
    }
    else{
        echo "<br><h1>Error!</h1>";
    }
?>