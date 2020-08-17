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
            <h2>Most Wanted</h2>
          </div>

          <?php
          // Establish Connection with Database
          $con = mysqli_connect("localhost", "root");
          // Select Database
          mysqli_select_db($con, "cms");
          // Specify the query to execute
          $sql = "select * from mostwanted_tbl order by Station_Name";
          // Execute query
          $result = mysqli_query($con, $sql);
          // Loop through each records
          while ($row = mysqli_fetch_array($result)) {
            $Id=$row['Wanted_Id'];
            $Name=$row['Wanted_Name'];
            $Loc=$row['Wanted_Location'];
            $Crime=$row['Wanted_Crime'];
            $Desc=$row['Wanted_Desc'];
            $Photo=$row['Wanted_Image'];
          ?>

            <div class="container border m-2">
              <div class="row">
                <div class="col-md-3 my-auto"><img class="img-fluid" src="Documents/<?php echo $Photo; ?>" alt=""></div>
                <div class="col-md-9">
                  <table class="table table-bordered">
                    <tr>
                      <th>Name:</th>
                      <td><?php echo $Name; ?></td>
                    </tr>
                    <tr>
                      <th>Location:</th>
                      <td><?php echo $Loc; ?></td>
                    </tr>
                    <tr>
                      <th>Description:</th>
                      <td><?php echo $Desc; ?></td>
                    </tr>
                    <tr>
                      <th>Crime:</th>
                      <td><?php echo $Crime; ?></td>
                    </tr>

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
