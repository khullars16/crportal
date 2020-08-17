<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crime Investigation Department</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="css/customStyle.css" rel="stylesheet" type="text/css" />

</head>

<body style="background: grey">
  <div class="container">
    <?php
    include "includes/Header.php";
    ?>

    <div class="row text-center mb-3">

      <div class="col-md-1"></div>

      <div class="col-md-10">

        <div class="row divbackgroundlower p-5">

          <div class="col-md-12 mx-auto mt-5 mb-5">
            <h2>Register Here To Complain Online</h2>
          </div>

          <div class="row mx-auto">

            <form class="border p-5" id="register-user">
              <input type="hidden" name="registeruser">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                </div>
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" cols="30" rows="3" class="form-control" placeholder="1234 Main St"></textarea>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group col-md-6">
                  <label for="state">State</label>
                  <input type="text" class="form-control" id="state" name="state">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                    <option disabled selected>Select your option</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
                </div>
                <div class="form-group col-md-6">
                  <label for="dob">DOB</label>
                  <input type="text" class="form-control" id="dob" name="dob" placeholder="Enter Your DOB">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="policestation">Police Station</label>
                  <select class="form-control" name="policestation" id="policestation">
                    <option disabled selected>Select policestation</option>
                    <?php $sql = "SELECT Station_Name FROM policestation_tbl";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <option><?php echo $row["Station_Name"]; ?></option>

                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                </div>
                <div class="form-group col-md-6">
                  <label for="phone">Mobile Number</label>
                  <input type="text" class="form-control" id="phone" placeholder="Enter Your Mobile No" name="phone">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password">
                </div>
                <div class="form-group col-md-6">
                  <label for="cpassword">Confirm Password</label>
                  <input type="password" class="form-control" id="cpassword" placeholder="Confirm Your Password" name="cpassword">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>


          </div>


        </div>
      </div>
      <div class="col-md-1"></div>
    </div>

  </div>
  <!-- end of templatemo_content -->
  <?php
  include "includes/Footer.php";
  ?>

  </div> <!-- end of templatemo_wrapper -->

  <!-- <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.validate.min.js"></script> -->
  <script src="ajax/registerUser.js"></script>
</body>

</html>
<?php
//mysqli_free_result($Recordset1);
?>