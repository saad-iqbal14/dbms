<?php

session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'registration');

$q1 = "SELECT * from ticketinfo";
$q = "SELECT * from bookticket";


$query = mysqli_query($con,$q1 );

if(mysqli_num_rows($query) > 0){
	while($result = mysqli_fetch_array($query)){
		?>

		<tr>
			<td> <?php echo $result['city']; ?> </td>
			<td> <?php echo $result['artist']; ?> </td>
			<td> <?php echo $result['venue']; ?> </td>
			<td> <?php echo $result['timings']; ?> </td>
			<td> <?php echo $result['date']; ?> </td>
              	
        </td>

		<?php

	}
}



$query = mysqli_query($con,$q );

if(mysqli_num_rows($query) > 0){
	while($result = mysqli_fetch_array($query)){
		?>

		<tr>
			<td>  <b>Seat No:</b> <br><br>    <?php echo $result['seat']; ?> </td>
			<td>  <b>Firtst Name:</b> <br><br>   <?php echo $result['fname']; ?> </td>
			<td>  <b>Last Name:</b> <br><br>   <?php echo $result['lname']; ?> </td>
			<td>  <b>Contact:</b> <br><br>   <?php echo $result['contact']; ?> </td>
			<td>  <b>Type:</b> <br><br>  <?php echo $result['type']; ?> </td>
		</tr>

		<?php

	}
}



?>