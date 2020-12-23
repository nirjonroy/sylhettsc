<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>

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
	<legend>Add Student Information</legend>

	<form action="php_action/create.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Student Name</th>
				<td><input type="text" name="name" placeholder="Student Name" /></td>
			</tr>		
			<tr>
				<th>Roll</th>
				<td><input type="text" name="roll" placeholder="roll" /></td>
			</tr>
			<tr>
				<th>Registration</th>
				<td><input type="text" name="registration" placeholder="Registration" /></td>
			</tr>
			<tr>
				<th>class</th>
				<td><input type="text" name="class" placeholder="class" /></td>
			</tr>
			<tr>
				<th>Father's Name</th>
				<td><input type="text" name="father" placeholder="father's name"></td>
			</tr>
			<tr>
				<th>Mother's Name</th>
				<td><input type="text" name="mother" placeholder="mother's name"></td>
			</tr>
			<tr>
				<th>Innovation_Grade</th>
				<td><input type="text" name="innovation_grade" placeholder="innovation_Grade"></td>
			</tr>
			<tr>
				<th>Innovation_Cgpa</th>
				<td><input type="text" name="innovation_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>				
			<tr>
				<th>System _Grade</th>
				<td><input type="text" name="system_grade" placeholder="Innovation_cgpa"></td>
			</tr>										
			<tr>
				<th>system_Cgpa</th>
				<td><input type="text" name="system_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>
			<tr>
				<th>network _Grade</th>
				<td><input type="text" name="network_grade" placeholder="Innovation_cgpa"></td>
			</tr>										
			<tr>
				<th>system_Cgpa</th>
				<td><input type="text" name="network_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>									
			<tr>
				<th>ecommecce _Grade</th>
				<td><input type="text" name="ecommerce_grade" placeholder="Innovation_cgpa"></td>
			</tr>										
			<tr>
				<th>ecommerce_Cgpa</th>
				<td><input type="text" name="ecommerce_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>
			<tr>
				<th>cyber _Grade</th>
				<td><input type="text" name="cyber_grade" placeholder="Innovation_cgpa"></td>
			</tr>										
			<tr>
				<th>cyber_Cgpa</th>
				<td><input type="text" name="cyber_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>
			<tr>
				<th>advance _Grade</th>
				<td><input type="text" name="advance_grade" placeholder="Innovation_cgpa"></td>
			</tr>										
			<tr>
				<th>advance_Cgpa</th>
				<td><input type="text" name="advance_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>
			<tr>
<tr>
				<th>apps _Grade</th>
				<td><input type="text" name="apps_grade" placeholder="Innovation_cgpa"></td>
			</tr>										
			<tr>
				<th>apps_Cgpa</th>
				<td><input type="text" name="apps_cgpa" placeholder="Innovation_cgpa"></td>
			</tr>
			<tr>				
				<td><button type="submit">check </button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>			
		</table>
	</form>

</fieldset>

</body>
</html>