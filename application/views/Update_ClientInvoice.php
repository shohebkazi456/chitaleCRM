<!DOCTYPE html>
<html>
<head>
	<title>www.chitalecrm.com</title>

	<style type="text/css">
		
		input[type="number"],input[type="text"],input[list="itemlist"],input[type="date"]
		{
			padding: 7px;
			width: 90%;
			border-radius: 3px;
			font-size: 12px;
			border: none;
           
		}

		input[type="submit"]
		{
		    padding: 12px;
			width: 50%;
			border-radius: 5px;
			font-size: 22px;
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

	<script type="text/javascript">

		function calproductunitprice()
		{
			var selectedpname1=document.f1.pname1.value;
			var selectedpname2=document.f1.pname2.value;
			var selectedpname3=document.f1.pname3.value;


			if(selectedpname1=="Cow Milk")
			{
				document.f1.unitprice1.value=40;
			}

			if(selectedpname2=="Cow Milk")
			{
				document.f1.unitprice2.value=40;
			}

			if(selectedpname3=="Cow Milk")
			{
				document.f1.unitprice3.value=40;
			}


			if(selectedpname1=="Buffalo Milk")
			{
				document.f1.unitprice1.value=50;
			}

			if(selectedpname2=="Buffalo Milk")
			{
				document.f1.unitprice2.value=50;
			}

			if(selectedpname3=="Buffalo Milk")
			{
				document.f1.unitprice3.value=50;
			}


			if(selectedpname1=="Amrakhand")
			{
				document.f1.unitprice1.value=200;
			}

			if(selectedpname2=="Amrakhand")
			{
				document.f1.unitprice2.value=200;
			}

			if(selectedpname3=="Amrakhand")
			{
				document.f1.unitprice3.value=200;
			}


			if(selectedpname1=="Shrikhand")
			{
				document.f1.unitprice1.value=250;
			}

			if(selectedpname2=="Shrikhand")
			{
				document.f1.unitprice2.value=250;
			}

			if(selectedpname3=="Shrikhand")
			{
				document.f1.unitprice3.value=250;
			}


			if(selectedpname1=="Shrikhand Dry Fruits")
			{
				document.f1.unitprice1.value=300;
			}

			if(selectedpname2=="Shrikhand Dry Fruits")
			{
				document.f1.unitprice2.value=300;
			}

			if(selectedpname3=="Shrikhand Dry Fruits")
			{
				document.f1.unitprice3.value=300;
			}


			if(selectedpname1=="Curd")
			{
				document.f1.unitprice1.value=50;
			}

			if(selectedpname2=="Curd")
			{
				document.f1.unitprice2.value=50;
			}

			if(selectedpname3=="Curd")
			{
				document.f1.unitprice3.value=50;
			}


		}
		
		function calproductbillamt1()
		{
			
			document.f1.billamt1.value=document.f1.unitprice1.value*document.f1.qty1.value;

		}

		function calproductbillamt2()
		{
			document.f1.billamt2.value=document.f1.unitprice2.value*document.f1.qty2.value;
		}

		function calproductbillamt3()
		{

			document.f1.billamt3.value=document.f1.unitprice3.value*document.f1.qty3.value;
		}


		function caltbilling()
		{

			document.f1.billamt1.value=document.f1.unitprice1.value*document.f1.qty1.value;

			document.f1.billamt2.value=document.f1.unitprice2.value*document.f1.qty2.value;

			document.f1.billamt3.value=document.f1.unitprice3.value*document.f1.qty3.value;

			billamt1=parseInt(document.f1.billamt1.value);

			billamt2=parseInt(document.f1.billamt2.value);

			billamt3=parseInt(document.f1.billamt3.value);

			if((document.f1.qty1.value>=100 || document.f1.qty1.value==0) && (document.f1.qty2.value>=100 || document.f1.qty2.value==0) && (document.f1.qty3.value>=100 || document.f1.qty3.value==0))
			{

				var totalbillamt=billamt1+billamt2+billamt3;
			}

			else
			{
				alert("Quantity must 100 or greater than 100");
			}
	

			document.f1.totalbillamt.value=totalbillamt;

			document.f1.gstamt.value=totalbillamt*0.20;

			document.f1.finalbillamt.value=totalbillamt+(totalbillamt*0.20);

		}

	</script>

</head>
<body bgcolor="crimson">

	<br><br>

  <a href="go_to_dashboard"><button style="margin-left: 1200px;">Go to Dashboard</button></a>


	<form method="post" name="f1">

   <center>
   	<br><br>

   	<?php 

   		foreach($data as $row)
   		{


   	?>

		<table cellpadding="10" border="1" width="60%">

			<tr>
				<th colspan="2">  
				   <center>	<h2>Update Invoice Billing For Client</h2> </center>
				 </th>
			</tr>

			<tr>	
				<td>Invoice Date</td>
				<td>
				<input type="date" name="invoicedate" value="<?php echo $row->invoice_date; ?>">
				</td>
			</tr>

			<tr>	
				<td>Company/Shop Name</td>
				<td>
				<input type="text" name="companyname" value="<?php echo $row->company_name; ?>">
				</td>
			</tr>

			<tr>	
				<td>Owner Name</td>
				<td>
				<input type="text" name="ownername" value="<?php echo $row->owner_name; ?>">
				</td>
			</tr>

			<tr>	
				<td>Delivery Address</td>
				<td>
				<input type="text" name="deliveryaddress" value="<?php echo $row->deliveryaddress; ?>">
				</td>
			</tr>

			<tr>	
				<td>Contact No</td>
				<td>
				<input type="number" name="contactno" value="<?php echo $row->contactno; ?>">
				</td>
			</tr>

		</table>

		<table cellpadding="5" border="1" width="60%">
			
			<tr>
				<th>SR.No</th>
				<th>Product Name</th>
				<th>Unit Price</th>
				<th>Quantity</th>
				<th>Bill Amount</th>
			</tr>

			<datalist id="itemlist">
						<option value="Cow Milk">Cow Milk</option>
						<option value="Buffalo Milk">Buffalo Milk</option>
						<option value="Amrakhand">Amrakhand</option>
						<option value="Shrikhand">Shrikhand</option>
						<option value="Shrikhand Dry Fruits">Shrikhand Dry Fruits</option>
						<option value="Curd">Curd</option>
			</datalist>

			<tr>
				<td>1</td>
				<td>

					<input list="itemlist" name="pname1" onchange="calproductunitprice()" value="<?php echo $row->pname1; ?>">

				</td>
				<td><input type="number" name="unitprice1" value="<?php echo $row->unitprice1; ?>"></td>
				<td><input type="number" name="qty1" max="1000" onkeyup="calproductbillamt1()" value="<?php echo $row->qty1; ?>"></td>
				<td><input type="number" name="billamt1" value="<?php echo $row->billamt1; ?>"></td>
			</tr>

			<tr>
				<td>2</td>
				<td><input list="itemlist" name="pname2" onchange="calproductunitprice()" value="<?php echo $row->pname2; ?>"></td>
				<td><input type="number" name="unitprice2" value="<?php echo $row->unitprice2; ?>"></td>
				<td><input type="number" name="qty2" max="1000" onkeyup="calproductbillamt2()" value="<?php echo $row->qty2; ?>"></td>
				<td><input type="number" name="billamt2" value="<?php echo $row->billamt2; ?>"></td>
			</tr>

			<tr>
				<td>3</td>
				<td><input list="itemlist" name="pname3" onchange="calproductunitprice()" value="<?php echo $row->pname3; ?>"></td>
				<td><input type="number" name="unitprice3" value="<?php echo $row->unitprice3; ?>"></td>
				<td><input type="number" name="qty3" max="1000" onkeyup="calproductbillamt3()" value="<?php echo $row->qty3; ?>"></td>
				<td><input type="number" name="billamt3" value="<?php echo $row->billamt3; ?>"></td>
			</tr>

			<tr>
				<td colspan="4">Total Bill Amount</td>
				<td><input type="number" name="totalbillamt" onclick="caltbilling()" value="<?php echo $row->totalbillamt; ?>"></td>
			</tr>

			<tr>
				<td colspan="4">GST 20%</td>
				<td><input type="number" name="gstamt" value="<?php echo $row->gstamt; ?>"></td>
			</tr>

			<tr>
				<td colspan="4">Final Bill Amount including GST</td>
				<td><input type="number" name="finalbillamt" value="<?php echo $row->finalbillamt; ?>"></td>
			</tr>

			<tr>	
				<td colspan="3">Invoice Prepared By</td>
				<td colspan="2">
				<input type="text" name="invoicepreparedby" value="<?php echo $row->invoicepreparedby; ?>">
				</td>
			</tr>

			<tr>
				<td colspan="5" align="center">
					<input type="submit" name="updateinvoice" value="Update Invoice">
				</td>
			</tr>

		</table>

		<?php

			}

		?>

		<br><br>

    </center>
   </form>		

</body>
</html>