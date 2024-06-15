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

		input[type="email"],input[type="text"],input[type="number"],input[type="date"]
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

     /* #buffaloid1{
         display: none;
      }
*/
	</style>

   <script type="text/javascript">
      
      function hideshowfun()
      {

         // code for cow

         var status_cow=document.getElementById('cow').checked;

         if(status_cow==true)
         {
            document.getElementById('cowid1').style.display='block';

         }

         if(status_cow==false)
         {
            document.getElementById('cowid1').style.display='none';

         }

         // code for buffalo

         var status_buffalo=document.getElementById('buffalo').checked;

         if(status_buffalo==true)
         {
            document.getElementById('buffaloid1').style.display='block';
         }

         if(status_buffalo==false)
         {
            document.getElementById('buffaloid1').style.display='none';

         }

      }

   </script>

</head>
<body bgcolor="crimson">

	<br><br>

	<form method="post" name="f1">

   <center>

      <?php 

         foreach($data as $row)
         {


      ?>


   	<div class="container">
 		  			
   		<div class="row text-center">
   			<div class="col-sm-12">
   				<h2>Daily Milk Collection</h2> 
   			</div>
   		</div>

   		<br><br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="sname">Supplier Name</label>
   			</div>

   			<div class="col-sm-8">
   				<input type="text" placeholder="Name of Suppliers" name="sname" value="<?php echo $row->sname; ?>">
   			</div>

   		</div>

   		<br>

         <div class="row">
            
            <div class="col-sm-4">
               <label for="sdate">Collection Date</label>
            </div>

            <div class="col-sm-8">
               <input type="date" name="sdate" value="<?php echo $row->sdate; ?>">
            </div>

         </div>

         <br>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="iname">Item Name</label>
   			</div>

   			<div class="col-sm-8">
   				
               <input type="checkbox" name="supply_for[]" value="Cow Milk" checked id="cow" onclick="hideshowfun()">&nbsp;Cow Milk &nbsp;
               <input type="checkbox" name="supply_for[]" value="Buffalo Milk" checked id="buffalo" onclick="hideshowfun()">&nbsp;Buffalo Milk

   			</div>

   		</div>

         <div id="cowid1">

            <br><br>

         <div class="row text-center">
               
               <div class="col-sm-12">
                  <p style="font-size: 17px;">Cow Milk Details</p>
               </div>

         </div>

   		<div class="row">
   			
   			<div class="col-sm-4">
   				<label for="cmquantity">Cow Milk Quantity</label>
   			</div>

            <div class="col-sm-4">
               <label for="cmfat">Fat in Cow Milk</label>
            </div>

             <div class="col-sm-4">
               <label for="cmrate">Rate of Cow Milk</label>
            </div>	

   		</div>

      <div class="row">
            
            <div class="col-sm-4">
               <input type="number" placeholder="Cow Milk quantity" name="cmqty" value="<?php echo $row->cmqty; ?>">
            </div>

            <div class="col-sm-4">
               <input type="number" placeholder="Fat in Cow Milk" name="cmfat" value="<?php echo $row->cmfat; ?>">
            </div>

            <div class="col-sm-4">
               <input type="number" placeholder="Rate of Cow Milk" name="cmrate" value="<?php echo $row->cmrate; ?>">
            </div>

         </div>

      </div>

      <div id="buffaloid1">

         <br><br>

         <div class="row text-center">
               
               <div class="col-sm-12">
                  <p style="font-size: 17px;">Buffalo Milk Details</p>
               </div>

         </div>

         <div class="row">
            
            <div class="col-sm-4">
               <label for="bmquantity">Buffalo Milk Quantity</label>
            </div>

            <div class="col-sm-4">
               <label for="bmfat">Fat in Buffalo Milk</label>
            </div>

             <div class="col-sm-4">
               <label for="cmrate">Rate of Buffalo Milk</label>
            </div>

         </div>

      <div class="row">
            
             <div class="col-sm-4">
               <input type="number" placeholder="Buffalo Milk quantity" name="bmqty" value="<?php echo $row->bmqty; ?>">
            </div>

            <div class="col-sm-4">
               <input type="number" placeholder="Fat in Buffalo Milk" name="bmfat" value="<?php echo $row->bmfat; ?>">
            </div>

            <div class="col-sm-4">
               <input type="number" placeholder="Rate of Buffalo Milk" name="bmrate" value="<?php echo $row->bmrate; ?>">
            </div>

         </div>

      </div>


      <br><br><br>

   		<div class="row">

   			<div class="col-sm-4">
   				<input type="reset" value="Reset Supplier">
   			</div>
   			
   			<div class="col-sm-4">
   				<!-- <br> -->
   				<input type="submit" name="updatedailycollection" value="Update Daily Collection">
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

   <?php

         }

      ?>           
                 
   </form>		

</body>
</html>