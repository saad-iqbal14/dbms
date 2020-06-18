<?php

include'links.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
</head>
<body>


<div class="container">
  
  <div class="card" style="margin: 20%; margin-left: " >
    <div class="card-header">	<button style="margin-left: 40%;" id="displaydata1" class="btn btn-danger">View Ticket</button></div>

    <div class="card-body" ><h3 style="margin-left: 40%;">Ticket Info!</h3> <br>

      <table class="table table-striped" id="">
                <thead class="thead-inverse tablr-bodered">
                  <tr>
                    <th>City: </th>
                    <th>Artist: </th>
                    <th>Venue: </th>
                    <th>Date: </th>
                    <th>Timings: </th>
                  </tr>
                </thead>

                <tbody  id="response1" style="">
                  
                </tbody>

              </table>


    </div> 
    <!--
    <div class="card-footer">
    	
    	<table class="table table-striped" id="displaydata">
                <thead class="thead-inverse tablr-bodered">
                  <tr>
                  	<th>Seat No: </th>
                    <th>First Name: </th>
                    <th>Last Name: </th>
                    <th>Contact: </th>
                    <th>Type: </th>
                  </tr>
                </thead>

                <tbody  id="response" style="">
                  
                </tbody>

              </table>

             
    </div>
  -->
     <a href="userProfile.php"  class="btn btn-success" style="" >Done</a>
  </div>
</div>

<script type="text/javascript">

	$(document).ready(function(){

$('#displaydata').click(function(){

	$.ajax({

		url: 'viewTicketcode.php',
		type: 'post',

		success:function(responsedata){
			$('#response').html(responsedata);
		}

	});

});

	});
	


</script>

<script type="text/javascript">

  $(document).ready(function(){

$('#displaydata1').click(function(){

  $.ajax({

    url: 'viewTicketcode.php',
    type: 'post',

    success:function(responsedata){
      $('#response1').html(responsedata);
    }

  });

});

  });
  


</script>

</body>
</html>