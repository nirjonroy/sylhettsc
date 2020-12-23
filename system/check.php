<?php

$roll = "";
$registration = "";
$result = "";

 if(isset($_POST['submit'])){
 	$roll = $_POST['roll'];
 	$connect = mysqli_connect("localhost", "root", "", "system");
 	$query ="SELECT  `registration`,  `result` FROM `result7th` WHERE `roll` = $roll LIMIT 1";
 	$res = mysqli_query($connect, $query);

 	while($row = mysqli_fetch_array($res))
 	{
 		$registration = $row['registration'];
		$result = $row['result'];
 	}

 	 mysqli_free_result($res);
 mysqli_close($connect);
 }
 else{
		
$registration = "";
$result = "";

 }


 ?>

<?php include('include/header.php'); ?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<div class = "container-fluid">
		
		<div class="jumbotron" style=" background:#DEB887; width: 50%; height:300px; margin-top: 10%; 
		margin-left: 20%; ">
			<h2 style="text-align:center; ">Search your Result </h2>
	<form action="check.php" method="post">		
		<table>
			<tr>
				<td>Roll</td>
				<td><input type="text" name="roll" class="form-control" style="background:#7FFF00;"> </td>
			</tr>
			<tr>
				<td></td>
				<td> </td>
			</tr>
			<tr>
				<td>Registration</td>
				<td><input type="text" name="registration" class="form-control" style="background:#7FFF00; margin: 5px;" value="<?php echo $registration ?>"> </td>
			</tr>
			<tr>
				<td>Result</td>
				<td><!-- <input type="text" name="result" class="form-control" style="background:#7FFF00;"> value=" -->
					<div><?php echo $result ?></div> </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit" class="btn btn-warning"></td>
				<td></td>
				<td></td>
				<td><button class="btn btn-danger"><a href="checkmarksheet.php">Marksheet</a></button></td>
			</tr>				
		</table>
	</form>	
	
	
		</div>

	</div>


<!-- <?php include('include/footer.php'); ?> -->