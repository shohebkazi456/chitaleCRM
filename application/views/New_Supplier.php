<!DOCTYPE html>
<html>
<head>
	<title>www.chitalecrm.com</title>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		

		body{
			background-color: #000123;
			color: white;
		}

		input[type="email"],input[type="text"],input[type="number"]
		{
			padding: 10px;
			width: 60%;
			border-radius: 5px;
			font-size: 17px;
			border: none;
			color: black;
           
		}
		input[type="submit"],input[type="reset"],input[type="button"]
		{
		    padding: 10px;
			width: 67%;
			border-radius: 5px;
			font-size: 23px;
			border: none;
			background-color: crimson;
			color: white;
           	
		}

	</style>
</head>
<body bgcolor="crimson">

	<br><br>

	<form method="post">

   <center>

   	<div class="container">
 		  			
   		<div class="row text-center">
   			<div class="col-sm-12">
   				<h2>New Supplier Registration</h2> 
   			</div>
   		</div>

   		<br><br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="sname">Supplier Name</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="text" placeholder="Name of Suppliers" name="sname">
   			</div>

   		</div>

   		<br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="scno">Supplier Contact No</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="number" placeholder="Contact no of Supplier" name="phoneno">
   			</div>

   		</div>

   		<br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="address">Supplier Address</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="text" placeholder="Address of Supplier" name="address">
   			</div>

   		</div>


		<br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="email">Supplier Email Id</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="email" placeholder="Email of Supplier" name="email">
   			</div>

   		</div>

   		<br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="aadhar">Supplier Aadhar Card No</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="number" placeholder="Aadhar Card No of Supplier" name="aadharcardno">
   			</div>

   		</div>

   		<br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="sf">Supply For</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="checkbox" name="supply_for[]" value="Cow Milk">&nbsp;Cow Milk &nbsp;
   				<input type="checkbox" name="supply_for[]" value="Buffalo Milk">&nbsp;Buffalo Milk
   			</div>

   		</div>

   		<br>

   		<div class="row">

   			<div class="col-sm-4">
   				<input type="reset" value="Reset Supplier">
   			</div>
   			
   			<div class="col-sm-4">
   				<!-- <br> -->
   				<input type="submit" name="registersupplier" value="Register New Supplier">
   			</div>

   			<div class="col-sm-4">
   				<!-- <br> -->
   				<a href="go_to_dashboard"><input type="button" value="Go to Dashboard"></a>

   			</div>

   		</div>

   		<br>

   		<div class="row">
   			
   			<div class="col-sm-12 text-center">
   				<?php echo @$msg;  ?>
   			</div>

   		</div>



   	</div>

   </center>            
                 
   </form>		

</body>
</html>