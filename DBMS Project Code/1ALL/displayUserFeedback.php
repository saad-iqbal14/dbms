<?php

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'registration');

$q = "SELECT * from feedback";

$query = mysqli_query($con,$q );

if(mysqli_num_rows($query) > 0){
	while($result = mysqli_fetch_array($query)){
		?>

		<tr>
			<td> <?php echo $result['id']; ?> </td>
			<td> <?php echo $result['name']; ?> </td>
			<td> <?php echo $result['textarea']; ?> </td>
		</tr>



		<?php

	}
}



?>