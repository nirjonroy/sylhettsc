
<?php 
session_start();
if(!isset($_SESSION['usrname'])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<?php include('../include/header.php');?>
<a href="logout.php" class="btn btn-danger">logout</a>
	<div class="col-md-4 col-sm-12">
<div class="list-group">
  				<a href="massage.php" class="list-group-item active">
    				Massage
  				</a>
  				<a href="notice.php" class="list-group-item  btn-danger">
    				Notice
  				</a>
  				<a href="notice.php" class="list-group-item  btn-danger">
    				Result
  				</a>
  				<a href="notice.php" class="list-group-item  btn-danger">
    				student
  				</a>
  				<a href="notice.php" class="list-group-item  btn-danger">
    				Teacher
  				</a>
  				
			</div>
	</div>		
</body>
</html>

