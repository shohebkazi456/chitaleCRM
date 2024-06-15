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

     #data:hover{
      background-color: #87CEFA;
      color: black;
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
           
      <table border="1" width="100%" cellpadding="3">

        <tr bgcolor="#006598">
          <th colspan="24"><h1>Client Invoice Details</h1></th>
        </tr>

        <tr bgcolor="#006598">
          <th>SN</th>
          <th>Invoice Date</th>
          <th>Company Name</th>
          <th>Owner Name</th>
          <th>Delivery Address</th>
          <th>Contact No</th>

          <th>Product 1</th>
          <th>Price 1</th>
          <th>Quantity 1</th>
          <th>Bill Amount 1</th>

          <th>Product 2</th>
          <th>Price 2</th>
          <th>Quantity 2</th>
          <th>Bill Amount 2</th>

          <th>Product 3</th>
          <th>Price 3</th>
          <th>Quantity 3</th>
          <th>Bill Amount 3</th>

          <th>Total Bill Amount</th>
          <th>GST Amount</th>
          <th>Final Bill Amount</th>
          <th>Prepared By</th>

          <th>Remove</th>
          <th>Update</th>
        </tr>
           
             <?php
  
                $x=1;

                foreach($data as $row)
                {
                  echo "<tr id='data'>";
                  echo "<td>".$x."</td>";
                  echo "<td>".$row->invoice_date."</td>";
                  echo "<td>".$row->company_name."</td>";
                  echo "<td>".$row->owner_name."</td>";
                  echo "<td>".$row->deliveryaddress."</td>";
                  echo "<td>".$row->contactno."</td>";
                  echo "<td>".$row->pname1."</td>";
                  echo "<td>".$row->unitprice1."</td>";
                  echo "<td>".$row->qty1."</td>";
                  echo "<td>".$row->billamt1."</td>";
                  echo "<td>".$row->pname2."</td>";
                  echo "<td>".$row->unitprice2."</td>";
                  echo "<td>".$row->qty2."</td>";
                  echo "<td>".$row->billamt2."</td>";
                  echo "<td>".$row->pname3."</td>";
                  echo "<td>".$row->unitprice3."</td>";
                  echo "<td>".$row->qty3."</td>";
                  echo "<td>".$row->billamt3."</td>";
                  echo "<td>".$row->totalbillamt."</td>";
                  echo "<td>".$row->gstamt."</td>";
                  echo "<td>".$row->finalbillamt."</td>";
                  echo "<td>".$row->invoicepreparedby."</td>";               

    echo "<td>
          <button id='btn1'><a href='delete_client_invoice?id=".$row->invoice_id."'>
             Delete 
          </a></button>
        </td>";

    echo "<td>
            <button id='btn2'><a href='update_client_invoice?id=".$row->invoice_id."'>
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