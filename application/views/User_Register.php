<!DOCTYPE html>
<html>
<head>
	<title>www.chitalecrm.com</title>

	<style type="text/css">
		
		input[type="email"],input[type="password"],input[type="text"]
		{
			padding: 15px;
			width: 60%;
			border-radius: 5px;
			font-size: 17px;
			border: none;
           
		}
		input[type="submit"]
		{
		    padding: 15px;
			width: 67%;
			border-radius: 5px;
			font-size: 23px;
			border: none;
			background-color: #000123;
			color: white;
           	
		}

		select{
			padding: 15px;
			width: 64%;
			border-radius: 5px;
			font-size: 17px;
			border: none;

		}

		button{
	      padding: 8px;
	      width: 12%;
	      border-radius: 5px;
	      font-size: 20px;
	      border: none;
	      background-color: lightblue;
	    } 

	</style>
</head>
<body bgcolor="crimson">

	<br><br>

  <a href="go_to_dashboard"><button style="margin-left: 1200px;">Go to Dashboard</button></a>



	<form method="post">

   <center>
   	<br><br><br>
		<table width="60%" cellpadding="5" cellspacing="5">

			<tr>
				<td>   
				   <center>	<h2>New User Registration</h2> </center>
				 </td>
			</tr>

			<tr>
			
				<td>
					<center>
					  <input type="text" placeholder="Enter name of Employee" name="ename">
				   </center>

				</td>
			</tr>


			<tr>	
				<td>
					<center>
					   <input type="email" placeholder="Enter email" name="email">
                    </center>
				</td>
			</tr>

            
            <tr>	
				<td>
					<center>
					   <input type="password" placeholder="Enter password" name="pass">
                    </center>
				</td>
			</tr>


             <tr>	
				<td>
					<center>
					   <input type="text" placeholder="Enter mobile no" name="mobileno">
                    </center>
				</td>
			</tr>

            <tr>	
				<td>
					<center>
					<select name="emp_post">
						<option value="" disabled selected>--Select Employee Post--</option>
						<option value="Chairmen">Chairmen</option>
						<option value="Manager">Manager</option>
						<option value="Supervisor">Supervisor</option>
						<option value="Clerk">Clerk</option>

							
					</select>
					   
                    </center>
				</td>
			</tr>

			<tr>	
				<td>
					<center>
					   <input type="submit" name="userregistersubmit" value="Register">
                    </center>
				</td>
			</tr>


			<tr>
                <td> 
                      <?php echo @$msg;  ?>
                 </td>
			</tr>

		</table>

       
    </center>
   </form>		

</body>
</html>