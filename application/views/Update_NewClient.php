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

   	<?php  
   		foreach($data as $row)
   		{


   	?>
		<table width="60%" cellpadding="10">

			<tr>
				<td>   
				   <center>	<h2>Update Dealer/Client</h2> </center>
				 </td>
			</tr>

			<tr>	
				<td>
					<center>
			<input type="text" placeholder="Enter shop/company name" name="shopname" value="<?php echo $row->shopname; ?>">
                    </center>
				</td>
			</tr>

			<tr>
			
				<td>
					<center>
					<input type="text" placeholder="Enter name of Client" name="cname" value="<?php echo $row->cname; ?>">
				   </center>

				</td>
			</tr>


			<tr>	
				<td>
					<center>
				<input type="text" placeholder="Enter mobile no" name="mobileno" value="<?php echo $row->mobileno; ?>">
                    </center>
				</td>
			</tr>

			<tr>	
				<td>
					<center>
			           <input type="email" placeholder="Enter email id" name="emailid" value="<?php echo $row->emailid; ?>">
                    </center>
				</td>
			</tr>

           <tr>	
				<td>
					<center>

						<?php

							$chkbox=$row->product;
							$arr=explode(" ",$chkbox);

						?>

						<h4>Select Product list </h4>

			           <input type="checkbox" <?php if(in_array("Milk",$arr)) { echo "checked"; } ?> name="product[]" value="Milk">Milk 
			           <input type="checkbox" <?php if(in_array("Curd",$arr)) { echo "checked"; } ?> name="product[]" value="Curd">Curd
			           <input type="checkbox" <?php if(in_array("Amrakhand",$arr)) { echo "checked"; } ?> name="product[]" value="Amrakhand">Amrakhand
			           <input type="checkbox" <?php if(in_array("Shrikhand",$arr)) { echo "checked"; } ?> name="product[]" value="Shrikhand">Shrikhand
			           <input type="checkbox" <?php if(in_array("Butter",$arr)) { echo "checked"; } ?> name="product[]" value="Butter">Butter


                    </center>
				</td>
			</tr>


           <tr>	
				<td>
					<center>
			    <input type="text" placeholder="Delivery shop Address" name="shopaddress" value="<?php echo $row->shopaddress; ?>">
                    </center>
				</td>
			</tr>
            
            <tr>	
				<td><center>
					   <h4>Select Product Delivery By 
			             <input type="radio" name="deliveryby" value="Self" <?php if($row->deliveryby=='Self') { echo "checked"; } ?> >Self
			             <input type="radio" name="deliveryby" value="By Chitale" <?php if($row->deliveryby=='By Chitale') { echo "checked"; } ?> >By Chitale
			           </h4>
			       </center>

                   
				</td>
			</tr>


			<tr>	
				<td>
					<center>
			<input type="submit" name="updateclientsubmit" value="Update Client Info">
                    </center>
				</td>
			</tr>


		</table>

	<?php

		}	

	?>
       
    </center>
   </form>		

</body>
</html>