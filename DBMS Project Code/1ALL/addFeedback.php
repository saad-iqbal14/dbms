<?php

session_start();
header( 'location:userProfile.php');
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

$name = $_POST['name'];
$textarea = $_POST['textarea'];

$q = "SELECT * from  feedback where name = '$name' && textarea = '$textarea'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1)
{
	echo"name already used";
}
else
{
	$qy = "insert into feedback(name, textarea) values('$name' , '$textarea') ";
	mysqli_query($con, $qy);
}

?>