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
          <th colspan="10"><h1>New Client Registration Details</h1></th>
        </tr>

    		<tr bgcolor="#006598">
    			<th>SN</th>
    		
    			<th>Company</th>
    			<th>Name</th>
    			<th>Contact</th>
    			<th>Email</th>
    			<th>Product List</th>
    			<th>Address</th>
    			<th>Delivery</th>

    			<th>Remove</th>
    			<th>Update</th>
    		</tr>
           
             <?php
	
                $x=1;

                foreach($data as $row)
                {
                  echo "<tr id='data'>";
                  echo "<td>".$x."</td>";
                  echo "<td>".$row->shopname."</td>";
                  echo "<td>".$row->cname."</td>";
                  echo "<td>".$row->mobileno."</td>";
                  echo "<td>".$row->emailid."</td>";
                  echo "<td>".$row->product."</td>";
                  echo "<td>".$row->shopaddress."</td>";
                  echo "<td>".$row->deliveryby."</td>";                

    echo "<td>
          <button id='btn1'><a href='delete_new_client_data?id=".$row->client_id."'>
             Delete 
          </a></button>
        </td>";

    echo "<td>
            <button id='btn2'><a href='update_new_client_data?id=".$row->client_id."'>
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