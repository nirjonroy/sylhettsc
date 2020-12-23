<?php

$roll = "";
$registration = "";
$name = "";
$class = "";
$father = "";
$mother = ""; 
$innovation_grade ="";
$innovation_cgpa ="";
$system_grade ="";
$system_cgpa ="";
$network_grade ="";
$network_cgpa ="";
 if(isset($_POST['submit'])){
 	$roll = $_POST['roll'];
 	$connect = mysqli_connect("localhost", "root", "", "system");
 	$query ="SELECT  `registration`,  `name`, `class`, `father`, `mother`, `innovation_grade`, `innovation_cgpa`, `system_grade`, `system_cgpa`, `network_grade`, `network_cgpa`  FROM `result7th` WHERE `roll` = $roll LIMIT 1";
 	$res = mysqli_query($connect, $query);

 	while($row = mysqli_fetch_array($res))
 	{
 		$registration = $row['registration'];
		$name = $row['name'];
		$class = $row['class'];
		$father = $row['father'];
		$mother = $row['mother'];
		$innovation_grade = $row['innovation_grade'];
		$innovation_cgpa = $row['innovation_cgpa'];
		$system_grade = $row['system_grade'];
		$system_cgpa = $row['system_cgpa'];		
		$system_grade = $row['network_grade'];
		$system_cgpa = $row['network_cgpa'];		
 	}

 	 mysqli_free_result($res);
 mysqli_close($connect);
 }
 else{
		
$registration = "";
$name = "";
$class = "";
$father = "";
$mother = ""; 
$innovation_grade ="";
$innovation_cgpa ="";
$system_grade ="";
$system_cgpa ="";
$network_grade ="";
$network_cgpa ="";
 }


 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body >
	<?php include('include/header.php'); ?>
	<div class="container-fluid">
		
	<div class="col-md-6 col-sm-6">	
		<h3>Personal Information </h3>
		<form action="checkmarksheet.php" method="post">
		<table class="table btn-group-justified" border="1px" >	
			<tr>	
				<td>Name</td>
				<td><?php echo $name ?></td>
			</tr>
			<tr>	
				<td>Roll</td>
				<td><input type="text" name="roll" value="<?php echo $roll ?>"></td>
			</tr>
			<tr>	
				<td>Registration</td>
				<td><?php echo $registration ?></td>
			</tr>
			<tr>	
				<td>Class</td>
				<td><?php echo $class ?></td>
			</tr>
			<tr>	
				<td>Father's Name</td>
				<td><?php echo $father ?></td>
			</tr>
			<tr>	
				<td>Mother's Name</td>
				<td><?php echo $mother ?></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>									
		</table>
		
	</div>	
	
	<div class="col-md-1 col-sm-1">	
		
	</div>	
	

	<div class="col-md-5 col-sm-5">
		<h3>Result Depend</h3>	
			<table class="table table-responsive " border="1px">
				<tr>	
					<td>Mark</td>
					<td>Point</td>
					<td>CGPA</td>
				</tr>
			</table>
	</div>	


	</div>

	<div class="container-fluid">
		<h1 style="text-align: center; background: gray; color: white; ">Result/ Marks/ CGPA</h1>
		 <div class="col-sm-12 col-md-12">	
		 	<table class="table table-responsive " border="1px">
		 		<tr style="background:yellow">	
		 			<td>Subject Code</td>
		 			<td>Subject Name</td>
		 			<td>Grade</td>
		 			<td>CGPA</td>	
		 		</tr>
		 		<tr style="">	
		 			<td>65853</td>
		 			<td>Innovation and Enterprenurship</td>
		 			<td><?php echo $innovation_grade ?></td>
		 			<td><?php echo $innovation_cgpa ?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66671</td>
		 			<td>System Analisis and Design</td>
		 			<td><?php echo $system_grade ?></td>
		 			<td><?php echo $system_cgpa ?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66672</td>
		 			<td>Network Administrator and Services</td>
		 			<td><?php echo $network_grade ?></td>
		 			<td><?php echo $network_cgpa ?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66673</td>
		 			<td>E-commerce and CMS</td>
		 			<td>Grade</td>
		 			<td>CGPA</td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66674</td>
		 			<td>Cyber Sucurity and Ethics</td>
		 			<td>Grade</td>
		 			<td>CGPA</td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66675</td>
		 			<td>Advanced Database Manage ment System</td>
		 			<td>Grade</td>
		 			<td>CGPA</td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66678</td>
		 			<td>Aaps Development</td>
		 			<td>Grade</td>
		 			<td>CGPA</td>	
		 		</tr>
		 	</table>

		</div> 
	</div>
	</form>
	<div class="container"> 
		<table class="table" >	
			<tr>	
				<td>Sign</td>
				<td>	</td>
				<td></td>
				<td>	</td>
				<td>Sign</td>	
			</tr>
		</table>
	</div>
</body>
</html>