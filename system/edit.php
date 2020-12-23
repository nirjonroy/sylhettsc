<?php 

require_once 'php_action/db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM result7th WHERE id = $id";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Result information</legend>

	<form action="php_action/update.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th> Name</th>
				<td><input type="text" name="name" placeholder=" Name" value="<?php echo $data['name'] ?>" /></td>
			</tr>		
			<tr>
				<th>Roll</th>
				<td><input type="text" name="roll" placeholder="Last Name" value="<?php echo $data['roll'] ?>" /></td>
			</tr>
			<tr>
				<th>Registration</th>
				<td><input type="text" name="registration" placeholder="Age" value="<?php echo $data['registration'] ?>" /></td>
			</tr>
			<tr>
				<th>Class</th>
				<td><input type="text" name="class" placeholder="Contact" value="<?php echo $data['class'] ?>" /></td>
			</tr>
			<tr>
				<th>father</th>
				<td><input type="text" name="father" placeholder="father" value="<?php echo $data['father'] ?>" /></td>
			</tr>
			<tr>
				<th>Mother's name</th>
				<td><input type="text" name="mother" placeholder="Mother's name" value="<?php echo $data['mother'] ?>" /></td>
			</tr>	
			<tr>
				<th>Innovation_Grade</th>
				<td><input type="text" name="innovation_grade" placeholder="innovation_grade" value="<?php echo $data['innovation_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>Innovation_CGPA</th>
				<td><input type="text" name="innovation_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['innovation_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>System_Grade</th>
				<td><input type="text" name="system_grade" placeholder="innovation_grade" value="<?php echo $data['system_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>System_CGPA</th>
				<td><input type="text" name="system_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['system_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>Network_Grade</th>
				<td><input type="text" name="network_grade" placeholder="innovation_grade" value="<?php echo $data['network_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>network_CGPA</th>
				<td><input type="text" name="network_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['network_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>E-commerce_Grade</th>
				<td><input type="text" name="ecommerce_grade" placeholder="innovation_grade" value="<?php echo $data['ecommerce_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>ecommerce_CGPA</th>
				<td><input type="text" name="ecommerce_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['ecommerce_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>Cyber_Grade</th>
				<td><input type="text" name="cyber_grade" placeholder="innovation_grade" value="<?php echo $data['cyber_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>Cyber_CGPA</th>
				<td><input type="text" name="cyber_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['cyber_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>advance_Grade</th>
				<td><input type="text" name="advance_grade" placeholder="innovation_grade" value="<?php echo $data['advance_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>advance_CGPA</th>
				<td><input type="text" name="advance_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['advance_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>Apps_Grade</th>
				<td><input type="text" name="apps_grade" placeholder="innovation_grade" value="<?php echo $data['apps_grade'] ?>" /></td>
			</tr>
			<tr>
				<th>Apps_CGPA</th>
				<td><input type="text" name="apps_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['apps_cgpa'] ?>" /></td>
			</tr>
			<tr>
				<th>Total_CGPA</th>
				<td><input type="text" name="total_cgpa" placeholder="innovation_cgpa" value="<?php echo $data['total_cgpa'] ?>" /></td>
			</tr>		
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>
	<script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>