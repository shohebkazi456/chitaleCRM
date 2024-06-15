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

                  <h1> New Employee Registration</h1>          	
          </div>
 
    </div> 	
    <br>

      <div class="row">


         <div class="col-sm-4">
      
          <br>
            <label for="fname">First Name</label>

            <input type="text"  name="firstname" placeholder="First name..">
      

         </div>

         
          <div class="col-sm-4">
             <br>
            <label for="lname">Last Name</label>
            <input type="text"  name="lastname" placeholder="Last name..">
      
         </div>


         <div class="col-sm-4">
            <br>
            <label for="phoneno">Phone No</label>
            <input type="number"  name="phone" placeholder="Phone no..">
      
         </div>
      

      </div>	 <!-- end of 1st row -->


<br><br>

     <div class="row">
     	
           <div class="col-sm-4">
           	<br>
           	 <label for="email">Email Id</label>
            <input type="text"  name="email" placeholder="Enter the Email">
           	
           </div>


          <div class="col-sm-4">
          	<br>
           	 <label for="address">Address</label>
            <input type="text"  name="address" placeholder="Enter Complete address">
           	
           </div>



           <div class="col-sm-4">
                 <br>
               <label for="Job">Select Job</label>
               <select name="job">
                  <option value="Chairmen">Chairmen</option>
                  <option value="Manager">Manager</option>
                  <option value="Supervisor">Supervisor</option>
                  <option value="Clerk">Clerk</option>
                  <option value="Salesmen">Salesmen</option>
               </select>   

             
           </div>



     </div>   <!-- end of 2nd row --> 

<br><br>
	
	 <div class="row">
     	
           <div class="col-sm-4">
           	<br>
           	 <label for="adharcardno">Adhar Card No</label>
            <input type="number"  name="adharcardno" placeholder="Enter the Adhar Card no">
           	
           </div>


           <div class="col-sm-4">
            <br>
             <label for="pancard">Pancard No</label>
            <input type="text"  name="pancardno" placeholder="Enter the Pan Card no" style="text-transform: uppercase;">
            
           </div>



    		<div class="col-sm-4">
    			<br>
      
      			 <label for="gender">Select Gender</label>
      
     			 <div class="radio">
          			<label><input type="radio" name="gender" value="Male">Male</label>
      			<!-- </div>
      
      			<div class="radio"> -->

          			<label><input type="radio" name="gender" value="Female">Female</label>
      		 	</div>
      
    		</div>



</div>   <!-- end of 3rd row --> 

	<br><br>




<div class="row">

      <div class="col-sm-4">


          <label for="jobloc">Select Job Location</label>
               <select name="jobloc">
                  <option value="Pune">Pune</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Kolhapur">Kolhapur</option>
                  <option value="Nashik">Nashik</option>
                  <option value="Satara">Satara</option>
               </select>  
                     
      </div>  


      <div class="col-sm-4">

           <label for="year_of_exp">Total Year of Exp</label>
            <input type="number"  name="year_of_exp" placeholder="Enter Year of Expriences">
           
        
      </div>  


     <div class="col-sm-4">

        <label for="hiredate">Hire Date</label>
            <input type="date"  name="hiredate" placeholder="Enter hiredate">
        
     </div>  

</div>   <!-- end of 4th row -->


<br><br>

<div class="row">

      <div class="col-sm-4">
         <label for="emp_blood_group">Employee Blood Group</label>
         <input type="text" name="emp_blood_group" placeholder="Enter Employee blood group">
        
      </div>




      <div class="col-sm-4">
           <label for="spouse_name">Spouse Name</label>
           <input type="text" name="spouse_name" placeholder="Enter Spouse name">

      </div>


      <div class="col-sm-4">

         <label for="spouse_phoneno">Spouse Phone no</label>
         <input type="number" name="spouse_phoneno" placeholder="Enter Spouse Phone no">
        
      </div>



</div>   <!-- end of 5th row -->


<br><br>


<div class="row">

      <div class="col-sm-4">
         <label for="monthly_sal">Monthly Salary</label>
         <input type="number" name="monthly_sal" placeholder="Enter Monthly Salary">
        
      </div>




      <div class="col-sm-4">

           <label for="incentive">Select Incentive</label>
      
            <div class="radio">
                <label><input type="radio" name="incentive" value="Applicable">Applicable</label>
            <!-- </div>
      
            <div class="radio"> -->
                <label><input type="radio" name="incentive" value="Not Applicable">Not Applicable</label>
            </div>
           

      </div>


      <div class="col-sm-4">

            <label for="insurance">Select Insurance</label>
      
           <div class="radio">
                <label><input type="radio" name="insurance" value="Self">Self</label>
           <!--  </div>
      
            <div class="radio"> -->
              <label><input type="radio" name="insurance" value="Floater">Family Floater</label>
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
      <input type="submit" name="submit_register_new_emp" value="Register New Employee">

      <br><br>
    </div>


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