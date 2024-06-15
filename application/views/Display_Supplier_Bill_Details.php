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
      font-size: 16px;
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


    <center>
            <br><br><br>

    	<table border="1" width="70%" cellpadding="7">

        <tr bgcolor="#006598">
          <th colspan="9"><h1>Supplier Bill Details</h1></th>
        </tr>

    		<tr bgcolor="#006598">
    			<th>SN</th>
    		
    			<th>Supplier Name</th>
          <th>Cow Milk Quantity</th>
          <th>Cow Milk Rate</th>
          <th>Cow Milk Cost</th>
          <th>Buffalo Milk Quantity</th>
          <th>BUffalo Milk Rate</th>
          <th>Buffalo Milk Cost</th>
          <th>Total Bill Amount</th>

    		</tr>
           
             <?php
	
                $x=1;

                foreach($data as $row)
                {
                  echo "<tr id='data'>";
                  
                    echo "<td>".$x."</td>";
                    echo "<td>".$row->sname."</td>";
                    echo "<td>".$row->cmqty."</td>";
                    echo "<td>30</td>";
                    echo "<td>".$row->cbill."</td>";
                    echo "<td>".$row->bmqty."</td>";
                    echo "<td>40</td>";
                    echo "<td>".$row->bbill."</td>";
                    echo "<td>".$row->tbillamt."</td>";                

                  echo "</tr>";       

                 $x++;
          }
    ?>

  </table>
    </center>

</body>
</html>