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

<body>

  <br><br>

  <a href="go_to_dashboard"><button id="dashid">Go to Dashboard</button></a>

  <form method="get">

    <center>
            <br><br>

    <table border="1" cellpadding="7">

        <tr bgcolor="#006598">
          <th colspan="15"><h1>Fresher Candidate Interview Details</h1></th>
        </tr>

        <tr bgcolor="#006598">
          <th>SN</th>

          <th>Interview Date</th>
          <th>Full Name</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Address</th>
          <th>Branch</th>
          <th>Type of Candidate</th>

          <th>Salary Expectation</th>
          <th>Grade</th>
          <th>HR Remark</th>
          <th>Status</th>

          <th>Remove</th>
          <th>Update</th>
        </tr>
           
             <?php
  
                $x=1;

                foreach($data as $row)
                {
                  
                  if($row->toc=='Fresher')
                  {
                        echo "<tr id='data'>";
                        echo "<td>".$x."</td>";
                        echo "<td>".$row->idate."</td>";
                        echo "<td>".$row->firstname." ".$row->lastname."</td>";
                        echo "<td>".$row->gender."</td>";
                        echo "<td>".$row->phone."</td>";
                        echo "<td>".$row->email."</td>";
                        echo "<td>".$row->address."</td>";
                        echo "<td>".$row->branch."</td>";                
                        echo "<td>".$row->toc."</td>";
                        echo "<td>".$row->salary_expectation."</td>";
                        echo "<td>".$row->grade."</td>";
                        echo "<td>".$row->hr_remark."</td>";
                        
                        echo "<td>".$row->status."</td>";

                        echo "<td>
                              <button id='btn1'><a href='delete_interview_screening?id=".$row->ci_id."&t=".$row->toc."'>
                                 Delete 
                              </a></button>
                            </td>";

                        echo "<td>
                                <button id='btn2'><a href='update_interview_screening?id=".$row->ci_id."&t=".$row->toc."'>
                                  Update
                                </a></button>
                              </td>";  

                        echo "</tr>";

                      $x++;


                  }    

              }
    
    ?>

  </table>

  <br><br>

  </center>

  </form>


</body>
</html>