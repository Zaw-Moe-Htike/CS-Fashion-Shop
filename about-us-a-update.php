<?php
    include("dblink.php");

        $about_content=$_POST['a_c'];
    
        $sql="update about set about_content='$about_content'";
        if(mysql_query($sql,$con)){
            header("location:admin-form.php?name=aboutus"); 
        }
        else{
            echo "<br><h1>Error!</h1>";
        }
?>