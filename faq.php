<?php
	$sql="select * from faq";
    $result=mysql_query($sql,$con);
    $rownum=mysql_num_rows($result);
?>
<div class="container">
	<?php 
		for($i=0;$i<$rownum;$i++){
            $row=mysql_fetch_array($result);
    ?>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
			<h4><?php echo $row[1]; ?></h4>
			<p><?php echo $row[2]; ?></p>
			<hr/>
		</div>
	</div>
	<?php
		}
	?>
</div>