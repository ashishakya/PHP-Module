<?php

	include 'connection.php';
	$select="SELECT `SN`, `First_Name`, `Last_Name`, `Email`, `Contact`, `College`, `Faculty`, `Semester` FROM `tbl_registration` WHERE 1";
	$run=mysqli_query($link,$select);
	if($run)
	{	
			$file=fopen("C:\Users\Admin-PC\Downloads\Record.csv", "w");
		$th=array("SN","First Name","Last Name","Email","Contact","College","Faculty","Semester");
		
		// foreach ($th as $value) {

		// 	# code...

		// 	fputcsv($file, $th);
		// }
		fputcsv($file, $th);
		

		while($row=mysqli_fetch_array($run)) 

		{	
			$tuple=array($row['SN'],$row['First_Name'],$row['Last_Name'],$row['Email'],$row['Contact'],$row['College'],$row['Faculty'],$row['Semester']);			
			fputcsv($file, $tuple);	
			
				
				
				
		}	
		fclose($file);
		
	}


	
?>