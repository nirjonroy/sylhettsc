<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once 'db_connection.php'; ?>
<?php include('include/header.php');?>
<form action="notice.php" method="post">
<table class="table animated shake" border="1px">
	<tr>
		<td> #</td>
		<td>Notice head</td>
		<td>published date </td>
		<td>Download</td>
	</tr>
	<tr>
<?php 
	$sql = "SELECT * FROM notice WHERE 1";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
		echo "<tr> 
			<td>".$row['id']."</td>
			<td>".$row['notice_head']."</td>
			<td>".$row['published_date']."</td>
			<td>".$row['download']."</td>

		</tr>";


	}
}

	?>
	</tr>
</table>
</form>
<?php include('include/footer.php');?>
</body>
</html>