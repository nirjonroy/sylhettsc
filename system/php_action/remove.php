<?php 

require_once 'db_connect.php';

if($_POST) {
	$id = $_POST['id'];

	$sql = "DELETE FROM result7th  WHERE id = {$id}";
	if($connect->query($sql) === TRUE) 
	{
		echo "<p>Successfully removed!!</p>";
		echo "<a href='../index.php'><button type='button'>Back</button></a>";
	} 
	else {
		echo "Error updating record : " . $connect->error;
	}

	$connect->close();

}

?>