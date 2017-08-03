	<?php
		include("dblink.php");
		$item_id=$_GET['item_id'];
		$sql="select * from item where item_id='$item_id'";
        $result=mysql_query($sql,$con);
        $row=mysql_fetch_array($result);
	?>
	<div class="container">
		<div class="col-md-6">
			<div class="login-panel panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Item</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="m-a-items-update.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Item Name" name="item_name" type="text" value="<?php echo $row[1]; ?>">
                                    <input type="hidden" name="item_id" value="<?php echo $row[0]; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Price" name="price" type="text" value="<?php echo $row[2]; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Brand Name" name="brand_name" type="text" value="<?php echo $row[4]; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Discount" name="discount" type="text" value="<?php echo $row[5]; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Size" name="size" type="text" value="<?php echo $row[6]; ?>">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="category">
                                        <option value="Clothings" <?php if($row[3]=='Clothings'){ echo "selected";} ?> >Clothings</option>
                                        <option value="Shoes" <?php if($row[3]=='Shoes'){ echo "selected";} ?> >Shoes</option>
                                        <option value="Bags" <?php if($row[3]=='Bags'){ echo "selected";} ?> >Bags</option>
                                        <option value="Accessories" <?php if($row[3]=='Accessories'){ echo "selected";} ?> >Accessories</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="item_loc" type="file" value="">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="submit" value="Update" class="btn btn-lg btn-warning btn-block">
                                </div>
                            </fieldset>
                        </form>
                    </div>
            </div>
		</div>
	</div>