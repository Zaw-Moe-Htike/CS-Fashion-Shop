<?php
	include("dblink.php");
	$user_id=$_GET["user_id"];
    $sql="delete from user where user_id='$user_id'";
    if(mysql_query($sql,$con)){
        header("location:admin-form.php?name=users"); 
    }
    else{
        echo "<br><h1>Error!</h1>";
    }
?>