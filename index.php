
<?php include('include/header.php');?>
<?php require_once 'db_connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title> STSC-DIPLOMA-IN -ENGINEERING</title>
</head>
<body>
	<div class="container-fluid animated tada delay-2s" class="col-md-12">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/front.jpg" width="100%" height="300px" alt="college front">
      <div class="carousel-caption">
        My college Front View
      </div>
    </div>
    <div class="item">
      <img src="img/side.jpg" width="100%" height="300px" alt="Side view">
      <div class="carousel-caption">
        My College Side view
      </div>
    </div>
        <div class="item">
      <img src="img/back.jpg" width="100%" height="300px" alt="Side view">
      <div class="carousel-caption">
        My College Back side
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="jumbotron flyIn" style="width: 100%; height: 500px; margin-top: 20px; background: black;  padding: 0px; color : white; padding: 5px">
	<h3 style="color:white; text-align: center; text-decoration: underline; "> important massage </h3>
	<table>
    <thead>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM `send` WHERE 1";
      $result = $conn->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td colspan = '5'>".$row['massage']."</td>
                      </tr>";
        }
      }
      else {
        echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>		

</body>
</html>


<?php include('include/footer.php');?>