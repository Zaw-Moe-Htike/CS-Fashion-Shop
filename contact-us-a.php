<?php
        if (isset($_POST['submit'])) {
            $contact_data=$_POST['contact_data'];

            $sql="insert into contact(contact_data)
                    values('$contact_data')";

            mysql_query($sql,$con);

            mysql_close($con);
        }
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
			<h3>How to contact Your Website</h3>
			<hr>
			<p>It is to insert Contact infomation about your website.</p>
		</div>
	</div>
	<div class="row">	
		<div class="col-lg-8 col-lg-offset-2">
			<form role="form" method="POST" action="#">
				  <textarea class="form-control" rows="6" placeholder="Contact informations of Your Website ( Eg: Phone-09123456)" name="contact_data"></textarea><br/>
				  <input type="submit" name="submit" value="Add" class="btn btn-md btn-success">
			</form>    			
		</div>
	</div>
</div>
<br/>