<?php
    session_start();
    include("dblink.php");
     
        $user_id=$_POST['user_id'];
        $username=$_POST['name'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $address=$_POST['address'];
        $type=$_POST['type'];
        $password=$_POST['password1'];
    
        $sql="update user set user_name='$username',email='$email',phone_no='$phoneno',address='$address',type='$type',password='$password'
                where user_id='$user_id'";
        if(mysql_query($sql,$con)){
            header("location:admin-form.php?name=users"); 
        }
        else{
            echo "<br><h1>Error!</h1>";
        }
?>