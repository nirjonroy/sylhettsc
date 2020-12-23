
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php include('include/header.php');?>
<div class="container">
	
<form action="login.php" method="post">
	<div class="jumbotron" style="width: 40%; height: auto; margin-left: 30%; background: #806947; border-radius: 20px; color:#383e58; margin-top: 18%">
			<h2>Login Form</h2>
		<input type="text" name="username" placeholder="Type your correct username" class="form-control"> <br/>
		<input type="password" name="password" placeholder="Type  your password" class="form-control">
		<input type="submit" name="submit" class="btn btn-danger">
		
	</div>
</form>	
</div>
<?php include('include/footer.php');?>
</body>
</html>