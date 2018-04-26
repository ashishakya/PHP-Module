<html>
	<head>
	    <title>Registration Form</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	    
	    <script  language="javascript">
				function validate(form)
				{	
					returnvalue=true;
					
					fname=form.fname.value;
					lname=form.lname.value;
					email=form.email.value;
					phone=form.contact.value;
					colz=form.colz.value;
					faculty=form.faculty.value;
					sem=form.sem.value;
					
					atpos = email.indexOf("@");
					dotpos = email.lastIndexOf(".");
					
					num="0123456789";
					counter=0;

					/* checking if the contact number is 10 digit numeric value or not*/	
					for(i=0;i<phone.length;i++)
					{
						digit=phone.charAt(i);
						for(j=0;j<num.length;j++)
						{
							if(digit==num.charAt(j))
								counter=counter+1;
						
						}
					}
					
					
					/*if(isEmpty(fname))
						alert("fname not entered"); >>>>>does not work*/	
					
					if(fname==""||lname==""||email==""||phone==""||colz==""||faculty==""||sem=="")
					{	
						returnvalue=false;
						alert("All fields are not entered");
						//<div class="alert alert-danger" role="alert"></div>
					}	

					else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
					{
						alert("Invalid E-mail address");
						returnvalue=false;
						form.email.focus();
					}

					else if(counter<10)
					{
						alert("Invalid Contact Number");
						returnvalue=false;
						form.phone.focus();
					}
					
					
					return returnvalue;			
				}
	</script>
	</head>
	<body style="padding:10px;">
	<?php

		if(isset($_POST['submit'])){
			
			// $link=mysqli_connect('localhost','root','','se');
			// if(!$link)
			// 	die("Error".mysqli_connect.error());
			include 'connection.php';
			$fname=strtoupper($_POST['fname']);
			$lname=strtoupper($_POST['lname']);
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$colz=strtoupper($_POST['colz']);
			$faculty=strtoupper($_POST['faculty']);
			$sem=strtoupper($_POST['sem']);

			$insert="INSERT INTO `tbl_registration`(`First_Name`, `Last_Name`, `Email`, `Contact`, `College`, `Faculty`, `Semester`) VALUES ('$fname','$lname','$email','$phone','$colz','$faculty','$sem')";
			$run=mysqli_query($link,$insert);
			if($run){


			$result = '<div class = "alert alert-success" style="text-align:center;">Success! Well done '. "<br>". strtoupper($_POST['fname']). "<br>" .' Your information is submitted.</div>' ;
			echo $result;
		}

		}

	?>

		
			<form class="form-horizontal"  method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" onsubmit="return validate(this)"  style="padding:10px; border:solid 2px red; width:60%; margin-left: auto; margin-right: auto;"  >
				<fieldset>
				<legend style="text-align: center;">REGISTRATION</legend>	
				
				  <div class="form-group">
				   	 <label for="fname" class="col-sm-3 control-label" >First Name </label>
					   <div class="col-sm-9">
					      <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" >
					   </div>
				  </div>

				  <div class="form-group">
					    <label for="lname" class="col-sm-3 control-label">Last Name</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
					    </div>
				  </div>

				  <div class="form-group">
				   	 <label for="email" class="col-sm-3 control-label">Email</label>
					   <div class="col-sm-9">
					      <input type="text" class="form-control" id="email" placeholder="Email" name="email">
					   </div>
				  </div>

				  <div class="form-group">
					    <label for="contact" class="col-sm-3 control-label">Contact Number</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="contact" placeholder="Contact Number" maxlength="10" name="phone">
					    </div>
				  </div>

				  <div class="form-group">
				   	 <label for="colz" class="col-sm-3 control-label">College/Organisation</label>
					   <div class="col-sm-9">
					      <input type="text" class="form-control" id="colz" placeholder="College/Organisation" name="colz">
					   </div>
				  </div>

				  <div class="form-group">
					    <label for="faculty" class="col-sm-3 control-label" >Faculty</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="faculty" placeholder="Faculty" name="faculty">
					    </div>
				  </div>

				  <div class="form-group">
					    <label for="sem" class="col-sm-3 control-label">Semester/Year</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="sem" placeholder="Semester/Year" name="sem">
					    </div>
				  </div>

				<div class="form-group">
				    <div class="col-sm-offset-5 col-sm-9">
				      <button type="submit" class="btn btn-success" name="submit">Submit</button>

				      <button type="reset" class="btn btn-danger">Clear</button>
				    </div>
				  </div>

				  
			  	</fieldset>
			</form>
		
	</body>

</html>