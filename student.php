<?php include ('include/header.php'); ?>
<div class="container">
	<div class="col-md-2 col-sm-2">	</div>
	<div class="col-md-8 col-sm-8">	
		<form action="studentac.php" method="studentac.php">
	<table class="table" border="3px solid red" style="background: red;">	
		<tr colspan=5 style="border:5px solid red">
		<td><h4 style="text-align: center;"> Give Correct Information</h4></td>	
		</tr>
		<tr colspan=5 style="">
		<td><input type="text" name="department" placeholder="department" style="width: 100%" class="input-group"></td>	
		</tr>
		<tr colspan=5 style="">
		<td><input type="text" name="sesson" placeholder="session" style="width: 100%"></td>	
		</tr>
		<tr colspan=5 style="">
		<td><input type="text" name="semister" placeholder="Semister" style="width: 100%; "></td>	
		</tr>	

		<tr colspan=5 style="">
		<td><input type="submit" name="submit" style="position: center;"
			class="btn btn-danger"></td>	
		</tr>	
	</table>
	</form>
	</div>
</div>


<?php include ('include/footer.php'); ?>