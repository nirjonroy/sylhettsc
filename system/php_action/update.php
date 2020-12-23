<?php 

require_once 'db_connect.php';

if($_POST) {
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$registration = $_POST['registration'];
	$class = $_POST['class'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$innovation_grade = $_POST['innovation_grade'];
	$innovation_cgpa = $_POST['innovation_cgpa'];
	$system_grade = $_POST['system_grade'];
	$system_cgpa = $_POST['system_cgpa'];
	$network_grade = $_POST['network_grade'];
	$network_cgpa = $_POST['network_cgpa'];
	$ecommerce_grade = $_POST['ecommerce_grade'];
	$ecommerce_cgpa = $_POST['ecommerce_cgpa'];
	$cyber_grade = $_POST['cyber_grade'];
	$cyber_cgpa = $_POST['cyber_cgpa'];	
	$advance_grade = $_POST['advance_grade'];
	$advance_cgpa = $_POST['advance_cgpa'];
	$apps_grade = $_POST['apps_grade'];
	$apps_cgpa = $_POST['apps_cgpa'];
	$total_cgpa = $_POST['total_cgpa'];
	$id = $_POST['id'];

	$sql  = "UPDATE result7th SET name = '$name', roll = '$roll', registration = '$registration', class = '$class', father = '$father', mother = '$mother', innovation_grade = '$innovation_grade', innovation_cgpa = '$innovation_cgpa', system_grade = '$system_grade', network_grade = '$network_grade', network_cgpa = '$network_cgpa', ecommerce_grade = '$ecommerce_grade', ecommerce_cgpa = '$ecommerce_cgpa', cyber_grade = '$cyber_grade', advance_grade = '$advance_grade', advance_cgpa = '$advance_cgpa', apps_grade = '$apps_grade', apps_cgpa = '$apps_cgpa', total_cgpa = '$total_cgpa'   WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?> 