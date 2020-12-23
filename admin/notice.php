<?php
require_once '../db_connection.php';


if('submit'){

	$published_date = $_POST['published_date'];
	$notice_head = $_POST['notice_head'];
	$download = $_POST['download'];

	$sql = "INSERT INTO notice (published_date, notice_head, download) VALUES ('$published_date', '$notice_head', '$download') ";

	if($conn->query($sql) == True){
		echo "notice added successfully";
	}
}



?>

<form action="notice.php" method="post" enctype="multipart/form-data">
<table class="table" border="">
	<tr>
		<td> #</td>
		<td>Published Date</td>
		<td>Notice Date </td>
		<td>Download</td>
		<input type="submit" name="submit">
	</tr>

	<tr>
		<td> #</td>
		<td><input type="text" name="published_date"></td>
		<td><input type="text" name="notice_head"> </td>
		<td><input type="file" name="download"></td>
		<input type="submit" name="submit">
	</tr>


</table>
</form>		

