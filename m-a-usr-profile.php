<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <?php include("dblink.php"); ?>
    <?php include("header-admin.php"); ?>
    <?php 
        $email=$_GET['email'];
        $sql="select * from user where email='$email'";
        $result=mysql_query($sql,$con);
        $row=mysql_fetch_array($result);
    ?>
    <div class="container">
        <div class="col-md-6">
            <div class="login-panel panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Profile</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="m-a-usr-profile-update.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" value="<?php echo $row[1] ?>">
                                    <input type="hidden" name="user_id" type="text" value="<?php echo $row[0] ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" value="<?php echo $row[2] ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Address" name="address" type="text" value="<?php echo $row[4] ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Phone No" name="phoneno" type="text" value="<?php echo $row[3] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Account Type</label>
                                    <select class="form-control" name="type">
                                        <option value="User" <?php if($row[5]=='User'){ echo "selected";} ?> >User</option>
                                        <option value="Admin" <?php if($row[5]=='Admin'){ echo "selected";} ?> >Admin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password1" type="text" value="<?php echo $row[6] ?>">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="update" value="Update" class="btn btn-lg btn-warning btn-block"/>
                                </div>
                            </fieldset>
                        </form>
                    </div>
            </div>
        </div>
    </div>
<?php include("footer-admin.php"); ?>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery/jquery.js"></script>
</body>
</html>