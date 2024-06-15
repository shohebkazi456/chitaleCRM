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
  width: 100%;
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
 padding: 14px 20px;
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
	
</head>
<body bgcolor="crimson">

	<form method="post">

   	 
<br><br>

<div class="container">
	<br><br>

    <div class="row">
             
          <div class="col-sm-12 text-center">

                  <h1> Update Employee</h1>          	
          </div>
 
    </div> 	
    <br>

      <?php 

      foreach($data as $row)
      {


    ?>

      <div class="row">


         <div class="col-sm-4">
      
          <br>
            <label for="fname">First Name</label>

            <input type="text"  name="firstname" placeholder="First name.." value="<?php echo $row->firstname; ?>">
      

         </div>

         
          <div class="col-sm-4">
             <br>
            <label for="lname">Last Name</label>
            <input type="text"  name="lastname" placeholder="Last name.." value="<?php echo $row->lastname; ?>">
      
         </div>


         <div class="col-sm-4">
            <br>
            <label for="phoneno">Phone No</label>
            <input type="number"  name="phone" placeholder="Phone no.." value="<?php echo $row->phone; ?>">
      
         </div>
      

      </div>	 <!-- end of 1st row -->


<br><br>

     <div class="row">
     	
           <div class="col-sm-4">
           	<br>
           	 <label for="email">Email Id</label>
            <input type="text"  name="email" placeholder="Enter the Email" value="<?php echo $row->email; ?>">
           	
           </div>


          <div class="col-sm-4">
          	<br>
           	 <label for="address">Address</label>
            <input type="text"  name="address" placeholder="Enter Complete address" value="<?php echo $row->address; ?>">
           	
           </div>



           <div class="col-sm-4">
                 <br>
               <label for="Job">Select Job</label>
               <select name="job">
                  <option <?php if($row->job=='Chairmen') { echo "selected"; } ?> value="Chairmen">Chairmen</option>
                  <option <?php if($row->job=='Manager') { echo "selected"; } ?> value="Manager">Manager</option>
                  <option <?php if($row->job=='Supervisor') { echo "selected"; } ?> value="Supervisor">Supervisor</option>
                  <option <?php if($row->job=='Clerk') { echo "selected"; } ?> value="Clerk">Clerk</option>
                  <option <?php if($row->job=='Salesmen') { echo "selected"; } ?> value="Salesmen">Salesmen</option>
               </select>   
           </div>



     </div>   <!-- end of 2nd row --> 

<br><br>
	
	 <div class="row">
     	
           <div class="col-sm-4">
           	<br>
           	 <label for="adharcardno">Adhar Card No</label>
            <input type="number"  name="adharcardno" placeholder="Enter the Adhar Card no" value="<?php echo $row->adharcardno; ?>">
           	
           </div>


           <div class="col-sm-4">
            <br>
             <label for="pancard">Pancard No</label>
            <input type="text"  name="pancardno" placeholder="Enter the Pan Card no" style="text-transform: uppercase;" value="<?php echo $row->pancardno; ?>">
            
           </div>



    		<div class="col-sm-4">
    			<br>
      
      			 <label for="gender">Select Gender</label>
      
     			 <div class="radio">
          			<label><input type="radio" name="gender" value="Male" <?php if($row->gender == 'Male') { echo "checked"; } ?> >Male</label>
      			<!-- </div>
      
      			<div class="radio"> -->

          			<label><input type="radio" name="gender" value="Female" <?php if($row->gender == "Female") { echo "checked"; } ?> >Female</label>
      		 	</div>
      
    		</div>



</div>   <!-- end of 3rd row --> 

	<br><br>




<div class="row">

      <div class="col-sm-4">


          <label for="jobloc">Select Job Location</label>
               <select name="jobloc">
                  <option <?php if($row->jobloc=='Pune') { echo "selected"; } ?> value="Pune">Pune</option>
                  <option <?php if($row->jobloc=='Mumbai') { echo "selected"; } ?> value="Mumbai">Mumbai</option>
                  <option <?php if($row->jobloc=='Kolhapur') { echo "selected"; } ?> value="Kolhapur">Kolhapur</option>
                  <option <?php if($row->jobloc=='Nashik') { echo "selected"; } ?> value="Nashik">Nashik</option>
                  <option <?php if($row->jobloc=='Satara') { echo "selected"; } ?> value="Satara">Satara</option>
               </select>  
                     
      </div>  


      <div class="col-sm-4">

           <label for="year_of_exp">Total Year of Exp</label>
            <input type="number"  name="year_of_exp" placeholder="Enter Year of Expriences" value="<?php echo $row->year_of_exp; ?>">
           
        
      </div>  


     <div class="col-sm-4">

        <label for="hiredate">Hire Date</label>
            <input type="date"  name="hiredate" placeholder="Enter hiredate" value="<?php echo $row->hiredate; ?>">
        
     </div>  

</div>   <!-- end of 4th row -->


<br><br>

<div class="row">

      <div class="col-sm-4">
         <label for="emp_blood_group">Employee Blood Group</label>
         <input type="text" name="emp_blood_group" placeholder="Enter Employee blood group" value="<?php echo $row->emp_blood_group; ?>">
        
      </div>




      <div class="col-sm-4">
           <label for="spouse_name">Spouse Name</label>
           <input type="text" name="spouse_name" placeholder="Enter Spouse name" value="<?php echo $row->spouse_name; ?>">

      </div>


      <div class="col-sm-4">

         <label for="spouse_phoneno">Spouse Phone no</label>
         <input type="number" name="spouse_phoneno" placeholder="Enter Spouse Phone no" value="<?php echo $row->spouse_phoneno; ?>">
        
      </div>



</div>   <!-- end of 5th row -->


<br><br>


<div class="row">

      <div class="col-sm-4">
         <label for="monthly_sal">Monthly Salary</label>
         <input type="number" name="monthly_sal" placeholder="Enter Monthly Salary" value="<?php echo $row->monthly_sal; ?>">
        
      </div>




      <div class="col-sm-4">

           <label for="incentive">Select Incentive</label>
      
            <div class="radio">

                <label><input type="radio" name="incentive" value="Applicable" <?php if($row->incentive == 'Applicable') { echo "checked"; } ?> >Applicable</label>
            <!-- </div>
      
            <div class="radio"> -->
                <label><input type="radio" name="incentive" value="Not Applicable" <?php if($row->incentive == 'Not Applicable') { echo "checked"; } ?>>Not Applicable</label>
            </div>
           

      </div>


      <div class="col-sm-4">

            <label for="insurance">Select Insurance</label>

           <div class="radio">
                <label><input type="radio" name="insurance" value="Self" <?php if ($row->insurance == 'Self') { echo "checked"; } ?> >Self</label>
           <!--  </div>
      
            <div class="radio"> -->
              <label><input type="radio" name="insurance" value="Floater" <?php if ($row->insurance == 'Floater') { echo "checked"; } ?> >Family Floater</label>
            </div> 
        
      </div>



</div>   <!-- end of 6th row -->


<br><br>


<div class="row">

  <div class="col-sm-4 text-center">
    <br>
     <input type="reset"  value="Reset Data">
    </div>

    <div class="col-sm-4 text-center">
      <br>
      <input type="submit" name="updateemployee" value="Update Employee">

      <br><br>
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