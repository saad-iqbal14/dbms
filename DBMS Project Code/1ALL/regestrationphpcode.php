<?php

session_start();
header( 'location:login.php');
echo "hayyan";


$con = mysqli_connect('localhost' , 'root');
if ($con)
 {
	echo "done";
}
else
{
	echo "not done";
}


mysqli_select_db($con, 'registration');

$username = $_POST['username'];
$password = $_POST['password'];

$q = "SELECT * from  signup1 where username = '$username' && password = '$password'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1)
{
	echo"name already used";
}
else
{
	$qy = "insert into signup1(username, password) values('$username' , '$password') ";
	mysqli_query($con, $qy);
}

?>