<!DOCTYPE html>
<html>
<head>
	<title>www.chitalecrm.com</title>

	<style type="text/css">
		
		input[type="email"],input[type="text"]
		{
			padding: 10px;
			width: 60%;
			border-radius: 5px;
			font-size: 17px;
			border: none;
           
		}
		input[type="submit"]
		{
		    padding: 10px;
			width: 67%;
			border-radius: 5px;
			font-size: 23px;
			border: none;
			background-color: #000123;
			color: white;
           	
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
   	<br>
		<table width="60%" cellpadding="10">

			<tr>
				<td>   
				   <center>	<h2>New Dealer/Client Registration</h2> </center>
				 </td>
			</tr>

			<tr>	
				<td>
					<center>
			<input type="text" placeholder="Enter shop/company name" name="shopname">
                    </center>
				</td>
			</tr>

			<tr>
			
				<td>
					<center>
					<input type="text" placeholder="Enter name of Client" name="cname">
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
			           <input type="email" placeholder="Enter email id" name="emailid">
                    </center>
				</td>
			</tr>

           <tr>	
				<td>
					<center>
						<h4>Select Product list </h4>

			           <input type="checkbox" name="product[]" value="Milk">Milk 
			           <input type="checkbox" name="product[]" value="Curd">Curd
			           <input type="checkbox" name="product[]" value="Amrakhand">Amrakhand
			           <input type="checkbox" name="product[]" value="Shrikhand">Shrikhand
			           <input type="checkbox" name="product[]" value="Butter">Butter


                    </center>
				</td>
			</tr>


           <tr>	
				<td>
					<center>
			    <input type="text" placeholder="Delivery shop Address" name="shopaddress">
                    </center>
				</td>
			</tr>
            
            <tr>	
				<td><center>
					   <h4>Select Product Delivery By 
			             <input type="radio" name="deliveryby" value="Self">Self
			             <input type="radio" name="deliveryby" value="By Chitale">By Chitale
			           </h4>
			       </center>

                   
				</td>
			</tr>









			<tr>	
				<td>
					<center>
			<input type="submit" name="registerclient" value="Register New Client">
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