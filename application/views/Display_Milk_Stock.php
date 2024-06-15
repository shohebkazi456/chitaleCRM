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
      font-size: 18px;
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

      <table border="1" width="50%" cellpadding="7">

        <tr bgcolor="#006598">
          <th colspan="6"><h1>Cow Milk Stock Details</h1></th>
        </tr>

        <tr bgcolor="#006598">
          
          <th>Date</th>
          <th>Cow Milk Stock</th>
          <th>Retailer Buy</th>
          <th>Client Buy</th>
          <th>Total Buy</th>
          <th>Balance Stock</th>
          
        </tr>

         <?php

          $date = date('d-m-Y');

                foreach($data as $row)
                {

                  $total_cow_milk_stock=$row->cmqty;
                  
                  echo "<tr id='data' align='center'>";

                  echo "<td>".$date."</td>";  
                  
                    echo "<td>".$row->cmqty."</td>";
                                       
                }

                foreach($c_data_cm as $row)
                {

                  $c_cm_purchase=$row->c_cm_purchase;
             
                }

                foreach($r_data_cm as $row)
                {
                    $r_cm_purchase=$row->r_cm_purchase;
                    
                }

                $total_cow_milk_purchased=$c_cm_purchase+$r_cm_purchase;

                $balance_stock_cow=$total_cow_milk_stock-$total_cow_milk_purchased;

                echo "<td>".$r_cm_purchase."</td>";

                echo "<td>".$c_cm_purchase."</td>";


                echo "<td>".$total_cow_milk_purchased."</td>";


                if($total_cow_milk_purchased>=$total_cow_milk_stock)
                {
                   
                   echo "<td style='background-color:red;'><strong>Out of Stock</strong></td>";
                }
                else
                {

                  echo "<td>".$balance_stock_cow."</td>";
                }

            echo "</tr>";   

                
        ?>

      </table>

      <br><br><br>

      <table border="1" width="50%" cellpadding="7">

        <tr bgcolor="#006598">
          <th colspan="6"><h1>Buffalo Milk Stock Details</h1></th>
        </tr>

        <tr bgcolor="#006598">
          
          <th>Date</th>
          <th>Buffalo Milk Stock</th>
          <th>Retailer Buy</th>
          <th>Client Buy</th>
          <th>Total Buy</th>
          <th>Balance Stock</th>
          
        </tr>
        
        <?php

                foreach($data as $row)
                {

                  $total_buffalo_milk_stock=$row->bmqty;
                  
                  echo "<tr id='data' align='center'>";

                  echo "<td>".$date."</td>";
                  
                    echo "<td>".$row->bmqty."</td>";
                                       
                }

                foreach($c_data_bm as $row)
                {

                  $c_bm_purchase=$row->c_bm_purchase;
              
                }

                foreach($r_data_bm as $row)
                {
                    $r_bm_purchase=$row->r_bm_purchase;
                    
                }

                $total_buffalo_milk_purchased=$c_bm_purchase+$r_bm_purchase;

                $balance_stock_buffalo=$total_buffalo_milk_stock-$total_buffalo_milk_purchased;

                echo "<td>".$r_bm_purchase."</td>";

                echo "<td>".$c_bm_purchase."</td>";

                echo "<td>".$total_buffalo_milk_purchased."</td>";

                if($total_buffalo_milk_purchased>=$balance_stock_buffalo)
                {
                   echo "<td style='background-color:red;'><strong>Out of Stock</strong></td>";
                }
                else
                {
                  echo "<td>".$balance_stock_buffalo."</td>";
                }

            echo "</tr>";   

                
        ?>    

  </table>
    </center>

</body>
</html>