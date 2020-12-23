<?php 

require_once 'db_connect.php';

if("button") {
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

	$sql = "INSERT INTO result7th (name, roll, registration, class, father, mother, innovation_grade, innovation_cgpa, system_grade, system_cgpa, network_grade, network_cgpa, ecommerce_grade, ecommerce_cgpa, cyber_grade, cyber_cgpa, advance_grade, advance_cgpa, apps_grade, apps_cgpa) VALUES ('$name', '$roll', '$registration', '$class', '$father', '$mother', '$innovation_grade', '$innovation_cgpa', '$system_grade', '$system_cgpa', '$network_grade', '$network_cgpa', '$ecommerce_grade', '$ecommerce_cgpa', '$cyber_grade', '$cyber_cgpa', '$advance_grade', '$advance_cgpa', '$apps_grade', '$apps_cgpa' )";
	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>