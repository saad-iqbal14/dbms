<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con)
{
	?>
 	<script>
 		alert( 'Only Admins can login.');
 	</script>

 	<?php
}
else
{
	echo"not done";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>

	<?php include 'links.php';?>

</head>
<body>

	<form action="Logincheck.php" method="POST" style="margin-left: 350px; margin-right: 350px; margin-top: 10%;">
		<div class="small shadow " style="padding: 10%;">
	 		<div class="form-group">
			    <label for="email">Email</label>
			    <input type="name" name="email" class="form-control" aria-describedby="emailHelp" id="email"  placeholder="Enter name" required>
			    <div class="valid-feedback">Valid.</div>
		        <div class="invalid-feedback">Please fill out this field.</div>
		        
	  		</div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
			    <div class="valid-feedback">Valid.</div>
			    <div class="invalid-feedback">Please fill out this field.</div>
			  </div>
			  <input type="submit" class="btn btn-success" name="submit">

  		</div>

	</form>

</body>
</html>