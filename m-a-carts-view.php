<?php
	$cart_id=$_GET['cart_id'];
	$sql="select * from cart where cart_id=$cart_id";
    $result=mysql_query($sql,$con);
    $row=mysql_fetch_array($result);
?>
<div class="container">
	<div class="col-sm-4 col-md-4"></div>
	<div class="col-sm-4 col-md-4">
		<div class='thumbnail'>
            <img src='images/item-pics/<?php echo $row[4]; ?>' alt=''>
            <div class='caption'>
                <h5 class='pull-right'><?php echo $row[0]; ?></h5>
                <h5><?php echo $row[2]; ?></h5>
                <p>
                    <h5><?php echo $row[3]; ?></h5>
                    <h5><?php echo $row[5]; ?></h5>
                    <a href="admin-form.php?name=carts" class="btn btn-sm btn-primary">Back</a>
                </p>
            </div>
        </div>
	</div>
	<div class="col-sm-4 col-md-4"></div>
</div>