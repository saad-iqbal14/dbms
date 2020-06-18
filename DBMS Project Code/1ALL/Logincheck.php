<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con)
{
	?>
 	<script>
 		alert( 'connection succesful');
 	</script>

 	<?php
}
else
{
	echo"not done";
}

$db = mysqli_select_db($con, 'admin');

if(isset($_POST['submit']))
{
	$email = $_POST ['email'];
	$password = $_POST ['password'];

	$sql = "select * from admintable where email = '$email' and password = '$password' ";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if ($row == 1)
		{
			echo "login done";
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header('location: adminpage.php');
		}
		else
		{
			echo "login failed";
			header('location:adminlogin.php');
		}
	
}
?>