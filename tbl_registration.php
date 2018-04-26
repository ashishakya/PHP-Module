<!DOCTYPE html>
<html lang="en">
<head>
    <title>thenewboston</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<?php
					
	include 'connection.php';
	$select="SELECT `SN`, `First_Name`, `Last_Name`, `Email`, `Contact`, `College`, `Faculty`, `Semester` FROM `tbl_registration` WHERE 1";
	$run=mysqli_query($link,$select);
	echo '<div class="table-responsive">';
	if($run)
	{	
		echo "<table class='table table-striped'> <thead> <tr class='warning'>"; 
 		echo "<th>SN</th>";
		echo"<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo"<th>Email</th>";
		echo "<th>Contact</th>";
		echo"<th>College/Organisation</th>";
		echo"<th>Faculty</th>";
		echo"<th>Semester</th></tr></thead>";
 		
 		while($row=mysqli_fetch_array($run)) 
		{				
			echo "<tbody> <tr class=''>";	
			
				echo"<td>".$row['SN']."</td>";				
				echo"<td>".$row['First_Name']."</td>";
				echo"<td>".$row['Last_Name']."</td>";
				echo"<td>".$row['Email']."</td>";
				echo"<td>".$row['Contact']."</td>";
				echo"<td>".$row['College']."</td>";
				echo"<td>".$row['Faculty']."</td>";
				echo"<td>".$row['Semester']."</td>";
				
			echo "</tr>";	
		}	
		echo "</tbody></table>";
	}
	echo '</div>';
	mysqli_close($link);
 ?>