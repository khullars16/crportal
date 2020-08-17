<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crime Investigation Department</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body style="background: grey">
  <div class="container">
    <?php
    include "../includes/userHeader.php"
    ?>

    <!-- content start  -->

    <div class="row text-center mb-3">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="row divbackgroundlower">

          <div class="col-md-12 mx-auto mt-5 mb-5">
            <h2>Edit Your Profile</h2>
          </div>

          <div class="col-md-12 text-justify my-auto text-center">


            <form id="editUserProfile">
              <?php
              $sql = "select * from user_tbl where User_Id='" . $_GET['Id'] . "' ";
              $result = mysqli_query($connection, $sql);
              while ($row = mysqli_fetch_array($result)) {
                $Id = $row['User_Id'];
                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $Address = $row['address'];
                $City = $row['city'];
                $Email = $row['email'];
                $Mobile = $row['mobile'];
                $Gender = $row['gender'];
                $Birthdate = $row['dob'];
                $Station_Name = $row['station_name'];
                $UserName = $row['username'];
                $Password = $row['password'];
              }
              ?>
              <input type="hidden" name="editUserData" value="" />
              <table class="table">
                <tr>
                  <td>ID:</td>
                  <td><?php echo $Id; ?></td>
                  <input type="hidden" name="userid" value="<?php echo $Id; ?>" />
                </tr>
                <tr>
                  <td>First Name:</td>
                  <td>
                    <input type="text" name="txtfname" value="<?php echo $fname; ?>" />
                  </td>
                </tr>
                <tr>
                  <td>Last Name:</td>
                  <td>
                    <input type="text" name="txtlname" value="<?php echo $lname; ?>" />
                  </td>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>
                    <input type="text" name="txtAdd" value="<?php echo $Address; ?>" />

                  </td>
                </tr>
                <tr>
                  <td>City:</td>
                  <td>
                    <input type="text" name="txtCity" value="<?php echo $City; ?>" />
                  </td>
                </tr>
                <tr>
                  <td>Mobile:</td>
                  <td>
                    <input type="text" name="txtMobile" value="<?php echo $Mobile; ?>" />
                  </td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>
                    <input type="text" name="txtEmail" value="<?php echo $Email; ?>" />
                  </td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td>
                    <select name="cmbGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>BirthDate:</td>
                  <td>
                    <input type="text" name="txtBirthDate" value="<?php echo $Birthdate; ?>" />
                  </td>
                </tr>
                <tr>
                  <td>Station Name:</td>
                  <td><?php echo $Station_Name; ?></td>
                </tr>
                <tr>
                  <td>Username:</td>

                  <td>
                    <input type="text" name="txtUser" value="<?php echo $UserName; ?>" />
                  </td>
                </tr>
                <tr>

                  <td>Password:</td>
                  <td>
                    <input type="text" name="txtPass" value="<?php echo $Password; ?>" />
                  </td>
                </tr>

                <tr>
                  <td></td>
                  <td><input type="submit" name="button" id="button" value="Update Profile" /></td>
                </tr>

              </table>
              <?php
              // Close the connection
              mysqli_close($connection);
              ?>
            </form>


          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>

    <!-- content end  -->



    <?php
    include "../includes/userFooter.php";
    ?>

  </div> <!-- end of templatemo_wrapper -->


<script src="../ajax/updateUserProfile.js"></script>

</body>

</html>