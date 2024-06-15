<!DOCTYPE html>
<html>
<head>

	<title>www.chitalecrm.com</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>  

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

	<style type="text/css">	

		body{
			font-family: Arial;
			background-color: #E51A4C;
		}

		input[type=text],input[type=number],input[type=email]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			color: black;
		}

		input[type=submit],input[type=reset]{
			width: 100%;
			background-color: #000123;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border:none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 18px;
		}

		input[type=submit]:hover{
			background-color: white;
			color: black;
		}

		input[type=reset]:hover{
			background-color: white;
			color: black;
		}

		div.container{
			border-radius: 5px;
			padding: 20px;
			background: rgba(0,0,0,0.3);
			color: gold;
		}

		a{
			text-decoration: none;
			color: white;
		}

		a:hover{
			text-decoration: none;
			color: white;
		}

	</style>
</head>
<body>

	<br><br>


	<form method="post">

	<?php

   		foreach($data as $row)
   		{


   	?>

	<br><br>

	<div class="container">

		<div class="row">

			<div class="col-sm-12 text-right">
					
				<button class="btn btn-success btn-lg">
					<a href="go_to_dashboard">Go to Dashboard</a>
				</button>
					
			</div>

		</div>

		<br>

		<div class="row">

			<div class="col-sm-12 text-center">

				<h1>Update Retailer</h1>

			</div>

		</div>

		<br>

		<div class="row">

			<div class="col-sm-4">

				<br>
				
				<label for="fname">First Name</label>
				<input type="text" name="fname" placeholder="First name.." value="<?php echo $row->fname; ?>">

			</div>

			<div class="col-sm-4">

				<br>
				
				<label for="lname">Last Name</label>
				<input type="text" name="lname" placeholder="Last name.." value="<?php echo $row->lname; ?>">

			</div>

			<div class="col-sm-4">

				<br>
				
				<label for="phoneno">Phone No</label>
				<input type="number" name="phoneno" placeholder="Phone no.." value="<?php echo $row->phoneno; ?>">

			</div>

		</div>

		<br><br>

		<div class="row">

			<div class="col-sm-4">

				<br>
			
				<label for="email">Email Id</label>
					<input type="email" name="emailid" placeholder="Enter the Email" value="<?php echo $row->emailid; ?>">
			</div>

			<div class="col-sm-8">

				<br>
			
				<label for="address">Address</label>
					<input type="text" name="address" placeholder="Enter complete address" value="<?php echo $row->address; ?>">
			</div>

		</div>

		<br><br>

		<div class="row">
			
			<div class="col-sm-4">

				<br>
				
				<label for="aadharcardno">Aadhar Card No</label>
				<input type="number" name="aadharcardno" placeholder="Enter the Aadhar Card No" value="<?php echo $row->aadharcardno; ?>">

			</div>

			<div class="col-sm-4">

				<br>
				
				<label for="gender">Select Gender</label>

				<div class="radio">
					<label><input type="radio" name="gender" value="Male">Male</label>
				</div>

				<div class="radio">
					<label><input type="radio" name="gender" value="Female">Female</label>
				</div>

			</div>

			<div class="col-sm-4">

				<br>
				
				<label for="gender">Select Register For</label>

				<div class="checkbox">
					<label><input type="checkbox" name="product[]" value="Cow Milk">Cow Milk</label>
				</div>

				<div class="checkbox">
					<label><input type="checkbox" name="product[]" value="Buffalo Milk">Buffalo Milk</label>
				</div>

			</div>

		</div>

		<br><br>

		<div class="row">
				
			<div class="col-sm-6 text-center">
					
				<input type="submit" name="updateretailer" value="Update New Retailer">

			</div>

			<div class="col-sm-6 text-center">
					
				<input type="reset" value="Reset Data">

			</div>

		</div>


		<div class="row">
				
			<div class="col-sm-12 text-center">
					
				<?php echo @$msg; ?>

			</div>

		</div>

		<br><br>

	</div>

	<?php

		}

	?>

   </form>		

   <br><br><br>

</body>
</html>