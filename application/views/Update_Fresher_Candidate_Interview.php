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

input[type=text],select,input[type=date],input[type=number],input[type=email]
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

#exp_person_id,#exp_person_salary_id,#total_exp_id,#notice_period_id{
  display: none;
}

</style>

<script type="text/javascript">

  function fun_exp()
  {
  
    var toc=document.getElementsByName('toc');

    if(toc[0].value=="Experience")
    {
        document.getElementById('exp_person_id').style.display='block';

        document.getElementById('exp_person_salary_id').style.display='block';

        document.getElementById('total_exp_id').style.display='block';

        document.getElementById('notice_period_id').style.display='block';
    }

  }

  function fun_fresher()
  {

     var toc=document.getElementsByName('toc');

    if(toc[1].value=="Fresher")
    {
        document.getElementById('exp_person_id').style.display='none';

        document.getElementById('exp_person_salary_id').style.display='none';

        document.getElementById('total_exp_id').style.display='none';

        document.getElementById('notice_period_id').style.display='none';
    }


  }


</script>
	
</head>
<body bgcolor="crimson">

	<form method="post">

<br><br>

  <?php 

      foreach($data as $row)
      {


    ?>

<div class="container">
	<br><br>

    <div class="row">
             
          <div class="col-sm-12 text-center">

                  <h1> Update Fresher Candidate Interview Details</h1>          	
          </div>
 
    </div> 	
    <br>

    <div class="row">


         <div class="col-sm-3">
      
            <label for="idate">Interview Date</label>

          </div>

          <div class="col-sm-9">

            <input type="date"  name="idate" value="<?php echo $row->idate; ?>">
      
         </div>

      </div>

      <br>

      <div class="row">


         <div class="col-sm-3">
      
            <label for="fname">First Name</label>

          </div>

          <div class="col-sm-9">

            <input type="text"  name="firstname" placeholder="First name.." value="<?php echo $row->firstname; ?>">
      

         </div>

      </div>

      <br>

      <div class="row">
         
          <div class="col-sm-3">
    
            <label for="lname">Last Name</label>

          </div>

          <div class="col-sm-9">

            <input type="text"  name="lastname" placeholder="Last name.." value="<?php echo $row->lastname; ?>">
      
         </div>

      </div>

      <br>

      <div class="row">
         
          <div class="col-sm-3">
    
            <label for="gender">Gender</label>

          </div>

          <div class="col-sm-9">

            <input type="radio" name="gender" value="Male">&nbsp;&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="gender" value="Female">&nbsp;&nbsp;Female
      
         </div>

      </div>

      <br>

      <div class="row">
         
          <div class="col-sm-3">

          <label for="phoneno">Phone No</label>

          </div>

          <div class="col-sm-9">

            <input type="number"  name="phone" placeholder="Phone no.." value="<?php echo $row->phone; ?>">
      
         </div>

      </div>

      <br>

     <div class="row">
     	
          <div class="col-sm-3">
      
           	 <label for="email">Email Id</label>

          </div>

          <div class="col-sm-9">

            <input type="email"  name="email" placeholder="Enter the Email" value="<?php echo $row->email; ?>">
           	
           </div>

    </div>

    <br>

    <div class="row">
      
       <div class="col-sm-3">
           	 
             <label for="address">Address</label>

        </div>

        <div class="col-sm-9">

            <input type="text"  name="address" placeholder="Enter Complete address" value="<?php echo $row->address; ?>">
           	
        </div>


    </div>

    <br>

       <div class="row">
      
            <div class="col-sm-3">
                
               <label for="branch">Select Branch</label>

            </div>

            <div class="col-sm-9">

               <select name="branch">
                  <option value="Computer">Computer</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="EnTC">EnTC</option>
                  <option value="Mechanical">Mechanical</option>
                  <option value="Management">Management</option>
                  <option value="Electrical">Electrical</option>
                  <option value="Commerce">Commerce</option>
               </select>   
             
           </div>

     </div>  

     <br>

	 <div class="row">
     	
      <div class="col-sm-3">

          <label for="type_of_candidate">Type of Candidate</label>

      </div>

      <div class="col-sm-9">

        <input type="radio" name="toc" value="Experience" onclick="fun_exp()" disabled>&nbsp;&nbsp;Experience &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="toc" value="Fresher" onclick="fun_fresher()" checked>&nbsp;&nbsp;Fresher
                       
      </div>

  </div>  

  <br>

  <div class="row">

      <div class="col-sm-3">
         <label for="salary_expectation">Salary Expectation</label>

       </div>

       <div class="col-sm-9">

         <input type="number" name="salary_expectation" placeholder="Enter Monthly Salary Expectation" value="<?php echo $row->salary_expectation; ?>">
        
      </div>

  </div>

  <br>

  <div class="row">
    
    <div class="col-sm-3">
      <label for="grade">Test Grdae</label>
    </div>

    <div class="col-sm-9">
      <select name="grade">

        <option value="" disabled selected>--Select Test Grade--</option>
        <option value="Excellent">Excellent</option>
        <option value="Good">Good</option>
        <option value="Average">Average</option>
        <option value="Below Average">Below Average</option>

      </select>
    </div>

  </div>

  <br>

  <div class="row">

      <div class="col-sm-3">
         
         <label for="hr_remark">HR Remark</label>

       </div>

       <div class="col-sm-9">

         <input type="text" name="hr_remark" placeholder="Enter HR Remark" value="<?php echo $row->hr_remark; ?>">
        
      </div>

  </div>

  <br>

  <div class="row">

      <div class="col-sm-3">
         
         <label for="status">Status</label>

       </div>

       <div class="col-sm-9">

        <select name="status">

          <option value="" disabled selected>--Select Candidate Status--</option>
          <option value="Selected">Selected</option>
          <option value="On Hold">On Hold</option>
          <option value="Rejeceted">Rejeceted</option>
          <option value="In Process">In Process</option>

       </select>
        
      </div>

  </div>


<br><br>

<div class="row">

  <div class="col-sm-4 text-center">
    <br>
     <input type="reset"  value="Reset Data">
    </div>

    <div class="col-sm-4 text-center">
      <br>
      <input type="submit" name="update_fresher_candidate_interview" value="Update Interview Details">

      <br>
    </div>


    <div class="col-sm-4 text-center">
      <br>
       <a href="go_to_dashboard">
         <input type="button"  value="Go To Dashboard">
       </a>

    </div>

    <?php

      }

    ?>


</div> 

<br><br>
<div class="row">

	<div class="col-sm-12 text-center">

		<?php echo @$msg;  ?>

	</div>	
	
</div>

</div> <!--  end of container -->
       <br><br>
   </form>		

</body>
</html>