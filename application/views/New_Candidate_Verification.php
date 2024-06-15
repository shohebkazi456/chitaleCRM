<!DOCTYPE html>
<html>
<head>
  <title>www.chitalecrm.com</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">


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
  /*background: rgba(0,0,0,0.3);*/
  background-color: crimson;
  color: gold;
  
}

#exp_person_id,#exp_person_salary_id,#total_exp_id,#notice_period_id{
  display: none;
}

 body{
      background-color: #000123;
      color: white;
      font-family: arial;
    }
    
    #dashid{
      padding: 8px;
      width: 22%;
      border-radius: 5px;
      font-size: 20px;
      border: none;
      background-color: orangered;
      color: white;
      margin-left: 73%;
    } 

    table{
      border-radius: 5px;
      border-collapse: collapse;
      border: 1px solid white;
      color: white;
    }

    a{
      color: white;
      text-decoration: none;
      font-size: 13px;
    }

    th{
      font-size: 15px;
      color: white;
    }

    td{
      font-size: 14px;
      padding: 10px;
    }

    #data:hover{
      background-color: #87CEFA;
      color: black;
    }

    #btn1,#btn2{
      background-color: crimson;
      border: none;
      border-radius: 4px;
      padding: 7px;
      width: 100%;
    }

    #btn2{
      background-color: green;
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
      }

      var address_status=document.getElementsByName('address_status');
      var branch_status=document.getElementsByName('branch_status');

      if(toc[1].checked==true)
      {
        if(address_status[0].checked==true && branch_status[0].checked==true)
        {
          document.f1.hr_verification_status.value="Verified Successfully";
        }

        if(address_status[1].checked==true || branch_status[1].checked==true)
        {
          document.f1.hr_verification_status.value="Verification Fail";
        }

      }

  }

  function valid_fun()
  {
    var address_status=document.getElementsByName('address_status');
    var branch_status=document.getElementsByName('branch_status');

    var company_status=document.getElementsByName('company_status');
    var sal_status=document.getElementsByName('sal_status');
    var exp_status=document.getElementsByName('exp_status');
    
    if(address_status[0].checked==true && branch_status[0].checked==true && company_status[0].checked==true && sal_status[0].checked==true && exp_status[0].checked==true)
    {
      document.f1.hr_verification_status.value="Verified Successfully";
    }

    if(address_status[1].checked==true || branch_status[1].checked==true || company_status[1].checked==true|| sal_status[1].checked==true || exp_status[1].checked==true)
    {
      document.f1.hr_verification_status.value="Verification Fail";
    }

  }



</script>
  
</head>
<body bgcolor="crimson">

  <form method="post" name="f1">


    <center>

      <br><br>

     <table border="1" width="76%" cellpadding="10">

        <tr bgcolor="#006598" >
          <th colspan="9"><h1 align="center">Selected Candidates List</h1></th>
        </tr>

        <tr bgcolor="#006598">
          <th>SN</th>

          <th>Full Name</th>
          <th>Phone No</th>
          <th>Address</th>
          <th>Branch</th>
          <th>Type of Candidate</th>
          <th>Previous Company</th>
          <th>Previous Total Experience</th>
          <th>Status</th>

        </tr>
           
             <?php
  
                $x=1;

                foreach($data as $row)
                {

                  if($row->toc=="Fresher")
                  {
                    $row->companyname='Not Applicable';
                    $row->year_of_exp='Not Applicable';
                  }

                 echo "<tr id='data'>";

                        echo "<td>".$x."</td>";

                        echo "<td>".$row->firstname." ".$row->lastname."</td>";

                        echo "<td>".$row->phone."</td>";

                        echo "<td>".$row->address."</td>";

                        echo "<td>".$row->branch."</td>";   
                                        
                        echo "<td>".$row->toc."</td>";  

                        echo "<td>".$row->companyname."</td>";

                        echo "<td>".$row->year_of_exp."</td>";

                        echo "<td>".$row->status."</td>";

                    echo "</tr>";


                    $x++;
        
          
                  }

                  ?>

                </table>

                </center>


<br><br>

<div class="container">
  <br><br>

    <div class="row">
             
          <div class="col-sm-12 text-center">

                  <h1> Verification of Candidate</h1>           
          </div>
 
    </div>  
    <br>

    <div class="row">


         <div class="col-sm-3">
      
            <label for="vdate">* &nbsp; Verification Date</label>

          </div>

          <div class="col-sm-9">

            <input type="date"  name="vdate">
      
         </div>

      </div>

      <br>

      <div class="row">


         <div class="col-sm-3">
      
            <label for="fname">* &nbsp;First Name</label>

          </div>

          <div class="col-sm-9">

            <input type="text"  name="firstname" placeholder="First name..">
      

         </div>

      </div>

      <br>

      <div class="row">
         
          <div class="col-sm-3">
    
            <label for="lname">* &nbsp;Last Name</label>

          </div>

          <div class="col-sm-9">

            <input type="text"  name="lastname" placeholder="Last name..">
      
         </div>

      </div>

      <br>

    <div class="row">
         
          <div class="col-sm-3">

          <label for="psphoneno">* &nbsp;Parents/Spouse Phone No</label>

          </div>

          <div class="col-sm-9">

            <input type="number"  name="psphone" placeholder="Phone no..">
      
         </div>

      </div>

    <br>

    <div class="row">
      
       <div class="col-sm-3">
             
             <label for="address">* &nbsp;Address Verification</label>

        </div>

        <div class="col-sm-9">

            <input type="radio" name="address_status" onclick="valid_fun()" value="Valid">&nbsp;&nbsp;Valid &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="address_status" onclick="valid_fun()" value="Not Valid">&nbsp;&nbsp;Not Valid
            
        </div>


    </div>

    <br>

       <div class="row">
      
            <div class="col-sm-3">
                
               <label for="branch">* &nbsp;Verify Branch</label>

            </div>

            <div class="col-sm-9">

              <input type="radio" name="branch_status" onclick="valid_fun()" value="Valid">&nbsp;&nbsp;Valid &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="branch_status" onclick="valid_fun()" value="Not Valid">&nbsp;&nbsp;Not Valid 
             
           </div>

     </div>  

     <br>

   <div class="row">
      
      <div class="col-sm-3">

          <label for="type_of_candidate">* &nbsp;Type of Candidate</label>

      </div>

      <div class="col-sm-9">

        <input type="radio" name="toc" value="Experience" onclick="fun_exp()">&nbsp;&nbsp;Experience &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="toc" value="Fresher" onclick="fun_fresher()">&nbsp;&nbsp;Fresher
                       
      </div>

  </div>  

    <div class="row" id="exp_person_id">

    <br>

      <div class="col-sm-3">

          <label for="company">* &nbsp;Past Company Name</label>

      </div>

      <div class="col-sm-9">

        <input type="radio" name="company_status" onclick="valid_fun()" value="Valid">&nbsp;&nbsp;Valid &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="company_status" onclick="valid_fun()" value="Not Valid">&nbsp;&nbsp;Not Valid

      </div>

    </div>

    <div class="row" id="exp_person_salary_id">

      <br>

      <div class="col-sm-3">

          <label for="prev_salary">* &nbsp;Previous Salary Per Month</label>

      </div>

      <div class="col-sm-9">

        <input type="radio" name="sal_status" onclick="valid_fun()" value="Valid">&nbsp;&nbsp;Valid &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="sal_status" onclick="valid_fun()" value="Not Valid">&nbsp;&nbsp;Not Valid

      </div>

    </div>

    <div class="row" id="total_exp_id">
      
      <br>

      <div class="col-sm-3">

           <label for="year_of_exp">* &nbsp;Total Year of Experience</label>

      </div>

      <div class="col-sm-9">

            <input type="radio" name="exp_status" onclick="valid_fun()" value="Valid">&nbsp;&nbsp;Valid &nbsp;&nbsp;&nbsp;&nbsp;

        <input type="radio" name="exp_status" onclick="valid_fun()" value="Not Valid">&nbsp;&nbsp;Not Valid
           
        
      </div> 

    </div> 

  <br>

  <div class="row">

      <div class="col-sm-3">
         
         <label for="hr_verification_status">* &nbsp; HR Remark for verification</label>

       </div>

       <div class="col-sm-9">

        <input type="text"  name="hr_verification_status">

         <!-- <select name="verification_status">
          <option value="" disabled selected>-- Select Verification Remark --</option>
           <option value="Verified Successfully">Verified Successfully</option>
           <option value="Verification Fail">Verification Fail</option>
         </select> -->
        
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
      <input type="submit" name="submit_verification_candidate" value="Submit Verification">

      <br>
    </div>


    <div class="col-sm-4 text-center">
      <br>
       <a href="go_to_dashboard">
         <input type="button"  value="Go To Dashboard">
       </a>

    </div>

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