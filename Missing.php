<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crime Investigation Department</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background: grey;">
  <div class="container">
    <?php
    include "includes/Header.php";
    ?>


    <div class="row text-center mb-3">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="row divbackgroundlower">
          <div class="col-md-12 mx-auto mt-5 mb-5">
            <h2>Missing Persons</h2>
          </div>

          <?php
          // Establish Connection with Database
          $con = mysqli_connect("localhost", "root");
          // Select Database
          mysqli_select_db($con, "cms");
          // Specify the query to execute
          $sql = "select * from missingperson_tbl order by Station_Name";
          // Execute query
          $result = mysqli_query($con, $sql);
          // Loop through each records 
          while ($row = mysqli_fetch_array($result)) {
            $Id = $row['Person_Id'];
            $Name = $row['First_Name'] . " " . $row['Middle_Name'] . " " . $row['Last_Name'];
            $Gender = $row['Gender'];
            $Height = $row['Height'];
            $Weight = $row['Weight'];
            $Contact_Person = $row['Contact_Person'];
            $Contact_Address  = $row['Contact_Address'];
            $Contact_City  = $row['Contact_City'];
            $Contact_Mobile = $row['Contact_Mobile'];
            $Photo = $row['Photo'];
          ?>

            <div class="container border m-2">
              <div class="row">
                <div class="col-md-3 my-auto"><img class="img-fluid" src="Documents/<?php echo $Photo; ?>" alt=""></div>
                <div class="col-md-9">
                  <table class="table">
                    <tr>
                      <th>Name:</th>
                      <td><?php echo $Name; ?></td>
                      <th>Contact Person:</th>
                      <td><?php echo $Contact_Person; ?></td>
                    </tr>
                    <tr>
                      <th>Gender:</th>
                      <td><?php echo $Gender; ?></td>
                      <th>Contact Address:</th>
                      <td><?php echo $Contact_Address; ?></td>
                    </tr>
                    <tr>
                      <th>Height:</th>
                      <td><?php echo $Height; ?></td>
                      <th>Contact City:</th>
                      <td><?php echo $Contact_City; ?></td>
                    </tr>
                    <tr>
                      <th>Weight</th>
                      <td><?php echo $Weight; ?></td>
                      <th>Contact Mobile:</th>
                      <td><?php echo $Contact_Mobile; ?></td>
                    </tr>
                    <tr></tr>
                  </table>
                </div>

              </div>
            </div>


          <?php
          }
          // Close the connection
          mysqli_close($con);
          ?>

          <div class="cleaner"></div>
        </div> <!-- end of section_w760 -->
        
      </div>
      <div class="col-md-1"></div> 
    </div><!-- end of templatemo_content -->
      <?php
      include "includes/Footer.php";
      ?>

    </div> <!-- end of templatemo_wrapper -->
    
</body>

</html>