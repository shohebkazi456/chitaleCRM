<!DOCTYPE html>
<html>
<head>
	<title>www.crmchitale.com</title>
  <style type="text/css">
    
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
</head>
<body bgcolor="crimson">

  <br><br>

  <a href="go_to_dashboard"><button id="dashid">Go to Dashboard</button></a>


    <center>
            <br><br>

    	<table border="1" width="100%" cellpadding="3">

        <tr bgcolor="#006598">
          <th colspan="20"><h1>Employee Registered Details</h1></th>
        </tr>

    		<tr bgcolor="#006598">
    			
          <th>SR.NO</th>
    			<th>Full Name</th>
    			<th>Contact No</th>
    			<th>Email ID</th>
    			<th>Address</th>
    			<th>Job</th>
    			<th>Aadharcard No</th>
          <th>Pancard No</th>
          <th>Gender</th>
          <th>Job Location</th>
          <th>Year of Exp</th>
          <th>Hirdate</th>
          <th>Blood Group</th>
          <th>Spouse Name</th>
          <th>Spouse Phone No</th>
          <th>Monthly Salary</th>
          <th>Incentive</th>
          <th>Insurance</th>

    			<th>Remove</th>
    			<th>Update</th>

    		</tr>
           
             <?php
	
                $x=1;

                foreach($data as $row)
                {
                  echo "<tr id='data'>";
                  echo "<td>".$x."</td>";
                  echo "<td>".$row->firstname." ".$row->lastname."</td>";
                  echo "<td>".$row->phone."</td>";
                  echo "<td>".$row->email."</td>";
                  echo "<td>".$row->address."</td>";
                  echo "<td>".$row->job."</td>";
                  echo "<td>".$row->adharcardno."</td>";
                  echo "<td>".$row->pancardno."</td>";
                  echo "<td>".$row->gender."</td>";
                  echo "<td>".$row->jobloc."</td>";
                  echo "<td>".$row->year_of_exp."</td>";
                  echo "<td>".$row->hiredate."</td>";
                  echo "<td>".$row->emp_blood_group."</td>";
                  echo "<td>".$row->spouse_name."</td>";
                  echo "<td>".$row->spouse_phoneno."</td>";
                  echo "<td>".$row->monthly_sal."</td>";
                  echo "<td>".$row->incentive."</td>";
                  echo "<td>".$row->insurance."</td>";


    echo "<td>
          <button id='btn1'><a href='delete_employee_data?id=".$row->employee_id."'>
             Delete 
          </a></button>
        </td>";

    echo "<td>
            <button id='btn2'><a href='update_employee_data?id=".$row->employee_id."'>
              Update
            </a></button>
          </td>";  

    echo "</tr>";       

                 $x++;
          }
    ?>

  </table>
    </center>

</body>
</html>