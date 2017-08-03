<?php
	$sql="select * from contact";
    $result=mysql_query($sql,$con);
    $rownum=mysql_num_rows($result);
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 centered">
			<img src="images/pro-pics/pic1.jpg" alt="Stanley" width="300px" height="300px">
			<h1>Contact CS Fashion Shop</h1>
			<?php 
				for($i=0;$i<$rownum;$i++){
            	$row=mysql_fetch_array($result);
    		?>
			<h3><?php echo $row[1]; ?></h3>
			<?php
				}
			?>
		</div>
	</div>
</div>