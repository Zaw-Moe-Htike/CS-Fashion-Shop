<?php
	include("dblink.php");
	$cart_id=$_GET["cart_id"];
    $sql="delete from cart where cart_id='$cart_id'";
    if(mysql_query($sql,$con)){
        header("location:admin-form.php?name=carts"); 
    }
    else{
        echo "<br><h1>Error!</h1>";
    }
?>