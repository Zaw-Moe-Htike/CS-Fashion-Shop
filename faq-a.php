<?php
        if (isset($_POST['submit'])) {
            $faq_question=$_POST['faq_question'];
            $faq_answer=$_POST['faq_answer'];

            $sql="insert into faq(faq_question,faq_answer)
                    values('$faq_question','$faq_answer')";

            mysql_query($sql,$con);

            mysql_close($con);
        }
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
			<h3>FAQ for Admin</h3>
			<hr>
			<p>It is to insert Q & A for Customer.</p>
		</div>
	</div>
	<div class="row">	
		<div class="col-lg-8 col-lg-offset-2">
			<form role="form" method="POST" action="#">
				  <div class="form-group">
				    <input type="text" name="faq_question" class="form-control" placeholder="Question ( Eg: How to solve this problem? )">
				  </div>
				  <textarea class="form-control" rows="6" name="faq_answer" placeholder="Answer ( Eg: You can solve yourself. )"></textarea><br/>
				  <input type="submit" name="submit" value="Add" class="btn btn-md btn-success">
			</form>    			
		</div>
	</div>
</div>
<br/>