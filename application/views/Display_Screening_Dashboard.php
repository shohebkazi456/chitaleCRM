<!DOCTYPE html>
<html>
<head>
  <title>www.crmchitale.com</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style type="text/css">

    body{
        background-color: #000123;
      color: white;
      font-family: arial;
    }

    a{
      text-decoration: none;
    }

    button{
      width: 100%;
      border: none;
    }

    table{
      border-radius: 5px;
      border-collapse: collapse;
      border: 1px solid white;
      color: white;
    }

    th{
      font-size: 15px;
      color: white;
    }

    td{
      font-size: 12px;
      padding: 18px;
    }

  </style>

</head>

<body>

  <br><br><br>

<div class="container-fluid">
    
<br><br><br>

<center>

  <table border="1" cellpadding="7">

      <tr align="center" bgcolor="#006598">
        
        <td colspan="4">
        
          <h2><b>Fresher & Experience Candidate Interview Details</b></h2>
       
        </td>
      
      </tr>

    <tr bgcolor="#006598" align="center">

      <td>

          <h3><b>Total Candidates</b></h3>

      </td>

      <td>

          <h3><b>Total Fresher Candidates</b></h3>

      </td>

      <td>

          <h3><b>Total Experience Candidates</b></h3>

       </td>

       <td>
            
            <h3><b>Shortest Notice Period</b></h3>
       
       </td>

    </tr>


    <?php

    $cf=0;

    $ce=0;

    $csnp=0;

      foreach($data as $row)
      {

        if($row->toc=="Fresher")
        {
          $cf++;
        }

        if($row->toc=="Experience")
        {
          $ce++;
        }

        if($row->notice_period<=10 && $row->notice_period!="" && $row->notice_period!=0)
        {
          $csnp++;
        }

      }

    ?>

    <tr align="center">

      <td>

          <h3><?php echo $cf+$ce; ?></h3>

      </td>
      
      <td>

          <h3><?php echo $cf; ?></h3>

      </td>

      <td>

          <h3><?php echo $ce; ?></h3>

      </td>

      <td>

          <h3><?php echo $csnp; ?></h3>

      </td>

    </div>


    <tr>

      <td>
        
        <a href="go_to_dashboard"><button class="btn btn-danger btn-lg">Go to Dashboard</button></a>

      </td>
      
      <td>

          <a href="show_fresher_interview_screening"><button class="btn btn-success btn-lg">Display Fresher Candidate</button></a>

      </td>

      <td>

          <a href="show_exp_interview_screening"><button class="btn btn-success btn-lg">Display Experience Candidate</button></a>

      </td>

      <td>

          <a href="show_exp_shot_np_interview_screening"><button class="btn btn-success btn-lg">Display Shortest Notice Period Candidate</button></a>

      </td>

    </tr>

</table>

</center>

</div>

</body>
</html>