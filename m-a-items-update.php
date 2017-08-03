<?php
    session_start();
    include("dblink.php");
     
        $item_id=$_POST['item_id'];
        $item_name=$_POST['item_name'];
        $price=$_POST['price'];
        $brand_name=$_POST['brand_name'];
        $discount=$_POST['discount'];
        $size=$_POST['size'];
        $category=$_POST['category'];
    
        $sql="update item set item_name='$item_name',price='$price',brand_name='$brand_name',discount='$discount',size='$size',category='$category'
                where item_id='$item_id'";
        if(mysql_query($sql,$con)){
            header("location:admin-form.php?name=items"); 
        }
        else{
            echo "<br><h1>Error!</h1>";
        }
?>