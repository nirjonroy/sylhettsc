<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style type="text/css">
		.login{
				background: ;
				background-color:rgba(0,0,0,0.3);
				width: 35%;
				height: 300px;
				margin-top: 30%;
				margin-left: 35%;
		}
	</style>

</head>
<body style="background: url(../img/nirjon.jpg); 
			width: 100%; 
			height: 650px;
			background-repeat: no-repeat;
			background-size: cover;
			background-clip:all ;
			">

		
			<div class = " login" >
				<h2 style="color:white; text-align: center;">Admin Login </h2>
					<form action="login.php" method="post" >
						<input type="text" name="username"  placeholder="User Name" class="form-control" style="width:300px; height: 50px;margin-left: 20%;"><br/>
						<input type="password" name="pass" placeholder="Password" 
						class="form-control" style="width:300px; height: 50px; margin-left: 20%;">
						<br/>
						<input type="submit" class="btn btn-warning" name="submit" style="width: 200px; height: 80px; margin-left: 30%; border-radius: 50px;">
					</form>
				
			</div>
		

	
</body>
</html>