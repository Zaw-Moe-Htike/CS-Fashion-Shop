<?php
	include("dblink.php");
	$item_id=$_GET["item_id"];
    $sql="delete from item where item_id='$item_id'";
    if(mysql_query($sql,$con)){
        header("location:admin-form.php?name=items"); 
    }
    else{
        echo "<br><h1>Error!</h1>";
    }
?>