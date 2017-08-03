<?php
    session_start();
    include("dblink.php");

    $email=$_SESSION['email'];
     
        $username=$_POST['name'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $address=$_POST['address'];
        $password=$_POST['password1'];
    
        $sql="update user set user_name='$username',email='$email',phone_no='$phoneno',address='$address',password='$password'
                where email='$email'";
        if(mysql_query($sql,$con)){
            header("location:home.php?nam=profile"); 
        }
        else{
            echo "<br><h1>Error!</h1>";
        }
?>