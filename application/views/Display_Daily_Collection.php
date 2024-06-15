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


    <center>
            <br><br>

    	<table border="1" width="90%" cellpadding="7">

        <tr bgcolor="#006598">
          <th colspan="15"><h1>Daily Collection Details</h1></th>
        </tr>

    		<tr bgcolor="#006598">
    			<th>SN</th>
    		
    			<th>Supplier Name</th>
    			<th>Date</th>
          <th>Products</th>
    			<th>Cow Milk Quantity</th>
    			<th>Cow Milk Fat</th>
    			<th>Cow Milk Rate</th>
          <th>Cow Milk Cost</th>
          <th>Buffalo Milk Quantity</th>
          <th>Buffalo Milk Fat</th>
          <th>Buffalo Milk Rate</th>
          <th>Buffalo Milk Cost</th>
          <th>Total Bill Amount</th>

    			<th>Remove</th>
    			<th>Update</th>
    		</tr>
           
             <?php
	
                $x=1;

                foreach($data as $row)
                {
                  echo "<tr id='data'>";
                  echo "<td>".$x."</td>";
                  echo "<td>".$row->sname."</td>";
                  echo "<td>".$row->sdate."</td>";
                  echo "<td>".$row->myproduct."</td>";
                  echo "<td>".$row->cmqty."</td>";
                  echo "<td>".$row->cmfat."</td>";
                  echo "<td>".$row->cmrate."</td>";
                  echo "<td>".$row->cbill."</td>";
                  echo "<td>".$row->bmqty."</td>";   
                  echo "<td>".$row->bmfat."</td>";
                  echo "<td>".$row->bmrate."</td>";
                  echo "<td>".$row->bbill."</td>";
                  echo "<td>".$row->tbillamt."</td>";                

    echo "<td>
          <button id='btn1'><a href='delete_dailycollection_data?id=".$row->dc_id."'>
             Delete 
          </a></button>
        </td>";

    echo "<td>
            <button id='btn2'><a href='update_dailycollection_data?id=".$row->dc_id."'>
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