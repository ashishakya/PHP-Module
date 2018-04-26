<html>
	<head>
		<title>Feedback Form</title>
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		    <script language="javascript">
		    	function validate(form){
		    		returnvalue=true;
			
					text=form.feedback.value;
					
					if(text=="")
					{	
						returnvalue=false;
						
						alert(" Please fill the suggestion ");
						
					}	
			
					 return returnvalue;		

		    	}
		    </script>	
		 </title>
	 </head>  

	 <body style="padding: 10px;">

	<?php
	 if(isset($_POST['submit'])){
	 		
			
			$result = '<div class = "alert alert-success" style="text-align:center;">Success! Well done Your feedback is submitted.</div>' ;
			echo $result;
		}

		

	 ?>
	 	
	 		<form class="form-group" style="margin-left:5%;" action="feedback.php" onsubmit="return validate(this)" method="post">

  				<!-- <div class="col-md-5">
					<img src="feedback.jpg" height="400" width="400" class="img-responsive">
				</div> -->
				<div class="form-group">
					<div class="col-sm-2">
						<img src="feedback.jpg" height="250" width="250" class="img-responsive">
					</div>


					<div class="col-sm-6">
						
		  				<textarea class="form-control" rows="6" id="comment" name="feedback"></textarea>
					</div>
				</div>


				<div class="form-group">
				    <div class="col-sm-offset-2 col-md-9">
				      <button type="submit" class="btn btn-success" name="submit">Submit</button>

				      <button type="reset" class="btn btn-danger">Clear</button>
				    </div>
			    </div>
				
			

			</form> 
	 	
	 	

	 </body>
	 

<html>