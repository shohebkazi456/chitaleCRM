<!DOCTYPE html>
<html>
<head>
	<title>www.crmchitale.com</title>
  <style type="text/css">
    
    button,input[type=submit]{
      padding: 8px;
      width: 20%;
      border-radius: 5px;
      font-size: 17px;
      border: none;
      background-color: crimson;
    } 

    table,tr{
      border-radius: 5px;
      border-collapse: collapse;
      border: 1px solid white;
      color: black;
    }

    a{
      color: white;
      text-decoration: none;
      font-size: 14px;
    }

  </style>
</head>
<body bgcolor="lightgrey">

  <br><br>

  <a href="go_to_dashboard"><button style="margin-left: 1000px;">Go to Dashboard</button></a>

<form method="post">

    <center>
            <br><br>
            <h1>Employee Attendance</h1>

    	<table border="1" width="70%" cellpadding="3">
    		<tr bgcolor="#000123" style="color:white">
    			
          <!-- <th>SR.NO</th> -->
          <th>Employee ID</th>
          <th>Date</th>
    			<th>Full Name</th>
          <!-- <th>Attendance By</th> by admin or employee -->
    			<th>Attendance Status</th>

    			<th>Remove</th>
    			<th>Update</th>

    		</tr>
           
             <?php
	
                $x=1;

                foreach($data as $row)
                {
                  
                  echo "<tr>";
                  // echo "<td>".$x."</td>";
                  echo "<td>".$row->employee_id."</td>";
                  echo "<td>".date('Y-m-d')."</td>";
                  echo "<td>".$row->firstname." ".$row->lastname."</td>";
                  echo "<td>
                          <select name='attendance_status'>
                              <option value='' disabled selected>-- Select Status--</option>
                              <option value='Present'>Present</option>
                              <option value='Absent'>Absent</option>
                              <option value='Leave'>Leave</option>
                          </select>
                        </td>";



    echo "<td>
          <a href='#?id=".$row->employee_id."'>
             Delete 
          </a>
        </td>";

    echo "<td>
            <a href='#?id=".$row->employee_id."'>
              Update
            </a>
          </td>";  

    echo "</tr>";       

                 $x++;
          }
    
    ?>

    <tr>
      <td colspan="6" align="center">
        <input type="submit" name="attendance_mark" value="Submit Attendance">
      </td>
    </tr>

  </table>
    </center>

    </form>

</body>
</html>