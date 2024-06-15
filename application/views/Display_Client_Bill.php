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

     #data:hover{
      background-color: #87CEFA;
      color: black;
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
           
    	<table border="1" width="70%" cellpadding="7" style="font-size: 20px;">

        <tr bgcolor="#006598">
          <th colspan="3"><h1>Client Bill</h1></th>
        </tr>

    		<tr bgcolor="#006598">
    			<th>SR.NO</th>
    			<th>Company Name</th>
          <th>Final Bill Amount</th>
    		</tr>
           
             <?php
	
                $x=1;

                foreach($data as $row)
                {
                  echo "<tr id='data' align='center'>";
                  echo "<td>".$x."</td>";
                  echo "<td>".$row->company_name."</td>";
                  echo "<td>".$row->finalclientbill."</td>";
                  echo "</tr>";       

                  $x++;

                }

            ?>

  </table>
  
    </center>

</body>
</html>