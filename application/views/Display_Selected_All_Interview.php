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

  <br><br><br>

  <a href="go_to_dashboard"><button id="dashid">Go to Dashboard</button></a>

  <form method="get">

    <center>
            <br><br><br><br>

      <table border="1" width="60%" cellpadding="10">

        <tr bgcolor="#006598">
          <th colspan="5"><h1>Fresher & Experience Selected Candidates List</h1></th>
        </tr>

        <tr bgcolor="#006598">
          <th>SN</th>

          <th>Full Name</th>
          <th>Gender</th>
          <th>Type of Candidate</th>
          <th>Status</th>

        </tr>
           
             <?php
  
                $x=1;

                $f=0;
                $e=0;

                foreach($data as $row)
                {

                 echo "<tr id='data'>";

                        echo "<td>".$x."</td>";

                        echo "<td>".$row->firstname." ".$row->lastname."</td>";
                        echo "<td>".$row->gender."</td>";
                                        
                        echo "<td>".$row->toc."</td>";     

                        echo "<td>".$row->status."</td>";

                    echo "</tr>";

                    if($row->toc=='Fresher')
                    {
                      $f++;
                    }
                    else
                    {
                      $e++;
                    }
                      

                      $x++;
        
          
                  }

                  echo "<tr id='data'><td colspan=4>Total Fresher Candidates</td><td>".$f."</td></tr>";

                  echo "<tr id='data'><td colspan=4>Total Experience Candidates</td><td>".$e."</td></tr>";

    ?>

  </table>
  
  <br><br>

  </center>

  </form>


</body>
</html>