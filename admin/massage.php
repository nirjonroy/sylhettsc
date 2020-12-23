<?php 
require_once '../db_connection.php';

if("submit"){
	$massage = $_POST['massage'];

$sl = "INSERT INTO send (massage) VALUES ('$massage')";

if($conn->query($sl) == TRUE){

	echo "succfull";

}
else {
	"error";
}
$conn->close();

}



?>
<form action="massage.php" method="post">
<textarea name="massage"></textarea>
<input type="submit" name="submit">
</form>





<table border="5px">
	<tr>
		<td>ID</td>
		<td>Massage Date</td>
		<td>Massage</td>
	</tr>
	    <tbody>

      <?php
      $sql = "SELECT * FROM `send` WHERE 1";
      $result = $conn->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['date']."</td>
                        <td>".$row['massage']."</td>
                      </tr>";
        }
      }
      else {
        echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
      }
      ?>
    </tbody>
</table>