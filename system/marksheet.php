

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
$ecommerce_grade ="";
$ecommerce_cgpa ="";
$cyber_grade ="";
$cyber_cgpa ="";
$advance_grade ="";
$advance_cgpa ="";
$apps_grade ="";
$apps_cgpa ="";
$total_cgpa ="";

 if(isset($_POST['submit'])){
 	$roll = $_POST['roll'];
 	$connect = mysqli_connect("localhost", "root", "", "system");
 	// $query ="SELECT  `registration`,  `name`, `class`, `father`, `mother`, `innovation_grade`, `innovation_cgpa`, `system_grade`, `system_cgpa`, `network_grade`, `network_cgpa`  FROM `result7th` WHERE `roll` = $roll LIMIT 1";
 	
 	$query ="SELECT  `registration`, `result`, `name`, `class`, `father`, `mother`, `innovation_grade`, `innovation_cgpa`, `system_grade`, `system_cgpa`, `network_grade`, `network_cgpa`, `ecommerce_grade`, `ecommerce_cgpa`, `cyber_grade`, `cyber_cgpa`, `advance_grade`, `advance_cgpa`, `apps_grade`, `apps_cgpa`, `ecommerce_grade`, `ecommerce_cgpa`, `cyber_grade`, `cyber_cgpa`, `advance_grade`, `advance_cgpa`, `apps_grade`, `apps_cgpa`, `total_cgpa`  FROM `result7th` WHERE `roll` =$roll";
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
		$network_grade = $row['network_grade'];
		$network_cgpa = $row['network_cgpa'];
		$ecommerce_grade = $row['ecommerce_grade'];
		$ecommerce_cgpa = $row['ecommerce_cgpa'];
		$cyber_grade = $row['cyber_grade'];
		$cyber_cgpa = $row['cyber_cgpa'];
		$advance_grade = $row['advance_grade'];
		$advance_cgpa = $row['advance_cgpa'];
		$apps_grade = $row['apps_grade'];
		$apps_cgpa = $row['apps_cgpa'];
		$total_cgpa = $row['total_cgpa'];				
 	
 	}

 	 mysqli_free_result($res);
 mysqli_close($connect);
 }
 else{
		
$registration = "";
$name = "????";
$class = "";
$father = "";
$mother = ""; 
$innovation_grade ="";
$innovation_cgpa ="";
$system_grade ="";
$system_cgpa ="";
$network_grade ="";
$network_cgpa ="";
$ecommerce_grade ="";
$ecommerce_cgpa ="";
$cyber_grade ="";
$cyber_cgpa ="";
$advance_grade ="";
$advance_cgpa ="";
$apps_grade ="";
$apps_cgpa ="";
$total_cgpa =""; 
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
		<form action="marksheet.php" method="post">
		<table class="table btn-group-justified" border="1px" style="" >	
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
	

	<div class="col-md-5 col-sm-5" style="width: 300px; margin-left:0px; height: auto; ">
		<h3>Result Depend</h3>	
			<table class="table table-responsive " border="1px">
				<tr>	
					<td>Marks</td>
					<td>Point</td>
					<td>CGPA</td>
				</tr>
				<tr>	
					<td>80-100</td>
					<td>A+</td>
					<td>4.00</td>
				</tr>
				<tr>	
					<td>70-79</td>
					<td>A</td>
					<td>3.75</td>
				</tr>
				<tr>	
					<td>60-69</td>
					<td>A-</td>
					<td>3.50</td>
				</tr>
				<tr>	
					<td>50-59</td>
					<td>B+</td>
					<td>3.25</td>
				</tr>
				<tr>	
					<td>40-49</td>
					<td>B-</td>
					<td>3.00</td>
				</tr>
				<tr>	
					<td>33-39</td>
					<td>C</td>
					<td>2.75</td>
				</tr>
				<tr>	
					<td>0-32</td>
					<td>F</td>
					<td>0.00</td>
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
		 			<td><?php echo $ecommerce_grade ?></td>
		 			<td><?php echo $ecommerce_cgpa?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66674</td>
		 			<td>Cyber Sucurity and Ethics</td>
		 			<td><?php echo $cyber_grade ?></td>
		 			<td><?php echo $cyber_cgpa?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66675</td>
		 			<td>Advanced Database Manage ment System</td>
		 			<td><?php echo $advance_grade ?></td>
		 			<td><?php echo $advance_cgpa?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td>66678</td>
		 			<td>Apps Development</td>
		 			<td><?php echo $apps_grade ?></td>
		 			<td><?php echo $apps_cgpa?></td>	
		 		</tr>
		 		<tr style="">	
		 			<td></td>
		 			<td>Total</td>
		 			<td></td>
		 			<td><?php echo $total_cgpa?></td>	
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
<?php include('include/footer.php');?>
</body>
</html>