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
			font-family: arial;
		}


		input[type="email"],input[type="password"]
		{
			padding: 10px;
			width: 50%;
			font-size: 17px;
			border: none;
			border-bottom: 1px solid;
			background-color: #000123;
           
		}

		::placeholder{
			color: grey;
		}

		input[type="submit"]
		{
			width: 50%;     
		}

	</style>

</head>

<body>

	<form method="post">

   <center>

   	<br><br><br><br><br><br><br><br>

   	<div class="container">
   		
   		<div class="row">
   			
   			<div class="col-sm-12">
   				<h1>Chitale <font style="color: red">CRM</font> Login</h1>
   			</div>

   		</div>

   		<br>

   		<div class="row">
   	
   			<div class="col-sm-12">
   				<input type="email" placeholder="Enter register email id" name="email">
   			</div>

   		</div>

   		<br>

   		<div class="row">
   	
   			<div class="col-sm-12">
   				<input type="password" placeholder="Enter password" name="pass">
   			</div>

   		</div>

   		<br>

   		<div class="row">
   	
   			<div class="col-sm-12">
   				<input class="btn btn-success btn-lg" type="submit" name="loginsubmit" value="Login">
   			</div>

   		</div>

   		<div class="row">
   	
   			<div class="col-sm-12">
   				<?php echo @$msg;  ?>
   			</div>

   		</div>

   	</div>
       
   </center>

   </form>	

</body>
</html>