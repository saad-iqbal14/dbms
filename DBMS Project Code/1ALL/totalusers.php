<?php
include"links.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title >Total Users</title>

</head>
<body>

<nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primarry mb-3" style="background-image: linear-gradient( to right,lightblue, lightgreen);">
   
    <div class="flex-row d-flex">
      <a class="navbar-brand mb-1" href="adminProfile.php"><b>Yolo</b></a>
    </div> 
  </nav>


<div class="container">
  <div class="jumbotron text-center">
    <h1>Display Total Users</h1>      
        
</div>
<button id="displaydata" class="btn btn-danger">Display</button>
</div>

<br><br>

<div class="col-lg-9 col-md-8 P-5" style="margin-left: 13%;">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead class="thead-inverse tablr-bodered">
                  <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                  </tr>
                </thead>

                <tbody  id="response" style="">
                  
                </tbody>

              </table>
            </div>
</div>

<script type="text/javascript">

	$(document).ready(function(){

$('#displaydata').click(function(){

	$.ajax({

		url: 'displayuser.php',
		type: 'post',

		success:function(responsedata){
			$('#response').html(responsedata);
		}

	});

});

	});
	


</script>



</body>
</html>