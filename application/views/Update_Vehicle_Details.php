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
/*
#insuranceid{
  display: none;
}
*/
</style>

<script type="text/javascript">
  
    function insuranceyes()
    {

      var status1=document.getElementById('iyes').checked;

        if(status1==true)
        {
          document.getElementById('insuranceid').style.display='block';
        }
        else
        {
          document.getElementById('insuranceid').style.display='none';
        }

    }

    function insuranceno()
    {

      var status2=document.getElementById('ino').checked;


        if(status2==true)
        {
          document.getElementById('insuranceid').style.display='none';
        }
        else
        {
          document.getElementById('insuranceid').style.display='block';
        }

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

                  <h1> Vehicle Registration </h1>          	
          </div>
 
    </div> 	
    <br>

     <?php 

      foreach($data as $row)
      {


    ?>

       <div class="row">

         <div class="col-sm-4 text-center">
      
          
            <label for="vname">Vehicle Name</label>

        </div>

        <div class="col-sm-8">

              <select name="vname">
                  <option <?php if($row->vname=='Truck') { echo "selected"; } ?>  value="Truck">Truck</option>
                  <option <?php if($row->vname=='Eic') { echo "selected"; } ?>  value="Eicher">Eicher</option>
                  <option <?php if($row->vname=='Mini Truck') { echo "selected"; } ?>  value="Mini Truck">Mini Truck</option>
               </select>  
      
         </div>
      

      </div>

      <br>

     <div class="row">

         <div class="col-sm-4 text-center">
            
            <label for="vno">Vehicle No</label>

          </div>

        <div class="col-sm-8">

            <input type="text"  name="vno" placeholder="Enter Vehicle No.." value="<?php echo $row->vno; ?>">
      
         </div>
  
     </div>  

     <br>

     <div class="row">

      
          <div class="col-sm-4 text-center">
            
             <label for="dname">Driver Name</label>

          </div>

          <div class="col-sm-8">

            <input type="text"  name="dname" placeholder="Enter the Driver Name" value="<?php echo $row->dname; ?>" autocomplete="off">
            
           </div>

     </div> 

     <br>

      <div class="row">

      
          <div class="col-sm-4 text-center">
            
            
             <label for="lno">Licence No</label>

          </div>

          <div class="col-sm-8">

            <input type="text"  name="lno" value="<?php echo $row->lno; ?>" placeholder="Enter Licence No">
            
           </div>


     </div> 

     <br>


    <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="address">Address</label>

          </div>

          <div class="col-sm-8">

            <input type="text"  name="address" value="<?php echo $row->address; ?>" placeholder="Enter Address">  

             
           </div>


     </div> 

     <br>

     <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="phoneno">Phone No</label>

          </div>

          <div class="col-sm-8">

            <input type="number"  name="phoneno" value="<?php echo $row->phoneno; ?>" placeholder="Enter Phone No">  
             
           </div>


     </div> 


     <br>

     <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="aphoneno">Alternate Phone No</label>

          </div>

          <div class="col-sm-8">

            <input type="number"  name="aphoneno" value="<?php echo $row->aphoneno; ?>" placeholder="Enter Alternate Phone No">  
             
           </div>


     </div> 

     <br>

     <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="phoneno">Aadhar Card No</label>

          </div>

          <div class="col-sm-8">

            <input type="number"  name="aadharcardno" value="<?php echo $row->aadharcardno; ?>" placeholder="Enter Aadhar Card No">  
             
           </div>


     </div> 

     <br>

     <div class="row">


           <div class="col-sm-4 text-center">
              
              
              <label for="insurance">Insurance</label>

          </div>

          <div class="col-sm-8">

            <input type="radio" name="insurance" <?php if($row->insurance == 'Yes') { echo "checked"; } ?> id="iyes" value="Yes" onclick="insuranceyes()">&nbsp;&nbsp;Yes &nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="insurance" <?php if($row->insurance == 'No') { echo "checked"; } ?> id="ino" value="No" onclick="insuranceno()">&nbsp;&nbsp;No 
             
           </div>


     </div> 

     <br>

       <div class="row" id="insuranceid">

         <div class="col-sm-4 text-center">
          
            <label for="insurance_c">Insurance Company</label>

        </div>

        <div class="col-sm-8">

              <select name="insurance_c">
                <option <?php if($row->insurance_c=='') { echo "selected"; } ?> value="">--No Insurance Company--</option>
                  <option <?php if($row->insurance_c=='HDFC') { echo "selected"; } ?> value="HDFC">HDFC</option>
                  <option <?php if($row->insurance_c=='ICICI') { echo "selected"; } ?> value="ICICI">ICICI</option>
                  <option <?php if($row->insurance_c=='SBI') { echo "selected"; } ?> value="SBI">SBI</option>
                  <option <?php if($row->insurance_c=='Bajaj Allianz General Insurance') { echo "selected"; } ?> value="Bajaj Allianz General Insurance">Bajaj Allianz General Insurance</option>
                  <option <?php if($row->insurance_c=='National Insurance Company') { echo "selected"; } ?> value="National Insurance Company">National Insurance Company</option>
                  <option <?php if($row->insurance_c=='AXIS') { echo "selected"; } ?> value="AXIS">AXIS</option>
               </select>  
      
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
      <input type="submit" name="update_vehicle_details" value="Update Data">

      <br>
    </div>

    <div class="col-sm-4 text-center">
      <br>
       <a href="go_to_dashboard">
         <input type="button"  value="Go To Dashboard">
       </a>
       

    </div>


</div>  <!-- end of row4  -->


    <?php

      }

    ?>


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