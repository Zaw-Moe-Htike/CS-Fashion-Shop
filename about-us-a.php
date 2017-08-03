<?php
        $sql="select * from about";
        $result=mysql_query($sql,$con);
        $row=mysql_fetch_array($result);
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
			<h3>About Your Website</h3>
			<hr>
			<p>It is to insert General infomation about your website.</p>
		</div>
	</div>
	<div class="row">	
		<div class="col-lg-8 col-lg-offset-2">
			<form role="form" method="POST" action="about-us-a-update.php">
				  <textarea class="form-control" rows="6" name="a_c" placeholder="About Your Website ( Eg: It is Z M Htike Website )"><?php echo $row[1]; ?></textarea><br/>
				  <input type="submit" name="submit" value="Add/Update" class="btn btn-md btn-success">
			</form>    			
		</div>
	</div>
</div>
<br/>
