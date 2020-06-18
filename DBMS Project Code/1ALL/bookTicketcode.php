<?php

session_start();


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

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$type = $_POST['type'];

$q = "SELECT * from  bookticket where fname = '$fname'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1)
{
	?>
 	<script>
 		alert( 'There is ticket with this name. Use another name.');
 	</script>

 	<?php
	$_SESSION['fname'] = $fname;
}
else
{
	$_SESSION['fname'] = $fname;
	$qy = "insert into bookticket(fname, lname, contact, type) values('$fname' , '$lname', '$contact', '$type') ";
	mysqli_query($con, $qy);
	?>
 	<script>
 		alert( 'Ticket Booked! View it By clicling view Button');
 	</script>

 	<?php
}

?>