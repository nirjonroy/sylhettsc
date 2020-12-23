<?php include('include/header.php'); ?>

<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:logg.php');
}

?>

<a href="logout.php" class="btn btn-danger">logout</a>
<h1>welcome <?php echo $_SESSION['username']; ?> </h1>

<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</style>

</head>
<body>

<div class="manageMember">
	<a href="create.php" ><button type="button" class="btn btn-success" name ="button">add Result</button></a>
	<table border="1" cellspacing="0" cellpadding="0" class="table">
		<thead>
			<tr style="background-color: #c85a53; color: #9a0200;">
				<th>Name</th>
				<th>Roll</th>
				<th>Registration</th>
				<th>class</th>
				<th>Father's Name</th>
				<th>Mother's Name</th>
				<th>Innovation Grade</th>
				<th>Innovation CGPA</th>
				<th>System Analysis Grade</th>
				<th>System Analysis CGPA</th>
				<th>Network Grade</th>
				<th>Network CGPA</th>
				<th>E-commerce Grade</th>
				<th>E-commerce CGPA</th>
				<th>Cyber Grade</th>
				<th>Cyber CGPA</th>
				<th>ADBMS Grade</th>
				<th>ADBMS CGPA</th>
				<th>Apps Grade</th>
				<th>Apps CGPA</th>
				<th>Total CGPA</th>

				<th>Option</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM `result7th` WHERE 1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['name']."</td>
						<td>".$row['roll']."</td>
						<td>".$row['registration']."</td>
						<td>".$row['class']."</td>
						<td>".$row['father']."</td>
						<td>".$row['mother']."</td>
						<td>".$row['innovation_grade']."</td>
						<td>".$row['innovation_cgpa']."</td>
						<td>".$row['system_grade']."</td>
						<td>".$row['system_cgpa']."</td>
						<td>".$row['network_grade']."</td>
						<td>".$row['network_cgpa']."</td>
						<td>".$row['ecommerce_grade']."</td>
						<td>".$row['ecommerce_cgpa']."</td>
						<td>".$row['cyber_grade']."</td>
						<td>".$row['cyber_cgpa']."</td>
						<td>".$row['advance_grade']."</td>
						<td>".$row['advance_cgpa']."</td>
						<td>".$row['apps_grade']."</td>
						<td>".$row['apps_cgpa']."</td>
						<td>".$row['total_cgpa']."</td>								
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button' class = 'btn btn-danger'>Edit</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button' class = 'btn btn-warning'>Remove</button></a>
						</td>

					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>