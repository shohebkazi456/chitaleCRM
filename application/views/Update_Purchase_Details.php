<!DOCTYPE html>
<html>
<head>
	<title>www.chitalecrm.com</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
body 
{
  font-family: Arial;
 font-size: 15px;
 background-color: #E51A4C; 
   
}

input[type=text],select,input[type=date],input[type=number]
 {
  width: 60%;
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  color:black;
}

input[type=submit],input[type=reset] 
{
  width: 100%;
  background-color: #000123;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 17px;


}

input[type=button] 
{
  width: 100%;
  background-color: orangered;
  color: white;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 font-size: 17px;

}



input[type=submit]:hover
 {
  background-color: white;
  color:black;
}

input[type=reset]:hover
 {
  background-color: white;
  color:black;
}

input[type=button]:hover
 {
  background-color: white;
  color:black;
}


div.container {
  border-radius: 5px;
  padding: 20px;
  background: rgba(0,0,0,0.3);
  color: gold;
  
}

</style>

<script type="text/javascript">
  
  function calCost()
  {
    document.f1.pamt.value=document.f1.cop.value*document.f1.qty.value;
  }

</script>
	
</head>
<body bgcolor="crimson">

	<form method="post" name="f1">

   	 
<br><br>

<div class="container">
	<br><br>

    <div class="row">
             
          <div class="col-sm-12 text-center">

                  <h1> Update Purchase Entry </h1>          	
          </div>
 
    </div> 	
    <br>

    <?php 

      foreach($data as $row)
      {


    ?>

      <div class="row">

        <div class="col-sm-4 text-center">
             
             
            <label for="pdate">Purchase Date</label>

        </div>

        <div class="col-sm-8">

            <input type="date"  name="pdate" value="<?php echo $row->pdate; ?>">
      
         </div>
      

      </div>

      <br>

       <div class="row">

         <div class="col-sm-4 text-center">
      
          
            <label for="pname">Product Name</label>

        </div>

        <div class="col-sm-8">

            <input type="text"  name="pname" placeholder="Product name.." value="<?php echo $row->pname; ?>">
      

         </div>
      

      </div>

      <br>

     <div class="row">

         <div class="col-sm-4 text-center">
            
            <label for="cop">Cost of Product</label>

          </div>

        <div class="col-sm-8">

            <input type="number"  name="cop" placeholder="Enter Cost of Product.." value="<?php echo $row->cop; ?>">
      
         </div>
  
     </div>  

     <br>

     <div class="row">

      
          <div class="col-sm-4 text-center">
            
             <label for="qty">Product Quantity</label>

          </div>

          <div class="col-sm-8">

            <input type="number"  name="qty" placeholder="Enter the Product Quantity" autocomplete="off" value="<?php echo $row->qty; ?>" onkeyup="calCost()">
            
           </div>

     </div> 

     <br>

      <div class="row">

      
          <div class="col-sm-4 text-center">
            
            
             <label for="pamt">Purchase Amount</label>

          </div>

          <div class="col-sm-8">

            <input type="number"  name="pamt" placeholder="Enter Purchase Amount" value="<?php echo $row->pamt; ?>">
            
           </div>


     </div> 

     <br>


    <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="purchaseby">Purchase By</label>

          </div>

          <div class="col-sm-8">

            <input type="text"  name="purchaseby" placeholder="Enter Purchase By" value="<?php echo $row->purchaseby; ?>">  

             
           </div>


     </div> 

     <br>

     <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="pofp">Purpose of Purchase</label>

          </div>

          <div class="col-sm-8">

            <input type="text"  name="pofp" placeholder="Enter Purpose of Purchase" value="<?php echo $row->pofp; ?>">  
             
           </div>


     </div> 



<br>

<div class="row">

    <div class="col-sm-4 text-center">
    <br>
     <input type="reset"  value="Reset Data">
    </div>

    <div class="col-sm-4 text-center">
      <br>
      <input type="submit" name="update_purchase_details" value="Update Data">

      <br>
    </div>

    <?php

      }

    ?>

    <div class="col-sm-4 text-center">
      <br>
       <a href="go_to_dashboard">
         <input type="button"  value="Go To Dashboard">
       </a>
       

    </div>


</div>  <!-- end of row4  -->


<br><br>
<div class="row">

	<div class="col-sm-12 text-center">

		<?php echo @$msg;  ?>

	</div>	
	
</div>

</div> <!--  end of contariner -->
       <br><br>
   </form>		

</body>
</html>